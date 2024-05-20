<?php 

function wpg_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap', [], null);
  wp_enqueue_style('wpg_main_styles', get_theme_file_uri('main.css'));
  wp_enqueue_style('wpg_styles', get_theme_file_uri('style.css'));
  wp_enqueue_script('wpg_script_js', get_stylesheet_directory_uri() . '/dist/script.js', NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'wpg_files');

function wpg_features() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-logo', array(
    'height'       =>  140,
    'width'        =>  60,
    'flex-height'  =>  true,
    'flex-width'   =>  true
  ));
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'wp-block-styles' );
  add_theme_support( 'responsive-embeds' );

    //Default WordPress
  the_post_thumbnail( 'thumbnail' );     // Thumbnail (150 x 150 hard cropped)
  the_post_thumbnail( 'medium' );        // Medium resolution (300 x 300 max height 300px)
  the_post_thumbnail( 'medium_large' );  // Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
  the_post_thumbnail( 'large' );         // Large resolution (1024 x 1024 max height 1024px)
  the_post_thumbnail( 'full' );          // Full resolution (original size uploaded)

  if ( ! isset( $content_width ) ) {
    $content_width = 600;
  }

  add_post_type_support( 'page', 'excerpt' );
}

add_action( 'after_setup_theme', 'wpg_features', 0 );

function wpg_theme_menus() {

  register_nav_menus(
    array(
      'header-menu'  =>  'Header Menu',
      'footer-menu'  =>  'Footer Menu',
    )
    );
}

add_action( 'init', 'wpg_theme_menus' );