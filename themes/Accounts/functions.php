<?php

function my_styles() {
    wp_enqueue_style(
        'theme-main-style',
        get_template_directory_uri() . '/style.css'
    );
    wp_enqueue_style(
        'theme-header-style',
        get_template_directory_uri() . '/assets/css/header.css'
    );
    wp_enqueue_style(
        'theme-footer-style',
        get_template_directory_uri() . '/assets/css/footer.css'
    );
}
add_action('wp_enqueue_scripts', 'my_styles');
