<?php
/*
Plugin Name: 6.07 - File Paths
Plugin URI: https://github.com/Ajujuba/wp-themes-plugin-dev
Description: Demo plugin for learning about file paths in plugins.
Version: 1.0.0
Author: Ana alves
Author URI: https://github.com/Ajujuba
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wpplugin_file_path
Domain Path:  /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

function wpplugin_settings_page_markup_file_path()
{
  // Double check user capabilities
  if ( !current_user_can('manage_options') ) {
      return;
  }
  ?>
  <div class="wrap">
    <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>

    <?php
      $wpplugin_plugin_basename = plugin_basename( __FILE__ );
      $wpplugin_plugin_dir_path = plugin_dir_path( __FILE__ );
      $wpplugin_plugins_url_default = plugins_url();
      $wpplugin_plugins_url = plugins_url( 'includes', __FILE__ );
      $wpplugin_plugin_dir_url = plugin_dir_url( __FILE__ );
    ?>

    <ul>
      <li>plugin_basename( __FILE__ ) - <?php echo $wpplugin_plugin_basename; ?></li>
      <li>plugin_dir_path( __FILE__ ) - <?php echo $wpplugin_plugin_dir_path; ?></li>
      <li>plugins_url() - <?php echo $wpplugin_plugins_url_default; ?></li>
      <li>plugins_url( 'includes', __FILE__ ) - <?php echo $wpplugin_plugins_url; ?></li>
      <li>plugin_dir_url( __FILE__ ) - <?php echo $wpplugin_plugin_dir_url; ?></li>
      <li>included file test - <?php include( plugin_dir_path( __FILE__ ) . 'includes/include-test.php'); ?></li>
    </ul>

  </div>
  <?php
}

function wpplugin_settings_pages_file_path()
{
  add_menu_page(
    __( 'File Paths', 'wpplugin_file_path' ),
    __( 'File Paths - Plugin 6.7', 'wpplugin_file_path' ),
    'manage_options',
    'wpplugin_file_path',
    'wpplugin_settings_page_markup_file_path',
    'dashicons-wordpress-alt',
    100
  );

}
add_action( 'admin_menu', 'wpplugin_settings_pages_file_path' );


?>