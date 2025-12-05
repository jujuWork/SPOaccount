<?php

function my_styles() {
    wp_enqueue_style(
        'registration',
        get_template_directory_uri() . '/css/registration.css'
    );
}
add_action('wp_enqueue_scripts', 'my_styles');
