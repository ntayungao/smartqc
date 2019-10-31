<?php

add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');
function enqueue_theme_scripts()
{
    // Frick this dependency 
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');

    // Generic theme scripts 
    wp_enqueue_style('style_css', get_theme_file_uri('assets/css/style.css'));

    // Bootstrap and Co 
    wp_enqueue_style('smartqc_bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_script('smartqc_popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', [], false, true);
    wp_enqueue_script('smartqc_bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['smartqc_popper', 'jquery'], false, true);

}    