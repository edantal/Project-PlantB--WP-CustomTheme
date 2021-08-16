<div class="<?php echo $col_class; ?> col-property">
  <div class="card <?php echo $card_class; ?>">
    <div class="card-img">
      <?php the_post_thumbnail('property-img'); ?>
    </div>
    <div class="card-body">
      <small class="card__top"><?php echo get_the_terms(get_the_ID(), 'property_type')[0]->name; ?></small>
      <h4 class="card__title"><?php the_title(); ?></h4>
      <ul class="card__details list-unstyled">
        <li class="card__details--location"><?php the_field('property_location'); ?></li>
        <li class="card__details--area"><?php the_field('property_area'); ?> מ״ר</li>
        <li class="card__details--rooms"><?php the_field('property_rooms'); ?></li>
        <li class="card__details--floor"><?php the_field('property_floor'); ?></li>
        <?php
          if(in_array('parking', get_field('property_features'))){
            echo '<li class="card__details--parking">חניה</li>';
          }
          if(in_array('elevator', get_field('property_features'))){
            echo '<li class="card__details--elevator">מעלית</li>';
          }
          if(in_array('storage', get_field('property_features'))){
            echo '<li class="card__details--storage">מחסן</li>';
          }
        ?>
      </ul>
      <?php if($card_content) : ?>
        <p class="card__content"><?php echo wp_trim_words(get_field('property_description'), 20); ?></p>
      <?php endif; ?>
      <div class="card__btn">
        <a href="<?php the_permalink(); ?>" class="btn btn--black">לפרטים נוספים</a>
      </div>
    </div>
  </div>
</div>