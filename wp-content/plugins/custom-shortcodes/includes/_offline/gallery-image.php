<?php 
	$this->create_shortcode('gallery_image', 'gallery_image_cb' );

	function gallery_image_cb($atts){
		$atts = vc_map_get_attributes('gallery_image', $atts);
		extract(shortcode_atts(array(
			'gallery_img'								=> '',
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

		$image = wp_get_attachment_image_src($gallery_img, 'gallery-img')[0];

		$html = '';
		ob_start(); ?>

			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 image">
				<div class="img-wrapper">
					<a href="<?php echo $image; ?>">
						<img src="<?php echo $image; ?>" class="img-responsive">
					</a>
					<div class="img-overlay">
						<i class="fa fa-search-plus" aria-hidden="true"></i>
					</div>
				</div>
			</div>

	<?php
		$o = ob_get_contents();
		$html .= $o;
		ob_get_clean();
		return $html;
	}