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


if( has_category() ) {
  $cats = get_the_category();
  $catkwds = array();
  foreach($cats as $cat) {
      $catkwds[] = $cat->term_id;
  }
}

$related_posts = get_posts( array(
  'post_type' => 'post',
  'posts_per_page' => '3',
  'post__not_in' => array( $post->ID ),
  'category__in' => $catkwds,
  'orderby' => 'rand'
) );

if( $related_posts ) {
?>

<section class="relateds">
  <h2 class="relateds__title">こんな記事もあります</h2>
  <ul class="post-list">
    <?php
    foreach($related_posts as $post):
      setup_postdata($post);
      include( 'components/post-list-item.php' );
    endforeach
    ?>
  </ul>
</section>

<?php

}

get_footer();

?>
