<?php
/**
 * Plugin Name: Always Show Admin Bar
 * Plugin URI: https://github.com/JCPry/wp-always-show-admin-bar
 * Description: Always Show the WordPress Admin Bar. 
 * Version: 1.0
 * Author: Jeremy Pry
 * Author URI: http://jeremypry.com/
 * License: GPL2
 */

// Prevent direct access to this file
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You can\'t do anything by accessing this file directly.' );
}

add_filter( 'show_admin_bar', '__return_true', 999999, 1 );