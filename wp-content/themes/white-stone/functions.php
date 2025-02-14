<?php
function my_theme_enqueue_scripts() {
  // Enqueue the compiled Tailwind CSS
  wp_enqueue_style(
    'my-theme-styles',
    get_stylesheet_directory_uri() . '/dist/assets/css/style.css',
    array(),  // Dependencies
    '1.0.0'   // Version
  );
  
  
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );

