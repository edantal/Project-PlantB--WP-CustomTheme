<?php 
	$this->create_shortcode('card_sm', 'card_sm_cb' );

	function card_sm_cb($atts, $content){
		$atts = vc_map_get_attributes('card_sm', $atts);
		extract(shortcode_atts(array(
			'card_img'						=> '',
			'card_type'						=> '',
			'card_title'					=> '',
			'card_text'						=> '',
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

			<?php if($card_type == 'service_card') : ?>

				<div class="service">
					<?php echo wp_get_attachment_image($card_img, 'full'); ?>
					<h4><?php echo $card_title; ?></h4>
					<p><?php echo $card_text; ?></p>
				</div>

			<?php elseif($card_type == 'rhombus_card') : ?>

				<div class="info__img">
					<?php echo wp_get_attachment_image($card_img, 'gallery-img'); ?>
				</div>
				<div class="info__body">
					<h4><?php echo $card_title; ?></h4>
					<p><?php echo $content; ?></p>
				</div>

			<?php endif; ?>

	<?php
		$o = ob_get_contents();
		$html .= $o;
		ob_get_clean();
		return $html;
	}