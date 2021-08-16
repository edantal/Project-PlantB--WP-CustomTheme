<?php
  $queryTotalSales = new WP_Query(array(
    'post_type'					=> array('property'),
    'tax_query'         => array(
      array (
        'taxonomy'    => 'property_type',
        'field'       => 'slug',
        'terms'       => 'forsale-properties',
      )
    ),
  ));
  $queryTotalRents = new WP_Query(array(
    'post_type'					=> array('property'),
    'tax_query'         => array(
      array (
        'taxonomy'    => 'property_type',
        'field'       => 'slug',
        'terms'       => 'rent-properties',
      )
    ),
  ));
  $queryTotalSold = new WP_Query(array(
    'post_type'					=> array('property'),
    'tax_query'         => array(
      array (
        'taxonomy'    => 'property_type',
        'field'       => 'slug',
        'terms'       => 'sold-properties',
      )
    ),
  ));
?>

<section class="navbar__sticky">
  <div class="container">
    <a href="<?php echo site_url('/properties-all'); ?>" <?php if(is_page('properties-all')) echo 'class="active"'; ?>>
      כל הנכסים (<?php echo ($queryTotalSales->found_posts + $queryTotalRents->found_posts + $queryTotalSold->found_posts); ?>)
    </a>
    <a <?php echo ($queryTotalSales->found_posts > 0) ? 'href="' . site_url('/properties-sale') . '"' : '' ; ?> <?php if(is_page('properties-sale')) echo 'class="active"'; ?>>
      מכירה (<?php echo $queryTotalSales->found_posts; ?>)
    </a>
    <a <?php echo ($queryTotalRents->found_posts > 0) ? 'href="' . site_url('/properties-rent') . '"' : '' ; ?> <?php if(is_page('properties-rent')) echo 'class="active"'; ?>>
      השכרה (<?php echo $queryTotalRents->found_posts; ?>)
    </a>
    <a <?php echo ($queryTotalSold->found_posts > 0) ? 'href="' . site_url('/properties-sold') . '"' : '' ; ?> <?php if(is_page('properties-sold')) echo 'class="active"'; ?>>
      נכסים שנמכרו (<?php echo $queryTotalSold->found_posts; ?>)
    </a>
  </div>
</section>

<?php
  wp_reset_postdata();
?>