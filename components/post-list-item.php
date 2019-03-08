<li id="post-<?php the_ID() ?>" <?php post_class() ?>>
  <a href="<?php the_permalink() ?>">
    <figure>
      <span class="thumbnail">
        <?php the_post_thumbnail( 'medium' ); ?>
      </span>
      <figcaption>
        <span class="post-title"><?php the_title() ?></span>
      </figcaption>
    </figure>
  </a>
</li>
