<?php

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
// wp_enqueue_script( 'global', get_template_directory_uri() . '/dist/app/global.js', true);
add_action( 'wp_enqueue_scripts', function() {

  wp_enqueue_script( 'global',
  get_template_directory_uri().'/dist/app/global.js',
  null, null, true);

});

add_action( 'wp_enqueue_scripts', function() {

  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700' );

} );

?>
