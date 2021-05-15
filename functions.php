<?php
/**
 * @package McLuhan Child Theme
 */

/**
 * Load the stylesheets
 */
function mcluhan_custom_theme_style() {

	// Parent theme styles
	wp_enqueue_style( 'mcluhan-style', get_template_directory_uri(). '/style.css' );

	// Child theme styles
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri(). '/style.css' );

	// Custom font styles such as Inter font in this scenario
  	 wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap', false );  
}
add_action( 'wp_enqueue_scripts', 'mcluhan_custom_theme_style' );


/**
 * Add logo support
 */
add_theme_support( 'custom-logo' );
