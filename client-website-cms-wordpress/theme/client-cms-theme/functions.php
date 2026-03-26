<?php
function client_theme_assets() {
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'client_theme_assets');
add_theme_support('post-thumbnails');
?>