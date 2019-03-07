<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
  </head>
  <body　<?php body_class(); ?>>
    <header>
      <h1>
        <a href="<?php esc_url( home_url( '/' ) ); ?>">
          <?php bloginfo( 'name' ) ?>
        </a>
      </h1>
    </header>
