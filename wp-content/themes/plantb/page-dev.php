<?php
/**
 * Template Name: DEV
 */
?>

<?php get_header(); ?>

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

  <?php if (!$home) : ?>

    <!-- SECTION: HERO -->
    <section class="section section__hero hr" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/bg/hero-a.jpg') ?>);">
      <div class="container">
        <div class="hero-text">
          <h1>Changing the world with <span>revolutionary plant-based foods</span></h1>
          <p>One country at a time</p>
        </div>
      </div>
    </section>

  <?php else : ?>

    <!-- SECTION: SLIDER HERO -->
    <section class="section section__hero hr">
      <div class="glide__slider glide__slider--fixed">
        <div data-glide-el="track" class="glide__track">
          <div class="glide__slides">

            <div class="glide__slider__slide" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/bg/hero-a.jpg'); ?>');">
              <div class="glide__slider__overlay">
                <div class="container">
                  <div class="hero-text">
                    <h1>Changing the world with <span>revolutionary plant-based foods</span></h1>
                    <p>One country at a time</p>
                    <a class="btn btn__full anchor-scroll" href="#section__plans">Button full</a>
                    <a class="btn btn__ghost" href="#">Button ghost</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="glide__slider__slide" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/bg/hero-b.jpg'); ?>');">
              <div class="glide__slider__overlay">
                <div class="container">
                  <div class="hero-text">
                    <h1>Changing the world with <span>revolutionary plant-based foods</span></h1>
                    <p>One country at a time</p>
                    <a class="btn btn__full anchor-scroll" href="#section__plans">Button full</a>
                  </div>
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
    </section>

  <?php endif; ?>

  <!-- SECTION: TAGLINE -->
  <section class="section section__tagline background--white">
    <div class="container tagline">
      <div class="tagline__stamp">
        <img src="<?php echo get_theme_file_uri('/assets/images/icons/stamp.svg'); ?>" alt="Plant-based stamp">
      </div>
      <div class="tagline__text">
        <h2>Leading go-to-market partner for premium plant-based brands</h2>
        <hr class="hr--text">
        <p>Enjoy a turn-key capability to widen your reach and sales in strategic Israeli markets.</p>
      </div>
    </div>
  </section>

  <!-- SECTION: PARTNERS -->
  <section class="section section__partners background--light-green">
    <div class="container">
      <h2 class="section__header">Our partners</h2>
      <svg id="partners-filter">
        <defs>
          <filter id="yellow-filter">
            <feColorMatrix
              color-interpolation-filters="sRGB"
              type="matrix"
              values="1.00 0 0 0 0
                      0 0.81 0 0 0
                      0 0 0.30 0 0
                      0 0 0 1 0 "/>
          </filter>
          ...
        </defs>
      </svg>
    </div>
    <div class="container grid grid--5-cols">
      <div class="partner">
        <img src="<?php echo get_theme_file_uri('/assets/images/partners/beyond-meat.svg'); ?>" alt="Beyond Meat">
      </div>
      <div class="partner">
        <img src="<?php echo get_theme_file_uri('/assets/images/partners/just.svg'); ?>" alt="JUST">
      </div>
      <div class="partner">
        <img src="<?php echo get_theme_file_uri('/assets/images/partners/not-co.svg'); ?>" alt="Not co">
      </div>
      <div class="partner">
        <img src="<?php echo get_theme_file_uri('/assets/images/partners/felsineo-veg.svg'); ?>" alt="Felsino Veg">
      </div>
      <div class="partner">
        <img src="<?php echo get_theme_file_uri('/assets/images/partners/mrs-goldfarbs.svg'); ?>" alt="Mrs. Goldfarb's Unreal Deli">
      </div>
    </div>
  </section>

  <!-- SECTION: STEPS  --------------- deprecated ---------------  -->
  <!-- <section class="section section__steps">
    <div class="container">
      <h2 class="section__header">Why PlantB?</h2>
    </div>
    <div class="container grid grid--2-cols">
      <div class="steps">
        <img src="<?php // echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>" alt="">
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
  </section> -->

  <!-- SECTION: FLIPCARDS -->
  <section class="section section__flip" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/bg/world-map.png'); ?>');">
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

  <!-- SECTION: MOSAIC  --------------- experiment ---------------  -->
  <!-- <section class="section section__mosaic">
    <div class="container mosaic">
      <div class="mosaic--medium" style="background-image: url('<?php //echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>');"></div>
      <div class="mosaic--large" style="background-image: url('<?php //echo get_theme_file_uri('/assets/images/demo/test-2.jpg'); ?>');"></div>
      <div class="mosaic--medium" style="background-image: url('<?php //echo get_theme_file_uri('/assets/images/demo/test-3.jpg'); ?>');"></div>
      <div class="mosaic--small" style="background-image: url('<?php //echo get_theme_file_uri('/assets/images/demo/test-2.jpg'); ?>');"></div>
      <div class="mosaic--tall" style="background-image: url('<?php //echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>');"></div>
      <div class="mosaic--wide" style="background-image: url('<?php //echo get_theme_file_uri('/assets/images/demo/test-3.jpg'); ?>');"></div>
    </div>
  </section> -->
  
  <!-- SECTION: CARDS  --------------- experiment ---------------  -->
  <!-- <section class="section section__cards">
    <div class="container">
      <h2 class="section__header">Our cards</h2>
    </div>
    <div class="container grid grid--4-cols">
      <div class="card">
        <img src="<?php //echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>" alt="">
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
        <img src="<?php //echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>" alt="">
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
        <img src="<?php //echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>" alt="">
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
        <img src="<?php //echo get_theme_file_uri('/assets/images/demo/test-1.jpg'); ?>" alt="">
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
  </section> -->
  
  <!-- SECTION: TESTIMONIALS  --------------- experiment ---------------  -->
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
  
  <!-- SECTION: PLANS  --------------- experiment ---------------  -->
  <!-- <section class="section section__plans background--offwhite " id="section__plans">
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
  </section> -->

  <section class="section section__cta background--green">
    <div class="container">
      <div class="cta__action">
        <h5>Let's Talk About <span>Your Expansion into Israel</span></h5>
        <a class="btn btn__ghost--white" href="#">Get in touch</a>
      </div>
    </div>
  </section>

  <section class="section section__contact">
    <div class="container">
      <div class="cta background--grad-green">

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
