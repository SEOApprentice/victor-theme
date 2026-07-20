<?php
/**
 * Victor Theme functions and definitions
 */

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
}
add_action( 'wp_enqueue_scripts', 'victor_theme_scripts' );
