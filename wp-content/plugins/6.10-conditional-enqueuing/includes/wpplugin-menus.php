<?php

function wpplugin_settings_page_markup_enqueue_conditional()
{
  // Double check user capabilities
  if ( !current_user_can('manage_options') ) {
      return;
  }
  ?>
  <div class="wrap">
    <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
    <p><?php esc_html_e( 'Some content.', 'wpplugin_enqueue_conditional' ); ?></p>
  </div>
  <?php
}

function wpplugin_settings_pages()
{
  add_menu_page(
    __( 'Plugin Name', 'wpplugin_enqueue_conditional' ),
    __( 'Enqueue Conditional - Plugin 6.10', 'wpplugin_enqueue_conditional' ),
    'manage_options',
    'wpplugin_enqueue_conditional',
    'wpplugin_settings_page_markup_enqueue_conditional',
    'dashicons-wordpress-alt',
    100
  );

}
add_action( 'admin_menu', 'wpplugin_settings_pages' );

// // Add a link to your settings page in your plugin
// function wpplugin_add_settings_link( $links ) {
//     $settings_link = '<a href="admin.php?page=wpplugin">' . __( 'Settings' ) . '</a>';
//     array_push( $links, $settings_link );
//   	return $links;
// }
// $filter_name = "plugin_action_links_" . plugin_basename( __FILE__ );
// add_filter( $filter_name, 'wpplugin_add_settings_link' );
