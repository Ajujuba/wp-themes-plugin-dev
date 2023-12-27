<?php

add_theme_support('title-tag');
add_theme_support('post-thubnails');
add_theme_support('html5');
add_theme_support('automatic-feed-links');
add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support('custom-logo');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('starter-content');

//Load css
function wphierarchy_enqueue_styles(){
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');
}
add_action('wp_enqueue_scripts', 'wphierarchy_enqueue_styles');

//Register menu locations
register_nav_menus([
    'main-menu-code' => esc_html__('Main menu', 'wphierarchy'),
    'footer-menu-code' => esc_html__('Footer Menu', 'wphierarchy')
]);

// Setup Widget Areas
function wphierarchy_widgets_init() {
    register_sidebar([
        'name'          => esc_html__( 'Main Sidebar', 'wphierarchy' ),
        'id'            => 'main-sidebar',
        'description'   => esc_html__( 'Add widgets for main sidebar here', 'wphierarchy' ),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);  
  }
  add_action( 'widgets_init', 'wphierarchy_widgets_init' );