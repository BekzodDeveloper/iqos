<?php
add_action('wp_enqueue_scripts', 'iqos_scripts');

function iqos_scripts()
{
    wp_enqueue_style('iqos_style', get_stylesheet_uri());
    // wp_enqueue_style('main_style', get_template_directory_uri() . '/assets/styles/main.min.css');

    wp_enqueue_script('jquery', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
    wp_enqueue_script('iqos_scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(jquery), null, true);
};
