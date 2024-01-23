<?php

function register_styles() {
    wp_enqueue_style( 'styles', get_template_directory_uri() .'/style.css', array(), null );
}
add_action( 'wp_enqueue_scripts', 'register_styles' );

function register_scripts() {
    wp_enqueue_style( 'scripts', get_template_directory_uri() .'/scripts.js', array(), null );
}
add_action( 'wp_enqueue_scripts', 'register_scripts' );

function register_services_post_type() {
    register_post_type('services', array(
        'label' => 'Services',
        'public' => true,
        'menu_icon' => 'dashicons-admin-tools',
    ));
}
add_action('init', 'register_services_post_type');

function custom_excerpt_length($length) {
    return 20; // Adjust the number to your desired length
}
add_filter('excerpt_length', 'custom_excerpt_length');