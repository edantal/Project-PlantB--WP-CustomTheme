<?php 
	$this->create_shortcode('recent_properties', 'recent_properties_cb' );

	function recent_properties_cb($atts, $content){
		$atts = vc_map_get_attributes('recent_properties', $atts);
		extract(shortcode_atts(array(
			'el_id'										=> '',
			'el_class'								=> '',
			'css'											=> '',
		), $atts));

		$wrapper_class = array();
		$vc_class = (class_exists('Vc_Manager')) ? vc_shortcode_custom_css_class($css) : '';

		if($vc_class != '') {
			$wrapper_class[] = $vc_class;
		}
		if($el_class != '') {
			$wrapper_class[] = $el_class;
		}

		$propertyPosts = new WP_Query(array(
			'posts_per_page'		=> 5,
			'post_type'					=> array('property'),
			'post__not_in'			=> array(get_the_ID()),
			'order'             => 'DESC',
			'orderby'           => 'date',
		));

		$html = '';
		ob_start(); ?>

			<div class="container">
				<div class="row" style="margin-bottom: 0;">

					<?php
						$current_post = 0;
						while($propertyPosts->have_posts()) {
							$propertyPosts->the_post();
							$property_type = get_terms('property_type');
						
							if($current_post <= 1) {
								$col_class = 'vc_col-md-6 col-md-6';
								$card_class = 'card__property--horz';
								$card_content = true;
							}
							else {
								$col_class = 'vc_col-md-4 col-md-4';
								$card_class = 'card__property--vert';
								$card_content = false;
							} ?>

							<div class="<?php echo $col_class; ?> col-property">
								<div class="card <?php echo $card_class; ?><?php echo (get_the_terms(get_the_ID(), 'property_type')[0]->slug == 'sold-properties') ? ' card__sold' : ''; ?>">
									<div class="card-img">
										<?php the_post_thumbnail('property-img'); ?>
									</div>
									<div class="card-body">
										<small class="card__top"><?php echo get_the_terms(get_the_ID(), 'property_type')[0]->name; ?></small>
										<h4 class="card__title"><?php the_title(); ?></h4>
										<ul class="card__details list-unstyled">
											<?php
												if(get_field('property_location')) {
													echo '<li class="card__details--location">' . get_field('property_location') . '</li>';
												}
												if(get_field('property_area')) {
													echo '<li class="card__details--area">' . get_field('property_area') . ' מ&quot;ר</li>';
												}
												if(get_field('property_rooms')) {
													echo '<li class="card__details--rooms">' . get_field('property_rooms') . ' חדרים</li>';
												}
												if(get_field('property_floor')) {
													echo '<li class="card__details--floor">קומה ' . get_field('property_floor') . '</li>';
												}
												if(in_array('parking', get_field('property_features'))){
													echo '<li class="card__details--parking">חניה</li>';
												}
												if(in_array('elevator', get_field('property_features'))){
													echo '<li class="card__details--elevator">מעלית</li>';
												}
												if(in_array('storage', get_field('property_features'))){
													echo '<li class="card__details--storage">מחסן</li>';
												}
												if(in_array('balcony', get_field('property_features'))){
													echo '<li class="card__details--balcony">מרפסת שמש</li>';
												}
											?>
										</ul>
										<?php if($card_content) : ?>
											<p class="card__content"><?php echo wp_trim_words(get_field('property_description'), 15); ?></p>
										<?php endif; ?>
										<div class="card__btn">
											<a href="<?php the_permalink(); ?>" class="btn btn--black">לפרטים נוספים</a>
										</div>
									</div>
								</div>
							</div>

							<?php $current_post++;
						}
						wp_reset_postdata();
					?>
				</div>
			</div>

	<?php 
		$o = ob_get_contents();
		$html .= $o;
		ob_get_clean();
		return $html;
	}