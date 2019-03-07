<?php get_header() ?>

<ul>
<?php
if( have_posts() ) {
  while( have_posts() ) {
    the_post();
?>
<li id="post-<?php the_ID() ?>" <?php post_class() ?>>
  <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
  <?php the_post_thumbnail( 'medium' ); ?>
</li>
<?php
  }
}
?>
</ul>

<?php get_footer(); ?>
