<?php 
	$this->create_shortcode('hero_slide', 'hero_slide_cb' );

	function hero_slide_cb($atts){
		$atts = vc_map_get_attributes('hero_slide', $atts);
		extract(shortcode_atts(array(
			'slide_img'									=> '',
			'slide_title'								=> '',
			'slide_text'								=> '',
			'slide_smalltext'						=> '',
			'slide_btn'									=> '',
			'slide_btn_text'						=> '',
			'slide_btn_checkbox'				=> '',
			'el_class'									=> '',
			'css'												=> '',
		), $atts));

		$wrapper_class = array();
		$vc_class = (class_exists('Vc_Manager')) ? vc_shortcode_custom_css_class($css) : '';

		if($vc_class != '') {
			$wrapper_class[] = $vc_class;
		}
		if($el_class != '') {
			$wrapper_class[] = $el_class;
		}

		$slide_img_crop = wp_get_attachment_image_src($slide_img, 'slider-img')[0];
		$slide_img_full = wp_get_attachment_image_src($slide_img, 'full')[0];

		$slide_btn = ('||' === $slide_btn) ? '' : $slide_btn;
		$slide_btn = vc_build_link($slide_btn);
		$slide_use_link = false;

		if(strlen($slide_btn['url']) > 0) {
			$slide_use_link = true;
			$a_href = $slide_btn['url'];
			$a_title = $slide_btn['title'];
			$a_target = $slide_btn['target'];
			$a_rel = $slide_btn['rel'];
		}

		$slide_btn_title = ($slide_btn['title']) ? 'title="'.$slide_btn['title'].'"' : '';
		$slide_btn_target = ($slide_btn['target']) ? 'target="_blank"' : '';
		$slide_btn_rel = ($slide_btn['rel']) ? 'rel="nofollow"' : '';

		$slide_btn_atts = ($slide_btn_title) ? ' ' . $slide_btn_title : '';
		$slide_btn_atts .= ($slide_btn_target) ? ' ' . $slide_btn_target : '';
		$slide_btn_atts .= ($slide_btn_rel) ? ' ' . $slide_btn_rel : '';

		$html = '';
		ob_start(); ?>

			<div class="hero-slider__slide slide" style="background-image: url('<?php echo $slide_img_crop; ?>');">
				<a href="<?php echo $slide_img_full; ?>" class="hero-slider__clickarea"></a>
				<div class="hero-slider__overlay">
					<div class="hero-slider__content">
						<h3 class="display-5"><?php echo $slide_title; ?></h3>
						<p class="lead"><?php echo $slide_text; ?></p>
						<p class="sub-lead"><?php echo $slide_smalltext; ?></p>
						<?php if($slide_btn_checkbox) : ?>
							<a class="btn btn--carousel" href="<?php echo $a_href; ?>"<?php echo $slide_btn_atts; ?>><?php echo $slide_btn_text; ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>

	<?php
		$o = ob_get_contents();
		$html .= $o;
		ob_get_clean();
		return $html;
	}