<?php
/** 
 * @package WpFoodMenuApi
*/
/*
Plugin Name:  WP Food Menu API
Plugin URI:   https://github.com/jundellagbo/wp-food-menu-api
Description:  WP Food Menu API requires Food Menu plugin, it will retrieve all your product including categories using api. This is being used for mobile application development to get the products data and integrate to the front-end.
Version:      1.5
Author:       Jundell Agbo
Author URI:   https://www.facebook.com/jundell.ictned.ph
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/
defined( 'ABSPATH' ) or die;

// Require once the Composer Autoload
if( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * Runs Plugin Activation
 */
register_activation_hook( __FILE__, array( 'Inc\\Base\\Activate', 'activate' ) );

/**
 * Runs Plugin Deactivation
 */
register_deactivation_hook( __FILE__, array( 'Inc\\Base\\Deactivate', 'deactivate' ) );

/**
 * Runs Plugin Uninstall
 */
register_uninstall_hook( __FILE__, array( 'Inc\\Base\\Uninstall', 'uninstall' ) );

// Instantiate all classes with Init class
if( class_exists( 'Inc\\Init' ) ) {
    Inc\Init::register_services();
}