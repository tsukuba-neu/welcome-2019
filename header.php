<?php
  $dir = get_template_directory_uri();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <link rel=”icon” href="<?php echo $dir . '/assets/icons/favicon.ico' ?>" />
    <link rel=”icon” type="image/png" sizes="16x16" href="<?php echo $dir . '/assets/icons/favicon-16x16.png' ?>" />
    <link rel=”icon” type="image/png" sizes="32x32" href="<?php echo $dir . '/assets/icons/favicon-32x32.png' ?>" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header">
      <h1>
        <a href="<?php esc_url( home_url( '/' ) ); ?>">
          <img
            class="site-header__logo"
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/header-logo.svg"
            height="70"
            alt="筑波大学 人形劇団NEU"
          >
        </a>
      </h1>
    </header>
