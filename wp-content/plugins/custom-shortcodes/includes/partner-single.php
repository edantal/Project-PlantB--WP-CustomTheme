<?php 
	$this->create_shortcode('partner_single', 'partner_single_cb' );

	function partner_single_cb($atts, $content){
		$atts = vc_map_get_attributes('partner_single', $atts);
		extract(shortcode_atts(array(
			'partner_title'				=> '',
			'partner_exlink'			=> '',
			'partner_img'					=> '',
			'el_class'						=> '',
			'css'									=> '',
		), $atts));

		// wrapper classes and styles
		$wrapper_class = array();
		$wrapper_class[] = 'partner-single';
		$vc_class = (class_exists('Vc_Manager')) ? vc_shortcode_custom_css_class($css) : '';

		if($vc_class != '') {
			$wrapper_class[] = $vc_class;
		}
		if($el_class != '') {
			$wrapper_class[] = $el_class;
		}

		$content = wpb_js_remove_wpautop($content, true);
		$url_link = vc_build_link($partner_exlink);

		$html = '';
		ob_start(); ?>

			<!-- SINGLE PARTNER -->
			<svg id="partner-filter" class="svg-filter">
        <defs>
          <filter id="black-filter">
            <feColorMatrix
              color-interpolation-filters="sRGB"
              type="matrix"
              values="0 0 0 0 0
                      0 0 0 0 0
                      0 0 0 0 0
                      0 0 0 1 0 "/>
          </filter>
          ...
        </defs>
      </svg>
      <div class="<?php echo implode(' ', $wrapper_class); ?>">
        <h6 class="partner-single__breadcrumbs">
					<a href="/brands">Our Brands</a> <i class="fas fa-chevron-right"></i> <?php echo $partner_title; ?>
				</h6>
        <h2 class="partner-single__title"><?php echo $partner_title; ?></h2>
        <div class="partner-single__text"><?php echo $content; ?></div>
				<?php
					if(isset($url_link['url'])) {
						echo '<a href="'.esc_url($url_link['url']).'" target="'.$url_link['target'].'" class="partner-single__link">'.$url_link['url'].'</a>';
					}
				?>
        	
        <ul class="partner-single__social">
					<?php
						if($atts['partner_fb'] !== '') {
							echo '<li><a href="'.$atts['partner_fb'].'" target="_blank" role="button"><i class="fab fa-facebook-f"></i></a></li>';
						}
						if($atts['partner_tw'] !== '') {
							echo '<li><a href="'.$atts['partner_tw'].'" target="_blank" role="button"><i class="fab fa-twitter"></i></a></li>';
						}
						if($atts['partner_ig'] !== '') {
							echo '<li><a href="'.$atts['partner_ig'].'" target="_blank" role="button"><i class="fab fa-instagram"></i></a></li>';
						}
						if($atts['partner_yt'] !== '') {
							echo '<li><a href="'.$atts['partner_yt'].'" target="_blank" role="button"><i class="fab fa-youtube"></i></a></li>';
						}
						if($atts['partner_pt'] !== '') {
							echo '<li><a href="'.$atts['partner_pt'].'" target="_blank" role="button"><i class="fab fa-pinterest-p"></i></a></li>';
						}
						if($atts['partner_in'] !== '') {
							echo '<li><a href="'.$atts['partner_in'].'" target="_blank" role="button"><i class="fab fa-linkedin-in"></i></a></li>';
						}
					?>
        </ul>
        <div class="partner-single__logo">
					<?php echo wp_get_attachment_image($partner_img, 'full'); ?>
        </div>
      </div>

	<?php
		$o = ob_get_contents();
		$html .= $o;
		ob_get_clean();
		return $html;
	}