<?php
/*
Plugin Name: 6.02.01 - Simple Plugin
Description: Displays a message in the admin footer.
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

function wpplugin_custom_admin_footer( $footer ) {

  $new_footer = str_replace( '.</span>', __(' and <a href="https://github.com/Ajujuba">Ana Julia via file</a>.</span>', 'wpplugin' ), $footer);
  return $new_footer;

}
add_filter( 'admin_footer_text', 'wpplugin_custom_admin_footer', 10, 1 );

?>
