<?php 
	$this->create_shortcode('tagline', 'tagline_cb');

	function tagline_cb($atts, $content){
		$atts = vc_map_get_attributes('tagline', $atts);
		extract(shortcode_atts(array(
			'tagline_type'		=> '',
			'tagline_img'			=> '',
			'tagline_title'		=> '',
			'el_class'				=> '',
			'css'							=> '',
		), $atts));

		$wrapper_class = array();
		$wrapper_class[] = 'section section__tagline';
		$wrapper_class[] = ($tagline_type == 1) ? 'background--white' : 'background--grey';
		$vc_class = (class_exists('Vc_Manager')) ? vc_shortcode_custom_css_class($css) : '';

		if($vc_class != '') {
			$wrapper_class[] = $vc_class;
		}
		if($el_class != '') {
			$wrapper_class[] = $el_class;
		}

		$content = wpb_js_remove_wpautop($content, true);

		$html = '';
		ob_start(); ?>

			<!-- SECTION: TAGLINE -->
			<section class="<?php echo implode(' ', $wrapper_class); ?>">
				<div class="container tagline tagline--<?php echo $tagline_type; ?>">
					<div class="tagline__img">
						<?php echo wp_get_attachment_image($tagline_img, 'full'); ?>
					</div>
					<div class="tagline__text">
						<h2><?php echo $tagline_title; ?></h2>
						<hr class="hr--text">
						<p><?php echo $content; ?></p>
					</div>
				</div>
			</section>

	<?php
		$o = ob_get_contents();
		$html .= $o;
		ob_get_clean();
		return $html;
	}