<?php
/**
 * trident-web functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package trident-web
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function trident_web_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on trident-web, use a find and replace
		* to change 'trident-web' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'trident-web', get_template_directory() . '/languages' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'trident-web' ),
			'footer-primary' => esc_html__( 'Footer Menu - Primary', 'trident-web' ),
			'footer-secondary' => esc_html__( 'Footer Menu -Secondary', 'trident-web' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );


}
add_action( 'after_setup_theme', 'trident_web_setup' );


/**
 * Enqueue scripts and styles.
 */
function trident_web_scripts() {
	wp_enqueue_style( 'trident-web-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'trident-web-style', 'rtl', 'replace' );

	wp_enqueue_script( 'trident-web-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'trident_web_scripts' );


function block_parts_setup() {
    add_theme_support( 'block-template-parts' );
}
add_action( 'after_setup_theme', 'block_parts_setup' );