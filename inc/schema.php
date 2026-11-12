<?php
/**
 * JSON-LD structured data.
 *
 * Yoast SEO is active and its Site Representation is already configured as a
 * Person, so Yoast outputs its own WebPage + BreadcrumbList + WebSite + Person
 * graph on every page already (confirmed live: @id .../#/schema/person/...).
 * Don't duplicate that here — a second competing Person node or a second,
 * differently-labelled BreadcrumbList is worse than none (conflicting
 * structured data, not just redundant). This file only adds what Yoast's
 * generic Person/Organization representation can't: a ProfessionalService
 * node with local-SEO fields (address, areaServed, offer catalog), and
 * FAQPage schema for the services page FAQ.
 *
 * @package Victor-theme
 */

/**
 * ProfessionalService node, output on every page.
 *
 * Only city/country-level address is used (no street address) since this is a
 * remote/service-area freelance practice, not a walk-in office — see CLAUDE.md.
 */
function victor_theme_business_schema() {
	$home  = home_url( '/' );
	$photo = get_template_directory_uri() . '/images/victor-photo.jpg';

	$data = array(
		'@context'    => 'https://schema.org',
		'@type'       => 'ProfessionalService',
		'@id'         => $home . '#business',
		'name'        => 'Victor Muhia — SEO & WordPress Development',
		'url'         => $home,
		'image'       => $photo,
		'email'       => 'mailto:vmuhian@gmail.com',
		'telephone'   => '+254705991249',
		'address'     => array(
			'@type'           => 'PostalAddress',
			'addressLocality' => 'Nairobi',
			'addressCountry'  => 'KE',
		),
		'areaServed'  => array( 'Kenya', 'Worldwide (remote)' ),
		'sameAs'      => array( 'https://www.linkedin.com/in/victor-muhia-172747245' ),
		'hasOfferCatalog' => array(
			'@type' => 'OfferCatalog',
			'name'  => 'Services',
			'itemListElement' => array(
				array(
					'@type' => 'Offer',
					'itemOffered' => array(
						'@type' => 'Service',
						'name'  => 'Technical & On-Page SEO',
						'description' => 'Technical SEO audits, keyword research, and on-page optimization.',
					),
				),
				array(
					'@type' => 'Offer',
					'itemOffered' => array(
						'@type' => 'Service',
						'name'  => 'WordPress Development',
						'description' => 'Custom WordPress theme design and development built for speed and search visibility.',
					),
				),
			),
		),
	);

	victor_theme_print_ld_json( $data );
}
add_action( 'wp_head', 'victor_theme_business_schema' );

/**
 * FAQPage schema. Called directly from template-services.php with the same
 * $victor_faqs array used to render the visible <details> markup, so the
 * schema can never say something the page doesn't.
 *
 * @param array $faqs Array of array( 'q' => ..., 'a' => ... ).
 */
function victor_theme_faq_schema( $faqs ) {
	if ( empty( $faqs ) ) {
		return;
	}

	$items = array();
	foreach ( $faqs as $faq ) {
		$items[] = array(
			'@type'          => 'Question',
			'name'           => $faq['q'],
			'acceptedAnswer' => array(
				'@type' => 'Answer',
				'text'  => $faq['a'],
			),
		);
	}

	victor_theme_print_ld_json( array(
		'@context'         => 'https://schema.org',
		'@type'            => 'FAQPage',
		'mainEntity'       => $items,
	) );
}

/**
 * Shared JSON-LD output helper.
 */
function victor_theme_print_ld_json( $data ) {
	echo '<script type="application/ld+json">' . wp_json_encode( $data, JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
}
