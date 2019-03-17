<?php

$dir = get_template_directory_uri();

add_action( 'wp_enqueue_scripts', function() {
  global $dir;
  wp_enqueue_script( 'single', $dir . '/dist/app/single.js', null, null, true );
});

get_header();

?>

<?php

if( have_posts() ) {
  while( have_posts() ) {
    the_post();
?>

<article id="post-<?php the_ID(); ?>" class="main-content" <?php post_class(); ?>>
  <h1 class="post__title"><?php the_title() ?></h1>
  <figure class="post__thumbnail">
    <?php the_post_thumbnail(); ?>
  </figure>
  <div class="post__content">
    <?php the_content() ?>
  </div>
</article>

<?php

  }
}

?>

<?php get_footer(); ?>
