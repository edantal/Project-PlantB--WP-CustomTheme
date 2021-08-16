<?php 
	$this->create_shortcode('contact_us', 'contact_us_cb' );

	function contact_us_cb($atts){
		$atts = vc_map_get_attributes('contact_us', $atts);
		extract(shortcode_atts(array(
			'contact_title'				=> '',
			'contact_text'				=> '',
			'contact_form'				=> '',
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

		<div class="cta__form">
			<h2><?php echo $contact_title; ?></h2>
			<p><?php echo $contact_text; ?></p>
			<?php echo do_shortcode('[contact-form-7 id="'.$contact_form.'" html_class="contact__form"]'); ?>
		</div>

	<?php
		$o = ob_get_contents();
		$html .= $o;
		ob_get_clean();
		return $html;
	}