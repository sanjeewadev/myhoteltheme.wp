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