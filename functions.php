<?php
/**
 * Victor Theme functions and definitions
 */

// template-parts/content*.php call victor_theme_post_thumbnail() (defined here) —
// without this require, page.php, search.php, and archive.php fatal-error.
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/schema.php';

// Basic theme support (lets WordPress know what features this theme handles)
function victor_theme_setup() {
	add_theme_support( 'title-tag' );        // WordPress manages the <title> tag
	add_theme_support( 'post-thumbnails' );   // Featured images
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Register the header nav so it can be edited in Appearance -> Menus
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'victor-theme' ),
	) );
}
add_action( 'after_setup_theme', 'victor_theme_setup' );

// Load styles, fonts, and scripts
function victor_theme_scripts() {
	// Google Fonts
	wp_enqueue_style(
		'victor-theme-fonts',
		'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap',
		array(),
		null
	);

	// Main theme stylesheet (style.css)
	wp_enqueue_style(
		'victor-theme-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	// Main theme JS (mobile nav + contact form interaction)
	wp_enqueue_script(
		'victor-theme-main',
		get_template_directory_uri() . '/js/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true // load in footer
	);

	// Pass the AJAX endpoint and a nonce into main.js for the contact form submission
	wp_localize_script( 'victor-theme-main', 'victorContactData', array(
		'ajax_url' => admin_url( 'admin-ajax.php' ),
		'nonce'    => wp_create_nonce( 'victor_contact_nonce' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'victor_theme_scripts' );

// Handle the contact form AJAX submission
function victor_handle_contact_form() {
	check_ajax_referer( 'victor_contact_nonce', 'nonce' );

	// Honeypot: if a bot filled this hidden field, pretend success but send nothing
	if ( ! empty( $_POST['website_url'] ) ) {
		wp_send_json_success( array(
			'message' => "Request received — I'll reply within one business day.",
		) );
	}

	$name     = isset( $_POST['name'] ) ? trim( sanitize_text_field( wp_unslash( $_POST['name'] ) ) ) : '';
	$email    = isset( $_POST['email'] ) ? trim( sanitize_email( wp_unslash( $_POST['email'] ) ) ) : '';
	$site     = isset( $_POST['site'] ) ? esc_url_raw( trim( wp_unslash( $_POST['site'] ) ) ) : '';
	$interest = isset( $_POST['interest'] ) ? sanitize_text_field( wp_unslash( $_POST['interest'] ) ) : '';
	$message  = isset( $_POST['message'] ) ? trim( sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) ) : '';

	$errors = array();

	if ( '' === $name ) {
		$errors['name'] = 'Please enter your name.';
	}
	if ( '' === $email || ! is_email( $email ) ) {
		$errors['email'] = 'Please enter a valid email address.';
	}
	if ( '' === $message ) {
		$errors['message'] = "Please enter a message describing what you'd like to improve.";
	}

	if ( ! empty( $errors ) ) {
		wp_send_json_error( array(
			'message' => 'Please fix the highlighted fields and try again.',
			'errors'  => $errors,
		) );
	}

	// Email #1 — notify Victor of the new inquiry
	$admin_subject = sprintf( 'New site inquiry from %s', $name );
	$admin_body    = "You've received a new inquiry from the contact form on victormuhia.co.ke:\n\n"
		. "Name: {$name}\n"
		. "Email: {$email}\n"
		. 'Website: ' . ( '' !== $site ? $site : 'Not provided' ) . "\n"
		. 'Interested in: ' . ( '' !== $interest ? $interest : 'Not specified' ) . "\n\n"
		. "Message:\n{$message}\n";
	$admin_headers = array( 'Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $email );
	$admin_sent    = wp_mail( 'vmuhian@gmail.com', $admin_subject, $admin_body, $admin_headers );

	// Email #2 — auto-reply to the submitter
	$reply_subject = sprintf( 'Thanks for reaching out, %s', $name );
	$reply_body    = "Hi {$name},\n\n"
		. "Thanks for getting in touch — I've received your message and will reply within one business day.\n\n"
		. "Here's a copy of what you sent:\n\n"
		. "\"{$message}\"\n\n"
		. "Talk soon,\n"
		. "Victor Muhia\n"
		. "SEO Specialist & WordPress Developer\n"
		. 'victormuhia.co.ke';
	$reply_headers = array( 'Content-Type: text/plain; charset=UTF-8' );
	$reply_sent    = wp_mail( $email, $reply_subject, $reply_body, $reply_headers );

	if ( ! $admin_sent || ! $reply_sent ) {
		wp_send_json_error( array(
			'message' => 'Something went wrong sending your request — please email me directly at vmuhian@gmail.com.',
		) );
	}

	wp_send_json_success( array(
		'message' => "Request received — I'll reply within one business day.",
	) );
}
add_action( 'wp_ajax_victor_contact_submit', 'victor_handle_contact_form' );
add_action( 'wp_ajax_nopriv_victor_contact_submit', 'victor_handle_contact_form' );
