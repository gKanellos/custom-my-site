<?php
/**
 * Theme functions and definitions.
 * This child theme was generated by Merlin WP.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/*
 * If your child theme has more than one .css file (eg. ie.css, style.css, main.css) then
 * you will have to make sure to maintain all of the parent theme dependencies.
 *
 * Make sure you're using the correct handle for loading the parent theme's styles.
 * Failure to use the proper tag will result in a CSS file needlessly being loaded twice.
 * This will usually not affect the site appearance, but it's inefficient and extends your page's loading time.
 *
 * @link https://codex.wordpress.org/Child_Themes
 */
function rhye_child_enqueue_styles() {
	wp_enqueue_style( 'rhye-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style(
		'rhye-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'rhye-style' ),
		wp_get_theme()->get( 'Version' )
	);

	if ( function_exists( 'arts_is_elementor_feature_active' ) && function_exists( 'arts_is_elementor_feature_active' ) && ! arts_is_elementor_feature_active( 'e_optimized_assets_loading' ) && ! arts_is_async_assets_loading_enabled() ) {
		// unload Elementor's Swiper
		wp_deregister_script( 'swiper' );

		// load theme's Swiper
		wp_enqueue_style( 'swiper', ARTS_THEME_URL . '/css/swiper.min.css', array(), '6.4.15' );
		wp_enqueue_script( 'swiper', ARTS_THEME_URL . '/js/swiper.min.js', array( 'jquery' ), '6.4.15', true );
	}
}
add_action( 'wp_enqueue_scripts', 'rhye_child_enqueue_styles', 99 );


// The proper way to enqueue GSAP script
// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function theme_gsap_script() {
    wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js', array(), false, true );
	wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js', array(), false, true );
    wp_enqueue_script( 'gsap-js-custom', get_stylesheet_directory_uri() . '/js/custom-gsap-scripts.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );


/**
 * To customize the main theme JavaScript file:
 * 1. Copy file '/wp-content/themes/rhye/js/components.js' to '/wp-content/themes/rhye-child/js/components.js'
 * 2. Uncomment the code lines below
*/

// add_action( 'wp_enqueue_scripts', 'rhye_child_enqueue_custom_scripts', 60 );
// function rhye_child_enqueue_custom_scripts() {
//   // unload parent theme frontend
//   wp_deregister_script( 'rhye-components' );
//   wp_dequeue_script( 'rhye-components' );

//   // load child theme custom frontend from /rhye-child/js/components.js
//   wp_enqueue_script( 'rhye-components', get_stylesheet_directory_uri() . '/js/components.js', array( 'modernizr', 'jquery', 'barba', 'isotope', 'imagesloaded' ), wp_get_theme()->get( 'Version' ), true );
// }