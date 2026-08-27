<?php
/**
 * Configurações gerais do tema
 */

// 1. Suporte a recursos do tema
function enderecovirtual_colina_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
}
add_action( 'after_setup_theme', 'enderecovirtual_colina_setup' );

// 2. Styles e scripts
function enderecovirtual_colina_scripts() {
    wp_enqueue_style( 
        'enderecovirtual-colina-tailwind', 
        get_template_directory_uri() . '/assets/css/tailwind.css', 
        array(), 
        '1.0.0' 
    );
}
add_action( 'wp_enqueue_scripts', 'enderecovirtual_colina_scripts' );