<?php 

function load_styles_and_scripts() {
    wp_enqueue_style('main', get_template_directory_uri() . '/dist/css/main.min.css');
    wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.min.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');