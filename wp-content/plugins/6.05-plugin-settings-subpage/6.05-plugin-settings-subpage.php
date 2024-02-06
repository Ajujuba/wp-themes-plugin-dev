<?php
/*
Plugin Name: 6.05 - Settings Sub Pages on existing pages
Plugin URI: https://github.com/Ajujuba/wp-themes-plugin-dev
Description: Demo plugin for learning about plugin settings subpages on existing menu items.
Version: 1.0.0
Author: Ana Alves
Author URI: https://github.com/Ajujuba
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wpplugin_submenu
Domain Path:  /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

# Add custom subpage inside an existing menu item
function wpplugin_default_sub_pages() {

  # Can add page as a submenu using the following (shortcuts):
  // add_dashboard_page() - Add a custom page inside Dashboard menu item
  // add_posts_page() - Add a custom page inside Posts menu item
  // add_media_page() - Add a custom page inside Media menu item
  // add_pages_page() - Add a custom page inside Pages menu item
  // add_comments_page() - Add a custom page inside Comments menu item
  // add_theme_page() - Add a custom page inside Apperance menu item
  // add_plugins_page() - Add a custom page inside Plugins menu item
  // add_users_page() - Add a custom page inside Users menu item
  // add_management_page() - Add a custom page inside Tools menu item
  // add_options_page() - Add a custom page inside Settings menu item

  add_theme_page( //Open Apperance I can see this custom subpage
    __( 'Cool Default Sub Page in Apperance', 'wpplugin_submenu' ), //Page name
    __( 'Custom Sub Page', 'wpplugin_submenu' ), //Menu name
    'manage_options', //capability
    'wpplugin-subpage', //slug url
    'wpplugin_settings_page_markup_subpage_file' //callback function
  );

  add_pages_page( //Open Pages I can see this custom subpage
    __( 'Cool Default Sub Page in Pages', 'wpplugin_submenu' ), //Page name
    __( 'Custom Sub Page', 'wpplugin_submenu' ), //Menu name
    'manage_options', //capability
    'wpplugin-subpage', //slug url
    'wpplugin_settings_page_markup_subpage' //callback function
  );

}
add_action( 'admin_menu', 'wpplugin_default_sub_pages' );

function wpplugin_settings_page_markup_subpage_file()
{
  // Double check user capabilities
  if ( !current_user_can('manage_options') ) {
    return;
  }
  include( plugin_dir_path( __FILE__ ) . 'includes/content-custom-subpage.php');

}

function wpplugin_settings_page_markup_subpage()
{
  // Double check user capabilities
  if ( !current_user_can('manage_options') ) {
    return;
  }
  ?>
  <div class="wrap">
      <h1>
        <?php 
          esc_html_e( 
            get_admin_page_title() //This function will get the The title of the current admin page
          ); 
        ?>
      </h1>
      <p><?php esc_html_e( 'Some content in subpage inside an existing menu item.', 'wpplugin_submenu' ); ?></p>
  </div>
  <?php
}

?>