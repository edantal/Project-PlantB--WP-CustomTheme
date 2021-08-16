<?php 
	$this->create_shortcode('hero_parallax', 'hero_parallax_cb' );

	function hero_parallax_cb($atts, $content){
		$atts = vc_map_get_attributes('hero_parallax', $atts);
		extract(shortcode_atts(array(
			'hero_bg_img'					=> '',
			'hero_title_checkbox'	=> '',
			'hero_title'					=> '',
			'el_class'						=> '',
			'css'									=> '',
		), $atts));

		$wrapper_class = array('section__hero', 'section__parallax', 'section__parallax--md');
		$vc_class = (class_exists('Vc_Manager')) ? vc_shortcode_custom_css_class($css) : '';

		if($vc_class != '') {
			$wrapper_class[] = $vc_class;
		}
		if($el_class != '') {
			$wrapper_class[] = $el_class;
		}

		$bg_image = wp_get_attachment_url($hero_bg_img);

		$html = '';
		ob_start(); ?>

			<!-- SECTION: HERO -->
			<section id="hero" class="<?php echo implode(' ', $wrapper_class); ?>" style="background-image: url('<?php echo $bg_image; ?>');">
				<h1>
					<?php echo ($hero_title_checkbox) ? $hero_title : do_shortcode('[post_title]'); ?>
				</h1>
			</section>

	<?php
		$o = ob_get_contents();
		$html .= $o;
		ob_get_clean();
		return $html;
	}