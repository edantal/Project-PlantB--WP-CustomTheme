<div class="<?php echo $col_class; ?> col-article">  
  <div class="card <?php echo $card_class; ?>">
    <div class="card-img">
      <?php the_post_thumbnail('full'); ?>
    </div>
    <div class="card-body">
      <small class="card__top"><?php echo get_the_category(get_the_ID())[0]->name; ?></small>
      <h4 class="card__title"><?php the_title(); ?></h4>
      <p class="card__content"><?php echo wp_trim_words(get_field('article_excerpt'), $max_words_excerpt); ?></p>
      <div class="card__btn">
        <a href="<?php the_permalink(); ?>" class="btn btn--article">למאמר המלא…</a>
      </div>
    </div>
  </div>
</div>