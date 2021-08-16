<?php 
  if(shortcode_exists('gallery_wrap')){
    vc_map(array(
      'name'                      => __('Gallery Wrapper'),
      'base'                      => 'gallery_wrap',
      'as_parent'                 => array('only' => 'gallery_image'),
      'content_element' 			    => true,
      'description' 				      => __('Add images to this gallery wrapper'),
      'show_settings_on_create' 	=> false,
      'is_container' 				      => true,
      'icon'                      => get_template_directory_uri(). '/assets/images/vc_icons/custom_icon.png',
      'category' 					        => __('Custom'),
      'params' 					          => array(

        array(
          'type'          => 'textfield',
          'holder'        => 'h4',
          'class'         => 'wpb-vc-h4-title',
          'heading'       => __('Title'),
          'param_name'    => 'gallery_title',
          'description'   => __('Enter a title for gallery'),
          'value'         => 'Image Gallery'
        ),

        // extra classes
        array(
          'type'          => 'textfield',
          'heading'       => __('Custom Class'),
          'param_name'    => 'el_class',
          'description'   => __('Add custom class (space separated for multiple classes)'),
        ),
        array(
          'type'          => 'css_editor',
          'heading'       => __('Css Box'),
          'param_name'    => 'css',
          'group' 				=> 'Design Options',
        ),

      ),
      'js_view'                   => 'VcColumnView'
    ));
  }

  if(class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_Gallery_Wrap extends WPBakeryShortCodesContainer {}
  }