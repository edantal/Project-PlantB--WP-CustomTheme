<?php
	$this->create_shortcode('gallery_wrap', 'gallery_wrap_cb');

	function gallery_wrap_cb($atts, $content = null) {
    $atts = vc_map_get_attributes('gallery_wrap', $atts);
		extract(shortcode_atts(array(
			'gallery_title'		=> '',
			'el_class'				=> '',
			'css'							=> '',
		), $atts));

		// creating random id for each slider
		$id = uniqid();

		$class = array();
		$class[] = (class_exists('Vc_Manager')) ? vc_shortcode_custom_css_class($css) : '';
		$class[] = ($el_class) ? $el_class : '';

    $html = '';
    $html .= '<section id="gallery" class="gallery-'.$id.' section__gallery py-5 '.implode(' ', $class).'">
							<div class="container">
							<h2 class="section-title mb-5">'.$gallery_title.'</h2>
							<div id="image-gallery" class="image-gallery image-gallery-'.$id.'">
							<div class="row">';
    $html .= do_shortcode($content);
    $html .= '</div>
							</div>
							</div>
							</section>';
		$html .= '<script>
								$ = jQuery;
								$(document).ready(function() {
									// Gallery
									var galleryOverlay = $(\'<div id="gallery-overlay" class="overlay-'.$id.'"></div>\');
									var galleryOverlayImage = $("<img>");
									var galleryPrev = $(\'<div id="gallery-prev" class="prev-'.$id.'"><i class="fa fa-chevron-right"></i></div>\');
									var galleryNext = $(\'<div id="gallery-next" class="next-'.$id.'"><i class="fa fa-chevron-left"></i></div>\');
									var galleryExit = $(\'<div id="gallery-exit" class="exit-'.$id.'"><i class="fa fa-times"></i></div>\');

									var gallerySelector = "#gallery.gallery-'.$id.'";
									var overlaySelector = "#gallery-overlay.overlay-'.$id.'";
									var galleryCount = $("#image-gallery.image-gallery-'.$id.' .row .image").length;

									// Create Gallery Lightbox Overlay
									galleryOverlay.append(galleryOverlayImage).prepend(galleryPrev).append(galleryNext).append(galleryExit);
									$(gallerySelector).append(galleryOverlay);
									galleryOverlay.hide();

									$(gallerySelector + " .img-wrapper").hover(
										function() {
											$(this).find(".img-overlay").animate({opacity: 1}, 333);
										},
										function() {
											$(this).find(".img-overlay").animate({opacity: 0}, 333);
										}
									);
									$(gallerySelector + " .img-overlay").click(function(e) {
										e.preventDefault();
										var imageLocation = $(this).prev().attr("href");
										galleryOverlayImage.attr("src", imageLocation);
										galleryOverlay.fadeIn("slow");
									});

									galleryOverlay.click(function() {
										$(this).fadeOut("slow");
									});

									galleryNext.click(function(e) {
										$(overlaySelector + " img").hide();
										var $currentImgSrc = $(overlaySelector + " img").attr("src");
										var $currentImg = $(\'#image-gallery.image-gallery-'.$id.' img[src="\' + $currentImgSrc + \'"]\');
										var $nextImg = $($currentImg.closest(".image").next().find("img"));
										var galleryOverlayImages = $("#image-gallery.image-gallery-'.$id.' img");
										if ($nextImg.length > 0) { 
											$(overlaySelector + " img").attr("src", $nextImg.attr("src")).fadeIn(800);
										}
										else {
											$(overlaySelector + " img").attr("src", $(galleryOverlayImages[0]).attr("src")).fadeIn(800);
										}
										e.stopPropagation();
									});

									galleryPrev.click(function(e) {
										$(overlaySelector + " img").hide();
										var $currentImgSrc = $(overlaySelector + " img").attr("src");
										var $currentImg = $(\'#image-gallery.image-gallery-'.$id.' img[src="\' + $currentImgSrc + \'"]\');
										var $prevImg = $($currentImg.closest(".image").prev().find("img"));
										var galleryOverlayImages = $("#image-gallery.image-gallery-'.$id.' img");
										if ($prevImg.length <= 0) { 
											$(overlaySelector + " img").attr("src", $(galleryOverlayImages[galleryCount-1]).attr("src")).fadeIn(800);
										}
										else {
											$(overlaySelector + " img").attr("src", $prevImg.attr("src")).fadeIn(800);
										}
										e.stopPropagation();
									});

									galleryExit.click(function() {
										$(overlaySelector).fadeOut("slow");
									});
								});
							</script>';

		return $html;
	}



	// Gallery
//var galleryCount = $("#image-gallery .row .image").length;
// $(".img-wrapper").hover(
//   function() {
//     $(this).find(".img-overlay").animate({opacity: 1}, 333);
//   },
//   function() {
//     $(this).find(".img-overlay").animate({opacity: 0}, 333);
//   }
// );

// Gallery Lightbox
// var galleryOverlay = $('<div id="gallery-overlay"></div>');
// var galleryOverlayImage = $("<img>");
// var galleryPrev = $('<div id="gallery-prev"><i class="fa fa-chevron-right"></i></div>');
// var galleryNext = $('<div id="gallery-next"><i class="fa fa-chevron-left"></i></div>');
// var galleryClose = $('<div id="gallery-exit"><i class="fa fa-times"></i></div>');

// Create Gallery Lightbox Overlay
// galleryOverlay.append(galleryOverlayImage).prepend(galleryPrev).append(galleryNext).append(galleryClose);
// $("#gallery").append(galleryOverlay);
// galleryOverlay.hide();

// $(".img-overlay").click(function(e) {
//   e.preventDefault();
//   var imageLocation = $(this).prev().attr("href");
//   galleryOverlayImage.attr("src", imageLocation);
//   galleryOverlay.fadeIn("slow");
// });

// galleryOverlay.click(function() {
//   $(this).fadeOut("slow");
// });

// galleryNext.click(function(e) {
//   $("#gallery-overlay img").hide();
//   var $currentImgSrc = $("#gallery-overlay img").attr("src");
//   var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
//   var $nextImg = $($currentImg.closest(".image").next().find("img"));
//   var galleryOverlayImages = $("#image-gallery img");
//   if ($nextImg.length > 0) { 
//     $("#gallery-overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
//   }
//   else {
//     $("#gallery-overlay img").attr("src", $(galleryOverlayImages[0]).attr("src")).fadeIn(800);
//   }
//   e.stopPropagation();
// });

// galleryPrev.click(function(e) {
//   $("#gallery-overlay img").hide();
//   var $currentImgSrc = $("#gallery-overlay img").attr("src");
//   var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
//   var $prevImg = $($currentImg.closest(".image").prev().find("img"));
//   var galleryOverlayImages = $("#image-gallery img");
//   if ($prevImg.length <= 0) { 
//     $("#gallery-overlay img").attr("src", $(galleryOverlayImages[galleryCount-1]).attr("src")).fadeIn(800);
//   }
//   else {
//     $("#gallery-overlay img").attr("src", $prevImg.attr("src")).fadeIn(800);
//   }
//   e.stopPropagation();
// });

// galleryClose.click(function() {
//   $("#gallery-overlay").fadeOut("slow");
// });