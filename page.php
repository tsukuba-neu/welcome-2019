<?php

$dir = get_template_directory_uri();

add_action( 'wp_enqueue_scripts', function() {
  global $dir;
  wp_enqueue_script( 'page', $dir . '/dist/app/page.js', null, null, true );
});

get_header();

?>

<?php

if( have_posts() ) {
  while( have_posts() ) {
    the_post();
?>

<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
  <h1 class="page__title"><?php the_title() ?></h1>
  <figure class="page__thumbnail">
    <?php the_post_thumbnail(); ?>
  </figure>
  <div class="page__content">
    <?php the_content() ?>
  </div>
</article>

<?php

  }
}

?>

<?php get_footer(); ?>
