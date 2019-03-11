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
    <header class="site-header flex">
      <h1 class="flex-fix">
        <a href="/">
          <img
            class="site-header__logo"
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/header-logo.svg"
            height="70"
            alt="筑波大学 人形劇団NEU"
          >
        </a>
      </h1>
      <nav class="site-header__menu flex-fix">
        <a href="/welcome"
           class="site-header__menu-item"
           style="background-image: url('<?php echo $dir . '/assets/img/menu-icon--welcome-color.svg' ?>')"
        >新歓情報</a>
        <a href="/about"
           class="site-header__menu-item"
           style="background-image: url('<?php echo $dir . '/assets/img/menu-icon--about-color.svg' ?>')"
        >劇団について</a>
        <a href="/culture"
           class="site-header__menu-item"
           style="background-image: url('<?php echo $dir . '/assets/img/menu-icon--culture-color.svg' ?>')"
        >人形劇の文化</a>
      </nav>
      <div class="spacer flex-stretcj"></div>
    </header>
