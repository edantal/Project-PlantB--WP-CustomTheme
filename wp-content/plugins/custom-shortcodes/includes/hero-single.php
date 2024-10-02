<?php 
	$this->create_shortcode('hero_single', 'hero_single_cb' );

	function hero_single_cb($atts){
		$atts = vc_map_get_attributes('hero_single', $atts);
		extract(shortcode_atts(array(
			'hero_img'							=> '',
			'hero_img_mobile'				=> '',
			'hero_hr_checkbox'			=> '',
			'hero_title'						=> '',
			'hero_accent_title'			=> '',
			'hero_accent_color'			=> '',
      'hero_text'							=> '',
      'hero_color'						=> '',
      'add_btn'   						=> '',
      'btn_text'  						=> '',
      'btn_link'  						=> '',
			'el_class'							=> '',
			'css'										=> '',
		), $atts));

		// wrapper classes and styles
		$wrapper_class = array();
		$wrapper_class[] = 'section section__hero';
		if($hero_hr_checkbox) {
			$wrapper_class[] = 'hr';
		}
		$vc_class = (class_exists('Vc_Manager')) ? vc_shortcode_custom_css_class($css) : '';

		if($vc_class != '') {
			$wrapper_class[] = $vc_class;
		}
		if($el_class != '') {
			$wrapper_class[] = $el_class;
		}

		// textbox styles
		$text_styles = array();
		if($atts['hero_color_checkbox']){
			$text_styles[] = vc_get_css_color('color', ($hero_color . ' !important'));
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

			<!-- SECTION: HERO -->
			<style>
				:root {
					--hero-img: url(<?php echo wp_get_attachment_image_url($hero_img, 'full'); ?>);
				}
				<?php
					if($hero_img_mobile) {
						echo "@media(max-width: 768px) {
							:root {
								--hero-img: url(" . wp_get_attachment_image_url($hero_img_mobile, 'full') . ");
							}
						}";
					}
				?>
			</style>

			<section class="<?php echo implode(' ', $wrapper_class); ?>" style="background-image: var(--hero-img);">
				<div class="container">
					<div class="hero-text" style="<?php echo implode(' ', $text_styles); ?>">
						<?php
							$title = ($atts['hero_accent_checkbox']) ? str_replace($hero_accent_title, '<span style="color:'.$hero_accent_color.' !important;">'.$hero_accent_title.'</span>', $hero_title) : $hero_title;
							echo ($hero_title !== '') ? '<h1>'.$title.'</h1>' : '';
							echo ($hero_text !== '') ? '<p>'.$hero_text.'</p>' : '';

							// if($add_btn) {
							// 	$url = esc_url($btn_link);
							// 	if(strpos($url, '#') === 0) $target = '';
							// 	else if(strpos($url, 'plantb.local') !== false || strpos($url, 'plantbimports.com') !== false) $target = 'target="_self"';
							// 	else $target = 'target="_blank"';
							// 	echo '<a class="btn btn__full" href="' .$url. '" ' .$target. '>' .$btn_text. '</a>';
							// }
						?>
					</div>
				</div>
			</section>

	<?php
		$o = ob_get_contents();
		$html .= $o;
		ob_get_clean();
		return $html;
	}