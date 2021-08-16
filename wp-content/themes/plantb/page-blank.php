<?php
/**
 * Template Name: Blank Page (No Header, No Footer)
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link id="favicon" rel="shortcut icon" type="image/png" href="<?php echo get_theme_file_uri('/assets/images/favicons/favicon_dark.png'); ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
      <?php the_content(); ?>
    <?php endwhile; endif; ?>

    <?php wp_footer(); ?>
  </body>
</html>
