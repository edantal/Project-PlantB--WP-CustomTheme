<?php 
	$this->create_shortcode('header_single', 'header_single_cb' );

	function header_single_cb($atts){
		$atts = vc_map_get_attributes('header_single', $atts);
		extract(shortcode_atts(array(
			'title'     => '',
      'text'      => '',
      'add_btn'   => '',
      'btn_text'  => '',
      'btn_link'  => '',
			'el_class'	=> '',
			'css'				=> '',
		), $atts));

		$wrapper_class = array();
		$wrapper_class[] = 'hero-text';
		$vc_class = (class_exists('Vc_Manager')) ? vc_shortcode_custom_css_class($css) : '';

		if($vc_class != '') {
			$wrapper_class[] = $vc_class;
		}
		if($el_class != '') {
			$wrapper_class[] = $el_class;
		}

		// $header_btn = ('||' === $header_btn) ? '' : $header_btn;
		// $header_btn = vc_build_link($header_btn);
		// $slide_use_link = false;

		// if(strlen($header_btn['url']) > 0) {
		// 	$slide_use_link = true;
		// 	$a_href = $header_btn['url'];
		// 	$a_title = $header_btn['title'];
		// 	$a_target = $header_btn['target'];
		// 	$a_rel = $header_btn['rel'];
		// }

		// $header_btn_title = ($header_btn['title']) ? 'title="'.$header_btn['title'].'"' : '';
		// $header_btn_target = ($header_btn['target']) ? 'target="_blank"' : '';
		// $header_btn_rel = ($header_btn['rel']) ? 'rel="nofollow"' : '';

		// $header_btn_atts = ($header_btn_title) ? ' ' . $header_btn_title : '';
		// $header_btn_atts .= ($header_btn_target) ? ' ' . $header_btn_target : '';
		// $header_btn_atts .= ($header_btn_rel) ? ' ' . $header_btn_rel : '';

		$html = '';
		ob_start(); ?>

			<div class="<?php implode(' ', $wrapper_class); ?>">
        <?php
          echo ($title !== '') ? '<h1>'.$title.'</h1>' : '';
          echo ($text !== '') ? '<p>'.$text.'</p>' : '';
          
          if($add_btn) {
            $url = esc_url($btn_link);
            if(strpos($url, '#') === 0) $target = '';
            else if(strpos($url, 'plantb.local') !== false || strpos($url, 'plantbimports.com') !== false) $target = 'target="_self"';
            else $target = 'target="_blank"';
            echo '<a class="btn btn__full" href="' .$url. '" ' .$target. '>' .$btn_text. '</a>';
          }
        ?>
      </div>

	<?php
		$o = ob_get_contents();
		$html .= $o;
		ob_get_clean();
		return $html;
	}