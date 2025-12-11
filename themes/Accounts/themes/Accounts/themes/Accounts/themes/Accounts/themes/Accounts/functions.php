<?php

function my_styles() {
        // MAIN STYLES
    wp_enqueue_style(
        'theme-main-style',
        get_template_directory_uri() . '/style.css'
    );

        // HEADER STYLES
    wp_enqueue_style(
        'theme-header-style',
        get_template_directory_uri() . '/assets/css/header.css'
    );

        // FOOTER STYLES
    wp_enqueue_style(
        'theme-footer-style',
        get_template_directory_uri() . '/assets/css/footer.css'
    );

        // TOP-PAGE STYLES
    wp_enqueue_style(
        'theme-top-page-style',
        get_template_directory_uri() . '/assets/css/top-page.css'
    );
}
add_action('wp_enqueue_scripts', 'my_styles');
