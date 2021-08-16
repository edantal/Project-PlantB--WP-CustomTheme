<?php 
	$this->create_shortcode('recent_articles', 'recent_articles_cb' );

	function recent_articles_cb($atts, $content){
		$atts = vc_map_get_attributes('recent_articles', $atts);
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

		$articlesPosts = new WP_Query(array(
			'posts_per_page'		=> 4,
			'post_type'					=> array('post'),
			'post__not_in'			=> array(get_the_ID()),
			'cat'								=> '5',
		));

		$html = '';
		ob_start();

		while($articlesPosts->have_posts()) {
			$articlesPosts->the_post(); ?>

				<div class="vc_col-lg-6 col-lg-6 col-article">
					<div class="card">
						<div class="card-img">
							<?php the_post_thumbnail('full'); ?>
						</div>
						<div class="card-body">
							<small class="card__top"><?php echo get_the_category(get_the_ID())[0]->name; ?></small>
							<h4 class="card__title"><?php the_title(); ?></h4>
							<p class="card__content"><?php echo wp_trim_words(get_field('article_excerpt'), 20); ?></p>
							<div class="card__btn">
								<a href="<?php the_permalink(); ?>" class="btn btn--article">למאמר המלא…</a>
							</div>
						</div>
					</div>
				</div>

		<?php }

		wp_reset_postdata();

		$o = ob_get_contents();
		$html .= $o;
		ob_get_clean();
		return $html;
	}