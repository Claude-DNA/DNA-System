<?php
/**
 * Claude DNA Theme Functions
 */

// Enqueue styles and scripts
function claudedna_enqueue_styles() {
    wp_enqueue_style( 'claudedna-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'claudedna_enqueue_styles' );

// Enqueue scripts
function my_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('main-js', get_template_directory_uri() . '/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'my_scripts');

// Theme support
function claudedna_setup() {
    // Add title tag support
    add_theme_support( 'title-tag' );
    
    // Add post thumbnails support
    add_theme_support( 'post-thumbnails' );
    
    // Add HTML5 support
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
}
add_action( 'after_setup_theme', 'claudedna_setup' );
?>
