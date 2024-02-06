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

#Create a new tab in admin_menu to add a custom page and subpages
function wpplugin_settings_page()
{
	#add page
    add_menu_page(
        'Plugin 6.2.2', //Page name
        'Options page - Plugin 6.2.2', //Menu name
        'manage_options', // user role / capability
        'wpplugin', //slug for url
        'wpplugin_settings_page_markup', // callback function
        'dashicons-wordpress-alt', //icon
        100 // priority/order to show 
    );

	#add subpage
	add_submenu_page(
		'wpplugin', // slug from main page
		__( 'Plugin Feature 1', 'wpplugin' ), // Subpage name
		__( 'Feature 1', 'wpplugin' ), //Submenu name
		'manage_options', // user role / capability
		'wpplugin-feature-1', //Slug of subpage
		'wpplugin_settings_subpage_markup' //Calback function
	);
	
	add_submenu_page(
		'wpplugin',
		__( 'Plugin Feature 2', 'wpplugin' ),
		__( 'Feature 2', 'wpplugin' ),
		'manage_options',
		'wpplugin-feature-2',
		'wpplugin_settings_subpage_markup'
	);

}
add_action( 'admin_menu', 'wpplugin_settings_page' );

#Create the content that show inside my page options
function wpplugin_settings_page_markup()
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
      	<p><?php esc_html_e( 'Some content main page options plugin.', 'wpplugin' ); ?></p>
    </div>
    <?php
}

#Create the content to show inside subpages options - Plugin 6.2.2
function wpplugin_settings_subpage_markup()
{
	// Double check user capabilities
	if ( !current_user_can('manage_options') ) {
		return;
	}
	?>
	<div class="wrap">
		<h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
		<p><?php esc_html_e( 'Some content from subcontent of ' . get_admin_page_title() . ' - plugin 6.2.2', 'wpplugin' ); ?></p>
	</div>
	<?php
}

// Add a link to your settings page in your plugin
function wpplugin_add_settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=wpplugin">' . __( 'Settings', 'wpplugin' ) . '</a>';
    array_push( $links, $settings_link );
  	return $links;
}
$filter_name = "plugin_action_links_" . plugin_basename( __FILE__ );
add_filter( $filter_name, 'wpplugin_add_settings_link' );

?>