<?php
	$this->create_shortcode('section_wrap', 'section_wrap_cb');

	function section_wrap_cb($atts, $content = null) {
    $atts = vc_map_get_attributes('section_wrap', $atts);
		extract(shortcode_atts(array(
			'use_section_title'			=> '',
			'section_title'					=> '',
			'section_container'			=> '',
			'section_grid'					=> '',
			'section_grid_cols'			=> '',
			'section_inner_element'	=> '',
			'section_inner_class'		=> '',
			'el_class'							=> '',
			'el_id'									=> '',
			'css'										=> '',
		), $atts));

		$id = $el_id != '' ? 'id="'.$el_id.'" ' : '';

		$class = array();
		$class[] = (class_exists('Vc_Manager')) ? vc_shortcode_custom_css_class($css) : '';
		$class[] = ($el_class) ? $el_class : '';

		$container_class = array();
		if($section_container) $container_class[] = 'container';
		if($section_grid) $container_class[] = 'grid ' . $section_grid_cols;

		$inner_class = array();
		if($section_inner_element) $inner_class[] = $section_inner_class;
		

    $html = '';
    $html .= '<section '. $id .'class="section '.implode(' ', $class).'">';
		if($use_section_title) {
			$html .= '<div class="container"><h2 class="section__header">' . $section_title . '</h2></div>';
		}
		$html .= (sizeof($container_class) == 0) ? '' : '<div class="'.implode(' ', $container_class).'">';
		$html .= (sizeof($inner_class) == 0) ? '' : '<div class="'.implode(' ', $inner_class).'">';
    $html .= do_shortcode($content);
		$html .= (sizeof($inner_class) == 0) ? '' : '</div>';
		$html .= (sizeof($container_class) == 0) ? '' : '</div>';
    $html .= '</section>';
		
		return $html;
	}