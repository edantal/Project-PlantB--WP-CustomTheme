<?php 
	$this->create_shortcode('theme_btn', 'theme_btn_cb' );

	function theme_btn_cb($atts, $content){
		$atts = vc_map_get_attributes('theme_btn', $atts);
		extract(shortcode_atts(array(
			'btn_type'								=> '',
			'btn_size'								=> '',
			'btn_text'								=> '',
			'btn_text_mobile'					=> '',
			'btn_link'								=> '',
			'btn_align'								=> '',
			'custom_text_color'				=> '',
			'brand_btn_bg'						=> '',
			'custom_btn_bg'						=> '',
			'el_id'										=> '',
			'el_class'								=> '',
			'css'											=> '',
		), $atts));

		if(empty($el_id)) {
			$random_id_number = rand(0,10000000);
			$el_id = 'btn-id-' . $random_id_number; 
		}

		$wrapper_class = array();
		$extra_classnames = array();
		$vc_class = (class_exists('Vc_Manager')) ? vc_shortcode_custom_css_class($css) : '';

		if($vc_class != '') {
			$extra_classnames[] = $vc_class;
		}
		if($el_class != '') {
			$extra_classnames[] = $el_class;
		}

		$html = '';
		$button_html = '';

		$btn_link = ('||' === $btn_link) ? '' : $btn_link;
		$btn_link = vc_build_link($btn_link);
		$use_link = false;

		$button_classes = array('btn');
		$text_style = array();
		$link_style = array();

		// wrapper alignment
		switch($btn_align) {
			case 'left':
				$wrapper_class[] = 'text-left';
				break;
			case 'right':
				$wrapper_class[] = 'text-right';
				break;
			case 'center':
				$wrapper_class[] = 'text-center';
				break;
			default:
				break;
		}

		// btn type, size and custom
		$button_classes[] = $btn_type;
		$button_classes[] = $btn_size;

		if($btn_type == 'btn--custom') {
			if($custom_btn_bg){
				$link_style[] = vc_get_css_color('background-color', ($custom_btn_bg . '!important'));
			}
			if($custom_text_color){
				$text_style[] = vc_get_css_color('color', ($custom_text_color . '!important'));
			}
		}

		if($btn_type == 'btn--brand') {
			$button_classes[] = $brand_btn_bg;
		}

		$button_html = '<span style="'. implode(' ', $text_style) .'">';
		$button_html .= $btn_text;
		$button_html .= '</span>';

		// btn link 
		if(strlen($btn_link['url']) > 0) {
			$use_link = true;
			$a_href = $btn_link['url'];
			$a_title = $btn_link['title'];
			$a_target = $btn_link['target'];
			$a_rel = $btn_link['rel'];
		}

		$btn_title = ($btn_link['title']) ? 'title="'.$btn_link['title'].'"' : '';
		$btn_target = ($btn_link['target']) ? 'target="_blank"' : '';
		$btn_rel = ($btn_link['rel']) ? 'rel="nofollow"' : '';

		// btn html
		$html .= '<div class="'.implode(' ', $wrapper_class).'">';
		$html .= '<a id="'. $el_id . '" class="'.implode(' ', $button_classes).' '.implode(' ', $extra_classnames).'" href="'.$a_href.'" '.$btn_title.' '.$btn_target.' '.$btn_rel.'style="'.implode(' ',$link_style).'">';
		$html .= $button_html;
		$html .= '</a>';
		$html .= '</div>';

		return $html;
	}
?>