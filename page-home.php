<?php

$dir = get_template_directory_uri();

add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_script( 'index', get_template_directory_uri() . '/dist/app/page-home.js', null, null, true );
});

get_header();

?>

<section class="eye-catch" id="eyecatch">
  <?php echo get_the_post_thumbnail() ?>
</section>



<section class="category category--welcome">
  <h2 class="category__title"
      style="background-image: url(<?php echo $dir . '/assets/img/menu-icon--welcome-color.svg' ?>)"
  >新歓情報</h2>
<?php

$posts = get_posts( array(
  'posts_per_page' => 3,
  'orderby' => 'date',
  'order' => 'DESC',
  'category_name' => 'welcome19',
) );

if( $posts ): ?>
  <ul class="post-list category__post-list">
<?php
  foreach ( $posts as $post ):
    setup_postdata( $post );
    include( 'components/post-list-item.php' );
  endforeach;
?>
  </ul>
<?php else: ?>
  <p class="category__no-content">コンテンツは順次公開中！</p>
<?php endif; ?>
</section>


<section class="category category--about">
  <h2 class="category__title"
      style="background-image: url(<?php echo $dir . '/assets/img/menu-icon--about-color.svg' ?>)"
  >人形劇団NEUについて</h2>

<?php

$posts = get_posts( array(
  'posts_per_page' => 3,
  'orderby' => 'date',
  'order' => 'DESC',
  'category_name' => 'about',
) );

if( $posts ): ?>
  <ul class="post-list category__post-list">
<?php
  foreach ( $posts as $post ):
    setup_postdata( $post );
    include( 'components/post-list-item.php' );
  endforeach;
?>
  </ul>
<?php else: ?>
  <p class="category__no-content">コンテンツは順次公開中！</p>
<?php endif; ?>
</section>


<section class="category category--culture">
  <h2 class="category__title"
      style="background-image: url(<?php echo $dir . '/assets/img/menu-icon--culture-color.svg' ?>)"
  >もっと知りたい！人形劇の文化</h2>
<?php

$posts = get_posts( array(
  'posts_per_page' => 3,
  'orderby' => 'date',
  'order' => 'DESC',
  'category_name' => 'culture',
) );

if( $posts ): ?>
  <ul class="post-list category__post-list">
<?php
  foreach ( $posts as $post ):
    setup_postdata( $post );
    include( 'components/post-list-item.php' );
  endforeach;
?>
  </ul>
<?php else: ?>
  <p class="category__no-content">コンテンツは順次公開中！</p>
<?php endif; ?>
</section>




<?php
get_footer();

?>
