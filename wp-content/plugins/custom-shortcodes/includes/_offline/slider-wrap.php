<?php
	$this->create_shortcode('slider_wrap', 'slider_wrap_cb');

	function slider_wrap_cb($atts, $content = null) {
    $atts = vc_map_get_attributes('slider_wrap', $atts);
		extract(shortcode_atts(array(
			'slides_per_view_desktop'			=> '',
			'slides_use_peek'							=> '',
			'slides_per_view_mobile'			=> '',
			'slides_autoplay'							=> '',
			'slides_use_lightbox'					=> '',
			'el_class'										=> '',
			'css'													=> '',
		), $atts));

		// creating random id for each slider
		$id = uniqid();

		$class = array();
		$class[] = (class_exists('Vc_Manager')) ? vc_shortcode_custom_css_class($css) : '';
		$class[] = ($el_class) ? $el_class : '';
		$class[] = (!$slides_use_lightbox) ? 'hero-slider__nolightbox' : '';

		$peek_lg = '';
		$peek_md = '';
		$peek_sm = '';
		if($slides_use_peek == 'true') {
			$peek_lg = 'peek: 350,';
			$peek_md = 'peek: 0,';
			$peek_sm = 'peek: 0,';
		}

    $html = '';
    $html .= '<section id="slider-'. $id .'" class="hero-slider '.implode(' ', $class).'">
              <div data-glide-el="track" class="glide__track">
              <div id="glider-'. $id .'" class="glide__slides">';
    $html .= do_shortcode($content);
    $html .= '</div>
							<div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
							<div class="glide__arrows" data-glide-el="controls">
							<button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
							<button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
							</div>
              </div>
							</section>

							<script>
								$ = jQuery;

								$(document).ready(function() {
									if(document.querySelector("#slider-'. $id .'")) {
										var dotCount = document.querySelectorAll("#slider-'. $id .' .hero-slider__slide").length;
										var dotHTML = "";
										for (var i = 0; i < dotCount; i++) {
											dotHTML += \'<button class="slider__bullet glide__bullet" data-glide-dir="=\'+i+\'"></button>\';
										}
										document.querySelector("#slider-'. $id .' .glide__bullets").insertAdjacentHTML("beforeend", dotHTML);
									
										var glide = new Glide("#slider-'. $id .'", {
											type: "carousel",
											perView: '. $slides_per_view_desktop .',
											' . $peek_lg . '
											gap: 5,
											autoplay: '. (int)$slides_autoplay * 1000 .',
											breakpoints: {
												1366: {
													perView: '. $slides_per_view_desktop .',
													' . $peek_md . '
													gap: 5,
												},
												1000: {
													perView: '. $slides_per_view_mobile .',
													' . $peek_sm . '
													gap: 0,
												}
											}
										});
									
										glide.mount();
									}
								});
							</script>';
		
		if($slides_use_lightbox == 'true') {
    	$html .= '<script>
								$ = jQuery;
								$(document).ready(function() {
									// Slider Image Gallery
									var sliderGalleryOverlay = $(\'<div id="slider-gallery-overlay-'.$id.'" class="slider-gallery__overlay"></div>\');
									var sliderGalleryOverlayImage = $(\'<img class="slider-gallery__img">\');
									var sliderGalleryPrev = $(\'<div id="slider-gallery-prev-'.$id.'" class="slider-gallery__prev"><i class="fa fa-chevron-left"></i></div>\');
									var sliderGalleryNext = $(\'<div id="slider-gallery-next-'.$id.'" class="slider-gallery__next"><i class="fa fa-chevron-right"></i></div>\');
									var sliderGalleryExit = $(\'<div id="slider-gallery-exit-'.$id.'" class="slider-gallery__exit"><i class="fa fa-times"></i></div>\');

									var sliderGallerySelector = "#slider-'.$id.'";
									var sliderOverlaySelector = "#slider-gallery-overlay-'.$id.'.slider-gallery__overlay";
									var sliderGalleryCount = $("#glider-'.$id.' .hero-slider__slide").length;

									// Create Gallery Lightbox Overlay
									sliderGalleryOverlay.append(sliderGalleryOverlayImage).prepend(sliderGalleryPrev).append(sliderGalleryNext).append(sliderGalleryExit);
									$(sliderGallerySelector).append(sliderGalleryOverlay);
									sliderGalleryOverlay.hide();

									$(sliderGallerySelector + " .hero-slider__clickarea").click(function(e) {
										e.preventDefault();
										var imageLocation = $(this).attr("href");
										sliderGalleryOverlayImage.attr("src", imageLocation);
										sliderGalleryOverlay.fadeIn("slow");
									});


									sliderGalleryOverlay.click(function() {
										$(this).fadeOut("slow");
									});

									sliderGalleryNext.click(function(e) {
										$(sliderOverlaySelector + " img").hide();
										var $currentImgSrc = $(sliderOverlaySelector + " img").attr("src");
										var $currentImg = $(\'#glider-'.$id.' .hero-slider__slide a.hero-slider__clickarea[href="\' + $currentImgSrc + \'"]\');
										var $nextImg = $($currentImg.closest(".slide").next().find("a.hero-slider__clickarea"));
										var sliderGalleryOverlayImages = $(".slider-gallery-overlay-'.$id.' img");
										if ($nextImg.length > 0) { 
											$(sliderOverlaySelector + " img").attr("src", $nextImg.attr("href")).fadeIn(800);
										}
										else {
											$(sliderOverlaySelector + " img").attr("src", $(sliderGalleryOverlayImages[0]).attr("href")).fadeIn(800);
										}
										e.stopPropagation();
									});
								
									sliderGalleryPrev.click(function(e) {
										$(sliderOverlaySelector + " img").hide();
										var $currentImgSrc = $(sliderOverlaySelector + " img").attr("src");
										var $currentImg = $(\'#glider-'.$id.' .hero-slider__slide a.hero-slider__clickarea[href="\' + $currentImgSrc + \'"]\');
										var $prevImg = $($currentImg.closest(".slide").prev().find("a.hero-slider__clickarea"));
										var sliderGalleryOverlayImages = $(".slider-gallery-overlay-'.$id.' img");
										if ($prevImg.length <= 0) { 
											$(sliderOverlaySelector + " img").attr("src", $(sliderGalleryOverlayImages[sliderGalleryCount-1]).attr("href")).fadeIn(800);
										}
										else {
											$(sliderOverlaySelector + " img").attr("src", $prevImg.attr("href")).fadeIn(800);
										}
										e.stopPropagation();
									});

									sliderGalleryExit.click(function() {
										$(sliderOverlaySelector).fadeOut("slow");
									});
								});
							</script>';
		}
		return $html;
	}










