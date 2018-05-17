<?php
/**
 * Functions and Definitions
 *
 * This document contains the custom functions and definitions for various WordPress
 * theme functionality.
 *
 * @package WordPress
 * @subpackage Brisk
 * @since Brisk 1.0
 */

/**
 * Register Styles & Scripts
 *
 * The code below registers custom WordPress styles using wp_register_style()
 * function.
 *
 * @since Brisk 1.0
 */

function brisk_styles() {
	// Load main stylesheet
	wp_enqueue_style('brisk-style', get_template_directory_uri() . '/style.min.css');

	// Load main javascript
	wp_enqueue_script('brisk-script', get_template_directory_uri() . '/functions.min.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'brisk_styles');

// Move jQuery to footer
function brisk_jquery_footer() {
	// unregister jquery
	wp_deregister_script('jquery');

	// register to footer
	wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, null, true);

	wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'brisk_jquery_footer');

/**
 * Register Menus
 *
 * The code below registers custom WordPress menus using register_my_menus()
 * function.
 *
 * @since Brisk 1.0
 */

function brisk_register_menus() {
	register_nav_menus(
		array(
			'main-menu' => __('Main Menu')
		)
	);
}

add_action('init', 'brisk_register_menus');

/**
 * Advanced Custom Fields Settings
 *
 * The code below adds and adjusts various functionality for the Advanced Custom
 * Fields PRO plugin.
 *
 * @since Brisk 1.0
 */

if( function_exists('acf_add_options_page') ) {

	// Theme settings
	acf_add_options_page( array(
		'page_title' => 'Theme Settings',
		'menu_title' => 'Theme Settings',
		'parent_slug' => 'themes.php'
	));

}

// Include fields
require_once('acf-fields.php');
