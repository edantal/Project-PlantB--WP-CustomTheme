<?php 
	$this->create_shortcode('contact_info', 'contact_info_cb' );

	function contact_info_cb($atts){
		$atts = vc_map_get_attributes('contact_info', $atts);
		extract(shortcode_atts(array(
			'contact_title'				=> '',
			'el_class'						=> '',
			'css'									=> '',
		), $atts));

		$wrapper_class = array();
		$vc_class = (class_exists('Vc_Manager')) ? vc_shortcode_custom_css_class($css) : '';

		if($vc_class != '') {
			$wrapper_class[] = $vc_class;
		}
		if($el_class != '') {
			$wrapper_class[] = $el_class;
		}

		$html = '';
		ob_start(); ?>

			<div class="cta__info">
				<h2><?php echo $contact_title; ?></h2>

				<div class="cta__info-blocks">

					<?php if($atts['contact_info_address']) : ?>
						<div class="cta__info-block">
							<i class="fas fa-map-marker-alt"></i>
							<p><?php echo $atts['contact_info_address']; ?></p>
						</div>
					<?php endif; ?>
					
					<?php if($atts['contact_info_phone']) : ?>
						<div class="cta__info-block">
							<i class="fas fa-phone"></i>
							<p><?php echo $atts['contact_info_phone']; ?></p>
						</div>
					<?php endif; ?>

					<?php if($atts['contact_info_email1']) : ?>
						<div class="cta__info-block">
							<i class="fas fa-globe-africa"></i>
							<p><a href="mailto:<?php echo $atts['contact_info_email1']; ?>"><?php echo $atts['contact_info_email1']; ?></a></p>
						</div>
					<?php endif; ?>

					<?php if($atts['contact_info_email2']) : ?>
						<div class="cta__info-block">
							<i class="fas fa-globe-americas"></i>
							<p><a href="mailto:<?php echo $atts['contact_info_email2']; ?>"><?php echo $atts['contact_info_email2']; ?></a></p>
						</div>
					<?php endif; ?>

				</div>
			</div>

	<?php
		$o = ob_get_contents();
		$html .= $o;
		ob_get_clean();
		return $html;
	}