<?php

add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_script( 'index', get_template_directory_uri() . '/dist/app/index.js', null, null, true );
});

get_header();

?>

<ul class="post-list">
<?php
if( have_posts() ) {
  while( have_posts() ) {
    the_post();
    include( 'components/post-list-item.php' );
  }
}
?>
</ul>

<?php get_footer(); ?>
