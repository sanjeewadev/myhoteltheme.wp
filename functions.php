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