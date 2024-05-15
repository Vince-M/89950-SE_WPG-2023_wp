<?php 

function wpg_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap', [], null);
  wp_enqueue_style('wpg_main_styles', get_theme_file_uri('main.css'));
  wp_enqueue_style('wpg_styles', get_theme_file_uri('style.css'));
  wp_enqueue_script('wpg_script_js', get_stylesheet_directory_uri() . '/dist/script.js', NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'wpg_files');