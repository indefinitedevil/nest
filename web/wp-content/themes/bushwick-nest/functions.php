<?php

function nest_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'nest_enqueue_styles');

function nest_setup() {
    add_editor_style(array(
        'editor-style.css',
    ));
}

add_action('after_setup_theme', 'nest_setup', 20);