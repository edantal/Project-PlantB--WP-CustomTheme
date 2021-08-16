<?php 
	$this->create_shortcode('articles', 'articles_cb' );

	function articles_cb($atts, $content){
		$atts = vc_map_get_attributes('articles', $atts);
		extract(shortcode_atts(array(
			'display_type'						=> '',
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

		if($display_type == 'recent') {
			$queryPosts = new WP_Query(array(
				'posts_per_page'		=> $atts['recent_posts_num'],
				'post_type'					=> array('post'),
				'post__not_in'			=> array(get_the_ID()),
				'cat'								=> '5',
			));
			$type = "1";
		}
		elseif($display_type == 'blog') {
			$paged = (get_query_var('page')) ? get_query_var('page') : get_query_var('paged');
			$queryPosts = new WP_Query(array(
				'posts_per_page'		=> $atts['blog_posts_num'],
				'paged'							=> $paged,
				'post_type'					=> array('post'),
				'post__not_in'			=> array(get_the_ID()),
				'cat'								=> '5',
			));
			$type = "2";
		}

		$html = '';
		ob_start(); ?>

			<?php if($display_type == 'recent') : ?>

				<?php
				if($queryPosts->have_posts()) {
					while($queryPosts->have_posts()) {
						$queryPosts->the_post(); ?>

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
					}
				?>

			<?php elseif ($display_type == 'blog') : ?>

				<div class="block__posts">

					<?php
					if($queryPosts->have_posts()) {
						$current_post = 0;

						while($queryPosts->have_posts()) {
							$queryPosts->the_post();
							
							if($current_post == 0) {
								$col_class = 'vc_col-lg-12 col';
								$card_class = 'card--large';
							}
							else if($current_post == 5) {
								$col_class = 'vc_col-lg-12 col';
								$card_class = 'card--medium';
							}
							else {
								$col_class = 'vc_col-lg-6 col-lg-6';
								$card_class = '';
							} ?>

							<div class="<?php echo $col_class; ?> col-article">  
								<div class="card <?php echo $card_class; ?>">
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

							<?php $current_post++; }
						}
					?>

				</div>
				<div class="row block__pagination">
					<?php
						$paginate = get_the_posts_pagination(array(
							'total'								=> $queryPosts->max_num_pages,
							'mid_size'            => 2,
							'screen_reader_text'  => __('Posts Navigation'),
							'aria_label'          => __('Posts'),
							'prev_next'           => true,
							'next_text'           => __('הבא »', 'next set of posts'),
							'prev_text'           => __('« הקודם', 'previous set of posts'),
						));
						$paginate = str_replace('<h2 class="screen-reader-text">Posts Navigation</h2>', '', $paginate);
						echo $paginate;
					?>
				</div>
				
			<?php else : ?>
					<!-- echo 'None'; -->
			<?php endif; ?>

		<?php
		wp_reset_postdata();

		$o = ob_get_contents();
		$html .= $o;
		ob_get_clean();
		return $html;
	}