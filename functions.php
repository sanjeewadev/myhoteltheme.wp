<?php
// Load CSS and JS files
function mytheme_load_css() {
    wp_enqueue_style(
        'my-css', 
        get_template_directory_uri() . '/style.css'
    );
}

add_action('wp_enqueue_scripts', 'mytheme_load_css');

function mytheme_load_js() {
    wp_enqueue_script(
        'my-js', 
        get_template_directory_uri() . '/main.js', 
        array(), 
        false, 
        true
    );
}

add_action('wp_enqueue_scripts', 'mytheme_load_js');

// Register Navigation Menu
function mytheme_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'text_domain' ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );

// Register a Custom Post Type for Suites
function mytheme_register_suites() {
    $args = array(
        'labels' => array(
            'name'          => 'Suites',           // The main name in the menu
            'singular_name' => 'Suite',            // The name for a single item
            'add_new_item'  => 'Add New Suite',    // The button text
            'edit_item'     => 'Edit Suite',       // Text when editing
        ),
        'public'      => true,       // Can people see this on the website? Yes.
        'has_archive' => true,       // Do we want a page that lists ALL suites? Yes.
        'menu_icon'   => 'dashicons-building', // The little icon in the sidebar
        'supports'    => array( 'title', 'editor', 'thumbnail' ), // What features do we need?
    );
    
    register_post_type( 'suite', $args ); // The actual command to create it
    add_theme_support( 'post-thumbnails' );
}

// Hook into WordPress initialization
add_action( 'init', 'mytheme_register_suites' );

// Register a "Room Type" Taxonomy for Suites
function mytheme_register_room_types() {
    $args = array(
        'labels' => array(
            'name' => 'Room Types',         // The menu name
            'singular_name' => 'Room Type', // Single name
        ),
        'public' => true,
        'hierarchical' => true, // TRUE = Like Categories (checkboxes). FALSE = Like Tags (typing).
        'show_admin_column' => true, // Show this column in the "All Suites" list
    );

    // The Command: Create "room_type", attach it to "suite", use $args
    register_taxonomy( 'room_type', array( 'suite' ), $args );
}

add_action( 'init', 'mytheme_register_room_types' );

// //////////////// SPA ///////////////////////

// Register a Custom Post Type for spa services
function mytheme_register_spa_services() {
    $args = array(
        'labels' => array(
            'name'          => 'Spa Services',           // The main name in the menu
            'singular_name' => 'Spa Service',            // The name for a single item
            'add_new_item'  => 'Add New Spa Services',    // The button text
            'edit_item'     => 'Edit Spa Services',       // Text when editing
        ),
        'public'      => true,       // Can people see this on the website? Yes.
        'has_archive' => true,       // Do we want a page that lists ALL suites? Yes.
        'menu_icon'   => 'dashicons-heart', // The little icon in the sidebar
        'supports'    => array( 'title', 'editor', 'thumbnail' ), // What features do we need?
    );
    
    register_post_type( 'spa_services', $args ); // The actual command to create it
    add_theme_support( 'post-thumbnails' );
}

// Hook into WordPress initialization
add_action( 'init', 'mytheme_register_spa_services' );

// Register a "Room Type" Taxonomy for Suites
function mytheme_register_spa_services_types() {
    $args = array(
        'labels' => array(
            'name' => 'Spa Services Types',         // The menu name
            'singular_name' => 'Spa Service Type', // Single name
        ),
        'public' => true,
        'hierarchical' => true, // TRUE = Like Categories (checkboxes). FALSE = Like Tags (typing).
        'show_admin_column' => true, // Show this column in the "All Suites" list
    );

    // The Command: Create "room_type", attach it to "suite", use $args
    register_taxonomy( 'spa_services_types', array( 'spa_services' ), $args );
}

add_action( 'init', 'mytheme_register_spa_services_types' );


// Register the Global Options Page
function mytheme_register_options_page() {
    
    // Check if ACF is active so the site doesn't break if plugin is disabled
    if ( function_exists('acf_add_options_page') ) {
        
        acf_add_options_page(array(
            'page_title'    => 'Theme General Settings', // Title on the page
            'menu_title'    => 'Theme Settings',         // Title in the sidebar
            'menu_slug'     => 'theme-general-settings', // URL slug
            'capability'    => 'edit_posts',
            'redirect'      => false,                    // Do not redirect to sub-page
            'icon_url'      => 'dashicons-admin-generic', // The "Gear" icon
            'position'      => 2                         // Show it near Dashboard
        ));
        
    }
}
add_action('acf/init', 'mytheme_register_options_page');