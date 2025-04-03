<?php

// enqueue styles and scripts
function portfolio_enqueue_scripts() {
    // Enqueue styles
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

    // Enqueue scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_scripts');

// Register custom post type for portfolio
function portfolio_custom_post_type() {
    $labels = array(
        'name' => 'Portfolio',
        'singular_name' => 'Portfolio Item',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Portfolio Item',
        'edit_item' => 'Edit Portfolio Item',
        'new_item' => 'New Portfolio Item',
        'view_item' => 'View Portfolio Item',
        'search_items' => 'Search Portfolio Items',
        'not_found' =>  'No portfolio items found',
        'not_found_in_trash' => 'No portfolio items found in Trash', 
        'menu_icon' => 'dashicons-portfolio',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'portfolio_custom_post_type');


// function portfolio_theme_setup() {
//     add_theme_support('post-thumbnails');
//     add_theme_support('custom-logo');
//     add_theme_support('title-tag');
//     add_theme_support('menus');
// }
// add_action('after_setup_theme', 'portfolio_theme_setup');
// Register menus

// Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widget');

// Menus
register_nav_menus(array(
    'top-menu' => __('Top Menu Location', 'portfolio'),
    'footer-menu' => __('Footer Menu', 'portfolio'),
    'mobile' => __('Mobile Menu', 'portfolio'),
));

function portfolio_sidebars() {
    register_sidebar(array(
        'name' => __('Blog Sidebar', 'portfolio'),
        'id' => 'blog-sidebar',
        'description' => __('Main Sidebar', 'portfolio'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Page Sidebar', 'portfolio'),
        'id' => 'page-sidebar',
        'description' => __('Page Sidebar', 'portfolio'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'portfolio_sidebars');