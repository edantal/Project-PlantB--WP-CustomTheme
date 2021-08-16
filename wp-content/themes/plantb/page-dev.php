<?php
/**
 * Template Name: DEV
 */
?>

<?php get_header(); ?>

  <?php // if(have_posts()) : while(have_posts()) : the_post(); ?> 
    <?php // the_content(); ?>
  <?php // endwhile; endif; ?>

  <!-- HEADER -->
  <!-- <header class="header" style="background-image: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url(<?php // echo get_theme_file_uri('/assets/images/demo/test-1.jpg') ?>);"> -->
  <!-- <header class="header">
    <nav class="navigation">
      <div class="row">
        <a href="/" class="header__logo">
          <img src="<?php //echo get_theme_file_uri('/assets/images/logo/logo_light.png'); ?>" alt="PlantB logo" class="logo">
        </a>
        <div class="main-nav-toggle">
          <?php
            // wp_nav_menu(array(
            //   'theme_location' => 'mainMenu_loc',
            //   'menu_class'     => 'main-nav',
            // ));
          ?>
          <ul class="main-nav">
            <li><a href="">Homepage</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Classes</a></li>
            <li><a href="">Contact us</a></li>
          </ul>
        </div>
        <a class="mobile-nav active">
          <span></span>
          <span></span>
          <span></span>
        </a>
      </div>
    </nav>
    <div class="hero-text">
      <h1>Changing the world with revolutionary plant-based foods</h1>
      <p>One country at a time</p>
      <a class="btn btn__full anchor-scroll" href="#section__plans">Button full</a>
      <a class="btn btn__ghost" href="#">Button ghost</a>
    </div>


    <div class="glide__slider glide__slider--fixed">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
  
          <div class="glide__slider__slide" style="background-image: url('<?php //echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>');">
            <div class="glide__slider__overlay">
              <div class="hero-text">
                <h1>Changing the world with revolutionary plant-based foods</h1>
                <p>One country at a time</p>
                <a class="btn btn__full anchor-scroll" href="#section__plans">Button full</a>
                <a class="btn btn__ghost" href="#">Button ghost</a>
              </div>
            </div>
          </div>

          <div class="glide__slider__slide" style="background-image: url('<?php //echo get_theme_file_uri('/assets/images/demo/test-2.jpg'); ?>');">
            <div class="glide__slider__overlay">
              <div class="hero-text">
                <h1>Changing the world with revolutionary plant-based foods</h1>
                <p>One country at a time</p>
                <a class="btn btn__full anchor-scroll" href="#section__plans">Button full</a>
              </div>
            </div>
          </div>
          
          <div class="glide__slider__slide" style="background-image: url('<?php //echo get_theme_file_uri('/assets/images/demo/test-3.jpg'); ?>');">
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

  </header> -->

  <!-- <div class="sec">
    <div class="container grid grid--2-cols">
      <div class="div"></div>
      <div class="div"></div>
      <div class="div"></div>
      <div class="div"></div>
    </div>
  </div>

  <div class="sec">
    <div class="container grid grid--3-cols">
      <div class="div"></div>
      <div class="div"></div>
      <div class="div"></div>
    </div>
  </div>

  <div class="sec">
    <div class="container grid grid--4-cols">
      <div class="div"></div>
      <div class="div"></div>
      <div class="div"></div>
      <div class="div"></div>
    </div>
  </div> -->

  <!-- SECTION: TAGLINE -->
  <section class="section section__tagline background--black">
    <div class="container">
      <h2 class="section__header">Access Israel through its leading go-to-market partner for premium <span class="section__header--green">plant-based</span> brands</h2>
      <p class="long-copy">
        Enjoy a turn-key capability to widen your reach and sales in strategic Israeli markets.
      </p>
    </div>
  </section>

  <!-- SECTION: PARTNERS -->
  <section class="section section__partners">
    <div class="container">
      <h2 class="section__header">Our partners</h2>
    </div>
    <div class="container grid grid--4-cols">
      <div class="feature">
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/beyond-meat.png'); ?>" alt="">
      </div>
      <div class="feature">
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/just.png'); ?>" alt="">
      </div>
      <div class="feature">
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/felsineo-veg.png'); ?>" alt="">
      </div>
      <div class="feature">
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/mrs-goldfarb.png'); ?>" alt="">
      </div>
    </div>
  </section>

  <!-- SECTION: FEATURES -->
  <section class="section section__features background--offwhite">
    <div class="container grid grid--3-cols">
      <div class="feature">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36;" xml:space="preserve"><g><path d="M32.05,8.58l-3-4c-0.14-0.19-0.46-0.19-0.6,0l-3,4c-0.08,0.11-0.1,0.27-0.04,0.39c0.06,0.13,0.19,0.21,0.33,0.21h1.63v4.63   c0,0.21,0.17,0.38,0.38,0.38h2c0.21,0,0.38-0.17,0.38-0.38V9.18h1.63c0.14,0,0.27-0.08,0.33-0.21C32.15,8.85,32.13,8.69,32.05,8.58   z"></path><path d="M22.63,7.19c0-0.21-0.17-0.38-0.38-0.38h-12c-0.21,0-0.38,0.17-0.38,0.38v11.26h12.75V7.19z M17.88,10.28l-1.36-1.36   c-0.15-0.15-0.38-0.15-0.53,0l-1.36,1.36V7.56h3.25V10.28z"></path><path d="M28.25,18.81h-5.63h-5.98v12.75h11.6c0.21,0,0.38-0.17,0.38-0.38v-12C28.63,18.98,28.46,18.81,28.25,18.81z M23.88,22.28   l-1.36-1.36c-0.15-0.15-0.38-0.15-0.53,0l-1.36,1.36v-2.72h1.63h1.63V22.28z"></path><path d="M4.25,18.81c-0.21,0-0.37,0.17-0.37,0.38v12c0,0.21,0.17,0.38,0.37,0.38h11.6V18.81H9.88H4.25z M11.88,19.56v2.72   l-1.36-1.36c-0.15-0.15-0.38-0.15-0.53,0l-1.36,1.36v-2.72h1.63H11.88z"></path></g></svg>
        <h3>Export Management</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, molestiae exercitationem ipsum consequatur totam vitae deleniti, nulla ratione magni, beatae suscipit ut ab voluptas necessitatibus?
        </p>
      </div>
      <div class="feature">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><path d="M11.1,46.8c-3.2-0.3-6.3-0.6-9.7-0.8c2-16.4,9.6-29.1,23.7-37.5c14.6-8.7,29.8-9,45.4-2.4c-1.4,3-2.8,5.9-4.1,8.8  C40.2,3,12.8,22,11.1,46.8z M88.3,43.4c1.7,11.3-0.6,21.6-7.6,30.5c-6.9,8.9-16.1,13.8-27.4,15c0.3,3.2,0.5,6.3,0.8,9.4  c23.6-0.8,48.9-24.5,43.7-56.7C94.7,42.3,91.6,42.8,88.3,43.4z M11,53.6c-3,0.3-6.1,0.5-9.3,0.8c0.7,19.8,18,42.1,44,44.2  c0.3-3.2,0.6-6.3,0.8-9.4C26.2,85.8,14.4,74,11,53.6z M80.8,26.4c2.4,3.1,4.3,6.6,5.8,10.4c3-1.1,6-2.2,9.1-3.3  c-3.6-9.6-9.5-17.2-17.8-23.2c-1.9,2.6-3.7,5.2-5.6,7.9C75.5,20.6,78.4,23.3,80.8,26.4z M52.8,81.4h-5.6c-1.1,0-2.1-0.9-2.1-2.1  v-4.7c-3.3-0.6-6.3-1.9-9-3.7l-3.3,3.3c-0.8,0.8-2.1,0.8-2.9,0l-4-4c-0.8-0.8-0.8-2.1,0-2.9l3.3-3.3c-1.8-2.7-3.1-5.7-3.7-9h-4.7  c-1.1,0-2.1-0.9-2.1-2.1v-5.6c0-1.1,0.9-2.1,2.1-2.1h4.7c0.6-3.3,1.9-6.3,3.7-9L26,33.1c-0.8-0.8-0.8-2.1,0-2.9l4-4  c0.8-0.8,2.1-0.8,2.9,0l3.3,3.3c2.7-1.8,5.7-3.1,9-3.7v-4.7c0-1.1,0.9-2.1,2.1-2.1h5.6c1.1,0,2.1,0.9,2.1,2.1v4.7  c3.3,0.6,6.3,1.9,9,3.7l3.3-3.3c0.8-0.8,2.1-0.8,2.9,0l4,4c0.8,0.8,0.8,2.1,0,2.9l-3.3,3.3c1.8,2.7,3.1,5.7,3.7,9h4.7  c1.1,0,2.1,0.9,2.1,2.1V53c0,1.1-0.9,2.1-2.1,2.1h-4.7c-0.6,3.3-1.9,6.3-3.7,9l3.3,3.3c0.8,0.8,0.8,2.1,0,2.9l-4,4  c-0.8,0.8-2.1,0.8-2.9,0l-3.3-3.3c-2.7,1.8-5.7,3.1-9,3.7v4.7C54.8,80.4,53.9,81.4,52.8,81.4z M65.2,58.7h-4.6  c-0.9,3.1-2.3,5.6-3.7,7.5C60.4,64.7,63.4,62,65.2,58.7z M66.7,45.3h-5.2c0.3,1.5,0.4,3.2,0.4,4.9s-0.1,3.4-0.4,4.9h5.2  c0.5-1.6,0.7-3.2,0.7-4.9C67.4,48.5,67.1,46.9,66.7,45.3z M56.9,34.3c1.4,2,2.8,4.5,3.7,7.5h4.6C63.4,38.5,60.4,35.8,56.9,34.3z   M51.7,41.8h5.2c-1.4-3.8-3.5-6.5-5.2-8.2V41.8z M51.7,55.2h6.1c0.3-1.5,0.5-3.2,0.5-4.9c0-1.8-0.2-3.4-0.5-4.9h-6.1V55.2z   M34.8,41.8h4.6c0.9-3.1,2.3-5.6,3.7-7.5C39.6,35.8,36.6,38.5,34.8,41.8z M33.3,55.2h5.2c-0.3-1.5-0.4-3.2-0.4-4.9s0.1-3.4,0.4-4.9  h-5.2c-0.5,1.6-0.7,3.2-0.7,4.9C32.6,51.9,32.9,53.6,33.3,55.2z M43.1,66.2c-1.4-2-2.8-4.5-3.7-7.5h-4.6  C36.6,62,39.6,64.7,43.1,66.2z M48.3,58.7h-5.2c1.4,3.8,3.5,6.5,5.2,8.2V58.7z M48.3,45.3h-6.1c-0.3,1.5-0.5,3.2-0.5,4.9  c0,1.8,0.2,3.4,0.5,4.9h6.1V45.3z M48.3,33.6c-1.7,1.7-3.8,4.4-5.2,8.2h5.2V33.6z M56.9,58.7h-5.2v8.2  C53.4,65.2,55.6,62.5,56.9,58.7z"></path></svg>
        <h3>International Brand Management</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, molestiae exercitationem ipsum consequatur totam vitae deleniti, nulla ratione magni, beatae suscipit ut ab voluptas necessitatibus?
        </p>
      </div>
      <div class="feature">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve"><path d="M45.5,22.6v-9.2h-4.8c-0.5,0-0.8-0.6-0.5-1l9.2-11.2c0.3-0.4,0.9-0.4,1.2,0l9.2,11.2c0.3,0.4,0,1-0.5,1h-4.8v9.2  c-1.5-0.2-3-0.4-4.5-0.4C48.5,22.2,46.9,22.4,45.5,22.6z M30.3,16.5l-14.4-1.4c-0.5,0-0.9,0.4-0.8,0.8l1.4,14.4  c0.1,0.5,0.7,0.7,1,0.4l3.4-3.4l6.5,6.5c1.8-2.5,3.9-4.6,6.4-6.4l-6.5-6.5l3.4-3.4C31.1,17.2,30.8,16.6,30.3,16.5z M72.5,33.9  l6.5-6.5l3.4,3.4c0.4,0.4,1,0.1,1-0.4l1.4-14.4c0-0.5-0.4-0.9-0.8-0.8l-14.4,1.4c-0.5,0.1-0.7,0.7-0.4,1l3.4,3.4l-6.5,6.5  C68.6,29.2,70.8,31.4,72.5,33.9z M82.5,69.3l-3.4,3.4l-6.5-6.5c-1.8,2.5-3.9,4.6-6.4,6.4l6.5,6.5l-3.4,3.4c-0.4,0.4-0.1,1,0.4,1  l14.4,1.4c0.5,0,0.9-0.4,0.8-0.8l-1.4-14.4C83.4,69.2,82.8,68.9,82.5,69.3z M22.2,50c0-1.5,0.2-3,0.4-4.5h-9.2v-4.8  c0-0.5-0.6-0.8-1-0.5L1.2,49.4c-0.4,0.3-0.4,0.9,0,1.2l11.2,9.2c0.4,0.3,1,0,1-0.5v-4.8h9.2C22.4,53,22.2,51.5,22.2,50z M87.6,40.2  c-0.4-0.3-1,0-1,0.5v4.8h-9.2c0.2,1.5,0.4,3,0.4,4.5c0,1.5-0.2,3-0.4,4.5h9.2v4.8c0,0.5,0.6,0.8,1,0.5l11.2-9.2  c0.4-0.3,0.4-0.9,0-1.2L87.6,40.2z M27.5,66.1l-6.5,6.5l-3.4-3.4c-0.4-0.4-1-0.1-1,0.4l-1.4,14.4c0,0.5,0.4,0.9,0.8,0.8l14.4-1.4  c0.5-0.1,0.7-0.7,0.4-1l-3.4-3.4l6.5-6.5C31.4,70.8,29.2,68.6,27.5,66.1z M59.3,86.6h-4.8v-9.2c-1.5,0.2-3,0.4-4.5,0.4  c-1.5,0-3.1-0.2-4.5-0.4v9.2h-4.8c-0.5,0-0.8,0.6-0.5,1l9.2,11.2c0.3,0.4,0.9,0.4,1.2,0l9.2-11.2C60.1,87.2,59.8,86.6,59.3,86.6z   M71.1,50c0,11.7-9.5,21.1-21.1,21.1c-11.7,0-21.1-9.5-21.1-21.1S38.3,28.9,50,28.9C61.7,28.9,71.1,38.3,71.1,50z M36.2,42.4h4.2  c0.9-2.8,2.1-5,3.4-6.8C40.6,36.9,37.9,39.3,36.2,42.4z M39.6,54.5c-0.2-1.4-0.4-2.9-0.4-4.5c0-1.6,0.1-3.1,0.4-4.5h-4.7  c-0.4,1.4-0.6,2.9-0.6,4.5c0,1.6,0.2,3.1,0.6,4.5H39.6z M43.8,64.5c-1.3-1.8-2.5-4.1-3.4-6.8h-4.2C37.9,60.7,40.6,63.1,43.8,64.5z   M48.4,57.6h-4.7c1.2,3.4,3.2,5.9,4.7,7.4V57.6z M48.4,45.5h-5.6c-0.3,1.4-0.4,2.9-0.4,4.5c0,1.6,0.2,3.1,0.4,4.5h5.6V45.5z   M48.4,34.9c-1.5,1.5-3.5,4-4.7,7.5h4.7V34.9z M56.2,35.5c1.3,1.8,2.5,4.1,3.4,6.8h4.2C62.1,39.3,59.4,36.9,56.2,35.5z M51.6,42.4  h4.7c-1.2-3.4-3.2-5.9-4.7-7.4V42.4z M51.6,54.5h5.6c0.3-1.4,0.4-2.9,0.4-4.5c0-1.6-0.2-3.1-0.4-4.5h-5.6V54.5z M51.6,65.1  c1.5-1.5,3.5-4,4.7-7.5h-4.7V65.1z M63.8,57.6h-4.2c-0.9,2.8-2.1,5-3.4,6.8C59.4,63.1,62.1,60.7,63.8,57.6z M65.1,54.5  c0.4-1.4,0.6-2.9,0.6-4.5c0-1.6-0.2-3.1-0.6-4.5h-4.7c0.2,1.4,0.4,2.9,0.4,4.5c0,1.6-0.1,3.1-0.4,4.5H65.1z"></path></svg>
        <h3>International Expansion &amp; Market Penetration</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, molestiae exercitationem ipsum consequatur totam vitae deleniti, nulla ratione magni, beatae suscipit ut ab voluptas necessitatibus?
        </p>
      </div>
    </div>
  </section>

  <!-- SECTION: STEPS -->
  <section class="section section__steps">
    <div class="container">
      <h2 class="section__header">Why PlantB?</h2>
    </div>
    <div class="container grid grid--2-cols">
      <div class="steps">
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>" alt="">
      </div>
      <div class="steps">
        <div class="step">
          <h4>Speaking Hebrew is hard enough...</h4>
          <p>PlantB provides its brand partners with an end-to-end service, bridging the logistical and cultural gap international companies face when marketing their products in Israel.</p>
        </div>
        <div class="step">
          <h4>Regulatory</h4>
          <p>Together with our regulatory specialists we facilitate the registration process with the local authorities. We take care of the necessary approvals needed to import your product, including labeling and local Kosher compliance.</p>
        </div>
        <div class="step">
          <h4>Import &amp; Customs</h4>
          <p>Manage all freight forwarding, import and custom clearance.</p>
        </div>
        <div class="step">
          <h4>Local PB BI</h4>
          <p>Continuously identify targets and monitor sales growth, reach and penetration of the mainstream Israeli consumer base.</p>
        </div>
        <div class="step">
          <h4>Sales Reporting</h4>
          <p>Provide our brand partners with sales and marketing reporting and analysis.</p>
        </div>
        <div class="step">
          <h4>Localized Marketing</h4>
          <p>Plan and manage localized marketing campaigns, including PR, SM, POS activities, demos and trade show representation while always ensuring brand values are communicated locally.</p>
        </div>
        <div class="step">
          <h4>Distribution</h4>
          <p>Together with our distribution partners we reach an average of 10,000 POS throughout Israel in both the retail and HORECA markets.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION: FLIPCARDS -->
  <section class="section section__flip">
    <div class="container">
      <h2 class="section__header">Why PlantB?</h2>
    </div>
    <div class="container container--small grid grid--4-cols">
      <div class="flipcard">

        <div class="flipcard__panel flipcard__panel--front">
          <img src="http://plantb.local/wp-content/uploads/2021/08/icon_e2e.svg">
          <h4>End to End Service</h4>
        </div>
        <div class="flipcard__panel flipcard__panel--back">
          <h5>End to End Service</h5>
          <p>PlantB provides its brand partners with an end-to-end service, bridging the logistical and cultural gap international companies face when marketing their products in Israel.</p>
        </div>
      </div>
      <div class="flipcard">
        <div class="flipcard__panel flipcard__panel--front">
          <img src="http://plantb.local/wp-content/uploads/2021/08/icon_regulator.svg">
          <h4>Regulatory</h4>
        </div>
        <div class="flipcard__panel flipcard__panel--back">
          <h5>Regulatory</h5>
          <p>Together with our regulatory specialists we facilitate the registration process with the local authorities. We take care of the necessary approvals needed to import your product, including labeling and local Kosher compliance.</p>
        </div>
      </div>
      <div class="flipcard">
        <div class="flipcard__panel flipcard__panel--front">
          <img src="http://plantb.local/wp-content/uploads/2021/08/icon_import.svg">
          <h4>Import &amp; Customs</h4>
        </div>
        <div class="flipcard__panel flipcard__panel--back">
          <h5>Import &amp; Customs</h5>
          <p>Manage all freight forwarding, import and custom clearance.</p>
        </div>
      </div>
      <div class="flipcard">
        <div class="flipcard__panel flipcard__panel--front">
          <img src="http://plantb.local/wp-content/uploads/2021/08/icon_grow.svg">
          <h4>Sales Growth</h4>
        </div>
        <div class="flipcard__panel flipcard__panel--back">
          <h5>Sales Growth</h5>
          <p>Continuously identify targets and monitor sales growth, reach and penetration of the mainstream Israeli consumer base.</p>
        </div>
      </div>
      <div class="flipcard">
        <div class="flipcard__panel flipcard__panel--front">
          <img src="http://plantb.local/wp-content/uploads/2021/08/icon_reporting.svg">
          <h4>Sales Reporting</h4>
        </div>
        <div class="flipcard__panel flipcard__panel--back">
          <h5>Sales Reporting</h5>
          <p>Provide our brand partners with sales and marketing reporting and analysis.</p>
        </div>
      </div>
      <div class="flipcard">
        <div class="flipcard__panel flipcard__panel--front">
          <img src="http://plantb.local/wp-content/uploads/2021/08/icon_location.svg">
          <h4>Localized Marketing</h4>
        </div>
        <div class="flipcard__panel flipcard__panel--back">
          <h5>Localized Marketing</h5>
          <p>Plan and manage localized marketing campaigns, including PR, SM, POS activities, demos and trade show representation while always ensuring brand values are communicated locally.</p>
        </div>
      </div>
      <div class="flipcard">
        <div class="flipcard__panel flipcard__panel--front">
          <img src="http://plantb.local/wp-content/uploads/2021/08/icon_dist.svg">
          <h4>Distribution</h4>
        </div>
        <div class="flipcard__panel flipcard__panel--back">
          <h5>Distribution</h5>
          <p>Together with our distribution partners we reach an average of 10,000 POS throughout Israel in both the retail and HORECA markets.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- SECTION: DISTRIBUTION PARTNERS -->
  <section class="section section__tagline background--black">
    <div class="container">
      <h2 class="section__header">Our distribution partners, only the best</h2>
      <p class="long-copy">
        The key to growing the plant-based food market is to deliver premium products to the mainstream consumer. To do this, we work with the major players in the Israeli food industry. We are partners with the largest distributors, food manufacturers and retail chains in Israel.
      </p>
    </div>
  </section>

  <!-- SECTION: CHARTS -->
  <section class="section section__charts background--green">
    <div class="container">
      <h2 class="section__header">The Israeli Plant-Based Market</h2>
    </div>
    <div class="container grid grid--3-cols">
      <div class="chart">
        <canvas id="chart-1"></canvas>
        <p>Israelis are vegan</p>
      </div>
      <div class="chart">
        <canvas id="chart-2"></canvas>
        <p>Israelis are vegetarian</p>
      </div>
      <div class="chart">
        <canvas id="chart-3"></canvas>
        <p>Israelis looking for plant-based alternatives</p>
      </div>
    </div>
    <div class="container">
      <div class="chart__text">
        <h3>= 4,950,000</h3>
        <p>In a country of only 9 mil., consumer trends penetrate the market powerfully and grow quickly.</p>
      </div>
    </div>
  </section>

  <!-- SECTION: SHOWCASE -->
  <section class="section section__showcase">
    <div class="showcase grid grid--no-gap grid--4-cols">
      <figure>
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>" alt="">
      </figure>
      <figure>
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/test-2.jpg'); ?>" alt="">
      </figure>
      <figure>
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/test-3.jpg'); ?>" alt="">
      </figure>
      <figure>
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>" alt="">
      </figure>
      <figure>
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/test-3.jpg'); ?>" alt="">
      </figure>
      <figure>
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/test-2.jpg'); ?>" alt="">
      </figure>
      <figure>
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>" alt="">
      </figure>
      <figure>
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/test-2.jpg'); ?>" alt="">
      </figure>
    </div>
  </section>

  <!-- SECTION: MOSAIC -->
  <section class="section section__mosaic">
    <div class="container mosaic">
      <div class="mosaic--medium" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>');"></div>
      <div class="mosaic--large" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/demo/test-2.jpg'); ?>');"></div>
      <div class="mosaic--medium" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/demo/test-3.jpg'); ?>');"></div>
      <div class="mosaic--small" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/demo/test-2.jpg'); ?>');"></div>
      <div class="mosaic--tall" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>');"></div>
      <div class="mosaic--wide" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/demo/test-3.jpg'); ?>');"></div>
    </div>
  </section>

  <section class="section section__cards">
    <div class="container">
      <h2 class="section__header">Our cards</h2>
    </div>
    <div class="container grid grid--4-cols">
      <div class="card">
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>" alt="">
        <h3>Card</h3>
        <div class="card__info">
          <i class="fas fa-user"></i> Lorem ipsum dolor sit
        </div>
        <div class="card__info">
          <i class="fas fa-star"></i> Lorem ipsum dolor sit
        </div>
        <div class="card__info">
          <i class="fab fa-twitter"></i> <a href="#">@twitter.user</a>
        </div>
      </div>
      <div class="card">
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>" alt="">
        <h3>Card</h3>
        <div class="card__info">
          <i class="fas fa-user"></i> Lorem ipsum dolor sit
        </div>
        <div class="card__info">
          <i class="fas fa-star"></i> Lorem ipsum dolor sit
        </div>
        <div class="card__info">
          <i class="fab fa-twitter"></i> <a href="#">@twitter.user</a>
        </div>
      </div>
      <div class="card">
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>" alt="">
        <h3>Card</h3>
        <div class="card__info">
          <i class="fas fa-user"></i> Lorem ipsum dolor sit
        </div>
        <div class="card__info">
          <i class="fas fa-star"></i> Lorem ipsum dolor sit
        </div>
        <div class="card__info">
          <i class="fab fa-twitter"></i> <a href="#">@twitter.user</a>
        </div>
      </div>
      <div class="card">
        <img src="<?php echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>" alt="">
        <h3>Card</h3>
        <div class="card__info">
          <i class="fas fa-user"></i> Lorem ipsum dolor sit
        </div>
        <div class="card__info">
          <i class="fas fa-star"></i> Lorem ipsum dolor sit
        </div>
        <div class="card__info">
          <i class="fab fa-twitter"></i> <a href="#">@twitter.user</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section section__testimonials" style="background-image: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url(<?php echo get_theme_file_uri('/assets/images/demo/test-1.jpg') ?>);">
    <div class="container">
      <h2 class="section__header">Testimonials</h2>
    </div>
    <div class="container grid grid--3-cols">
      <div class="testimonial">
        <blockquote>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae nemo quasi maxime ipsa, suscipit dicta laborum! Numquam repudiandae cumque vitae et voluptatum necessitatibus ea, quidem, placeat expedita, sapiente officia iure.
          <cite>
            <img src="<?php echo get_theme_file_uri('/assets/images/demo/test-2.jpg'); ?>" alt="">
            <p>John Petrucci</p>
          </cite>
        </blockquote>
      </div>
      <div class="testimonial">
        <blockquote>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae nemo quasi maxime ipsa, suscipit dicta laborum! Numquam repudiandae cumque vitae et voluptatum necessitatibus ea, quidem, placeat expedita, sapiente officia iure.
          <cite>
            <img src="<?php echo get_theme_file_uri('/assets/images/demo/test-2.jpg'); ?>" alt="">
            <p>Mike Portnoy</p>
          </cite>
        </blockquote>
      </div>
      <div class="testimonial">
        <blockquote>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae nemo quasi maxime ipsa, suscipit dicta laborum! Numquam repudiandae cumque vitae et voluptatum necessitatibus ea, quidem, placeat expedita, sapiente officia iure.
          <cite>
            <img src="<?php echo get_theme_file_uri('/assets/images/demo/test-2.jpg'); ?>" alt="">
            <p>John Myung</p>
          </cite>
        </blockquote>
      </div>
    </div>
  </section>

  <section class="section section__plans background--offwhite " id="section__plans">
    <div class="container">
      <h2 class="section__header">Subscription plans</h2>
    </div>
    <div class="container grid grid--3-cols">
      <div class="plan">
        <div class="plan__box">
          <div class="plan__box-head">
            <h3>Premium</h3>
            <p class="plan__price">$399 <span>/ month</span></p>
            <p class="plan__desc">Lorem ipsum dolor sit amet consectetur.</p>  
          </div>
          <div class="plan__box-body">
            <ul>
              <li><i class="fas fa-check"></i>Lorem ipsum dolor sit.</li>
              <li><i class="fas fa-check"></i>Lorem ipsum dolor sit.</li>
              <li><i class="fas fa-check"></i>Lorem ipsum dolor sit.</li>
              <li><i class="fas fa-check"></i>Lorem ipsum dolor sit.</li>
            </ul>
          </div>
          <div class="plan__box-footer">
            <a href="" class="btn btn__full">Sign up</a>
          </div>
        </div>
      </div>
      <div class="plan">
        <div class="plan__box">
          <div class="plan__box-head">
            <h3>Pro</h3>
            <p class="plan__price">$149 <span>/ month</span></p>
            <p class="plan__desc">Lorem ipsum dolor sit amet consectetur.</p>  
          </div>
          <div class="plan__box-body">
            <ul>
              <li><i class="fas fa-check"></i>Lorem ipsum dolor sit.</li>
              <li><i class="fas fa-check"></i>Lorem ipsum dolor sit.</li>
              <li><i class="fas fa-check"></i>Lorem ipsum dolor sit.</li>
              <li><i class="fas fa-times"></i>Lorem ipsum dolor sit.</li>
            </ul>
          </div>
          <div class="plan__box-footer">
            <a href="" class="btn btn__ghost">Sign up</a>
          </div>
        </div>
      </div>
      <div class="plan">
        <div class="plan__box">
          <div class="plan__box-head">
            <h3>Basic</h3>
            <p class="plan__price">$19 <span>/ month</span></p>
            <p class="plan__desc">Lorem ipsum dolor sit amet consectetur.</p>  
          </div>
          <div class="plan__box-body">
            <ul>
              <li><i class="fas fa-check"></i>Lorem ipsum dolor sit.</li>
              <li><i class="fas fa-check"></i>Lorem ipsum dolor sit.</li>
              <li><i class="fas fa-times"></i>Lorem ipsum dolor sit.</li>
              <li><i class="fas fa-times"></i>Lorem ipsum dolor sit.</li>
            </ul>
          </div>
          <div class="plan__box-footer">
            <a href="" class="btn btn__ghost">Sign up</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="section section__cta background--green">
      <div class="container grid grid--2-cols">
        <div class="cta__action">
          <h5>Let's Talk</h5>
          <h3>About your <span>next project</span></h3>
        </div>
        <div class="cta__button">
          <a class="btn btn__ghost--white" href="#">Get in touch</a>
        </div>
      </div>
    </section> -->

  <section class="section section__contact">
    <div class="container">
      <div class="cta background--green">

        <div class="cta__info">
          <h2>Let's get in touch</h2>

          <div class="cta__info-blocks">
            <div class="cta__info-block">
              <i class="fas fa-map-marker-alt"></i>
              <p>Stralauer Allee 4, 10245 Berlin, DE</p>
            </div>
            <div class="cta__info-block">
              <i class="fas fa-phone"></i>
              <p>+972-3-666-6666</p>
            </div>
            <div class="cta__info-block">
              <i class="fas fa-globe-africa"></i>
              <p>
                Israel office:<br>
                <a href="mailto:israel@plantimports.com">israel@plantimports.com</a>
              </p>
            </div>
            <div class="cta__info-block">
            <i class="fas fa-globe-americas"></i>
              <p>
                US/Miami office:<br>
                <a href="mailto:us@plantimports.com">us@plantimports.com</a>
              </p>
            </div>
          </div>
          
        </div>

        <div class="cta__form">
          <h2>Contact us</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit dolorem exercitationem placeat iure quos itaque ea dolorum expedita vitae nisi.</p>

          <form action="#" class="contact__form">
            <div class="contact__form-group">
              <label for="fullname">Full Name</label>
              <input type="text" name="fullname" id="fullname" placeholder="your name" required />
            </div>
            <div class="contact__form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="your email" required />
            </div>
            <div class="contact__form-group">
            <label for="options">Options</label>
              <select name="options" id="options">
                <option value="">Please select</option>
                <option value="1">Option 1</option>
                <option value="2" selected>Option 2</option>
                <option value="3">Option 3</option>
              </select>
            </div>
            <button class="btn btn__full btn--submit">Send</button>
          </form>

        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
