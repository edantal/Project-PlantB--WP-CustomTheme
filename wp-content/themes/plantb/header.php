<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link id="favicon" rel="shortcut icon" type="image/png" href="<?php echo get_theme_file_uri('/assets/images/favicons/favicon_dark.png'); ?>">
    <?php wp_head(); ?>
    <?php //get_gtm_head_snippet(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php //get_gtm_body_snippet(); ?>

    <div class="preloader">
      <div class="preloader__inner"></div>
    </div>

    <!-- HEADER -->
    <header class="header">
      <nav class="navigation">
        <div class="container">
          <a href="/" class="header__logo">
            <img src="<?php echo get_theme_file_uri('/assets/images/logo/plantb-logo-dark.png'); ?>" alt="PlantB logo" class="logo">
          </a>
          <div class="main-nav-toggle">
            <?php
              wp_nav_menu(array(
                'theme_location' => 'mainMenu_loc',
                'menu_class'     => 'main-nav',
              ));
            ?>
          </div>
          <a class="mobile-nav active">
            <span></span>
            <span></span>
            <span></span>
          </a>
        </div>
      </nav>
    </header>