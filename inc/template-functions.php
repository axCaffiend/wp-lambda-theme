<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ADHD_at_Uni
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function lambda_theme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'lambda_theme_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function lambda_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'lambda_theme_pingback_header' );



/* ----- CUSTOM FUNCTIONS -----*/

/* --- Load inline SVG --- */
/* Returns contents of inline SVG and inserts into DOM
- Solution: https://enshrined.co.uk/2018/09/19/how-to-properly-include-inline-svgs-in-a-wordpress-theme/

!! NOTE: Uses unsecure solution since switches off SSL certificate verification.
	Didn't work:
	- Tried downloading different certificate bundle
	- Tried adding openssl.cafile = path/to/git/openssl/cert.pem to php.ini file
	- Could be to do with Local, PHP version, finding right certificate bundle, or not working over HTTPS??

	- Solution (from first answer): https://stackoverflow.com/questions/26148701/file-get-contents-ssl-operation-failed-with-code-1-failed-to-enable-crypto

*/
function load_inline_svg($svg_filepath) {

	$arrContextOptions= [
		'ssl' => [
			// 'cafile' => '/wp-includes/certificates/curl-ca-bundle.crt',
			'verify_peer'=> false,
			'verify_peer_name'=> false,
		],
	];

	if (file_exists(get_stylesheet_directory() . $svg_filepath)) {
		return file_get_contents(get_stylesheet_directory_uri() . $svg_filepath, true, stream_context_create($arrContextOptions));
	}
	return '';
}
