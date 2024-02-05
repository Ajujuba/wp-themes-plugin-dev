<?php
/*
Plugin Name: 6.02.02 - Simple Plugin (with Directory)
Plugin URI: https://github.com/Ajujuba/wp-themes-plugin-dev
Description: Displays a message in the admin footer using multiple files. (Here using Plugin URI to create 'visit plugin site')
Version: 1.0.0
Author: Ana Alves
Author URI: https://github.com/Ajujuba
License: GPLv2 or later
Text Domain: wpplugin
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

include( plugin_dir_path( __FILE__ ) . 'includes/admin-footer-text.php');

?>
