<?php
define('EV_INC_DIR', get_template_directory() . '/inc');

// 1. Setup
require_once EV_INC_DIR . '/setup.php';

// 2. ACF
require_once EV_INC_DIR . '/acf/fields-home.php';

// 3. Scripts
function ev_enqueue_scripts()
{
    // AOS - estilos
    wp_enqueue_style(
        'aos-css',
        'https://unpkg.com/aos@2.3.4/dist/aos.css',
        array(),
        '2.3.4'
    );

    // AOS - script
    wp_enqueue_script(
        'aos-js',
        'https://unpkg.com/aos@2.3.4/dist/aos.js',
        array(),
        '2.3.4',
        true
    );

    // FAQ
    wp_enqueue_script(
        'faq-script',
        get_template_directory_uri() . '/assets/js/faq.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/faq.js'),
        true
    );

    // Menu mobile
    wp_enqueue_script(
        'menu-script',
        get_template_directory_uri() . '/assets/js/menu.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/menu.js'),
        true
    );

    // Animações
    wp_enqueue_script(
        'animations-script',
        get_template_directory_uri() . '/assets/js/animations.js',
        array('aos-js'),
        filemtime(get_template_directory() . '/assets/js/animations.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'ev_enqueue_scripts');
