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

    <?php
      global $post;
      $home = false;

      if($post->ID == 34 || $post->ID == 13  || $post->ID == 150) {
        $home = true;
      }
      else {
        if(has_post_thumbnail( $post->ID )) {
          $header_image = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail');
        }
        $header_title = get_field('header_title') ? get_field('header_title', false, false) : '';
        $header_text = get_field('header_text') ? get_field('header_text', false, false) : '';
        if(get_field('add_header_button')) {
          $header_btn_text = get_field('header_button_text') ? get_field('header_button_text') : 'Read more';
          $header_btn_link = get_field('header_button_link') ? get_field('header_button_link') : '#';
        }
      }
    ?>

    <!-- HEADER -->
    <header class="header" <?php echo !$home ? 'style="background-image: linear-gradient(rgba(0,0,0,.75), rgba(0,0,0,.75)), url('.$header_image[0].');"' : '' ; ?>>
      <nav class="navigation">
        <div class="container">
          <a href="/" class="header__logo">
            <img src="<?php echo get_theme_file_uri('/assets/images/logo/logo_light.png'); ?>" alt="PlantB logo" class="logo">
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
      
      <?php if (!$home) : ?>

        <?php
          // not frontpage: using the header shortcode for static header
          $sc_attrs = 'title="' . $header_title . '" ';
          $sc_attrs .= 'text="' . $header_text . '" ';
          $sc_attrs .= 'add_btn="' . get_field('add_header_button') . '" ';
          $sc_attrs .= 'btn_text="' . $header_btn_text . '" ';
          $sc_attrs .= 'btn_link="' . $header_btn_link . '" ';

          echo do_shortcode('[header_shortcode ' . $sc_attrs . ']');
        ?>

      <?php else : ?>
        <?php // frontpage: using the header with slider ?>
        <div class="glide__slider glide__slider--fixed">
          <div data-glide-el="track" class="glide__track">
            <div class="glide__slides">
      
              <div class="glide__slider__slide" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>');">
                <div class="glide__slider__overlay">
                  <div class="hero-text">
                    <h1>Changing the world with revolutionary plant-based foods</h1>
                    <p>One country at a time</p>
                    <a class="btn btn__full anchor-scroll" href="#section__plans">Button full</a>
                    <a class="btn btn__ghost" href="#">Button ghost</a>
                  </div>
                </div>
              </div>

              <div class="glide__slider__slide" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/demo/test-2.jpg'); ?>');">
                <div class="glide__slider__overlay">
                  <div class="hero-text">
                    <h1>Changing the world with revolutionary plant-based foods</h1>
                    <p>One country at a time</p>
                    <a class="btn btn__full anchor-scroll" href="#section__plans">Button full</a>
                  </div>
                </div>
              </div>
              
              <div class="glide__slider__slide" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/demo/test-3.jpg'); ?>');">
                <div class="glide__slider__overlay">
                  <div class="hero-text">
                    <h1>Changing the world with revolutionary plant-based foods</h1>
                    <p>One country at a time</p>
                    <a class="btn btn__full anchor-scroll" href="#section__plans">Button full</a>
                  </div>
                </div>
              </div>

            </div>
            <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>

      <?php endif; ?>
    </header>