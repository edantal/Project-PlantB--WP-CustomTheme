<?php get_header(); ?>

  <section class="section section__hero hr" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/bg/hero-brands.jpg') ?>);">
  <?php // <section class="section section__hero hr" style="background-image: url(<?php echo wp_get_attachment_image_src(232, 'full')[0] );"> ?>
    <div class="container">
      <div class="hero-text">
        <h1>Our Brands</h1>
      </div>
    </div>
  </section>

  <section class="section section__cards">
    <div class="container grid grid--2-cols">

      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

      <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); ?>
      <?php endif; ?>
        
        <div class="card">
          <div class="card__img">
            <img src="<?php echo $image[0]; ?>" alt="">
          </div>
          <div class="card__body">
            <h3><?php the_title(); ?></h3>
            <a class="btn btn__ghost--yellow" href="<?php the_permalink(); ?>">More <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>

      <?php endwhile; endif; ?>

    </div>
  </section>

<?php get_footer(); ?>
