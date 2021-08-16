<?php 
  if(shortcode_exists('gallery_image')) {
    vc_map(array(
      'name'        => __('Gallery Image'),
      'base'        => 'gallery_image',
      'as_child'    => array('only' => 'gallery_wrap'),
      'description' => __('Single Gallery Image'),
      'icon'        => get_template_directory_uri(). '/assets/images/vc_icons/custom_icon.png',
      'category'    => __('Custom'),
      'params'      => array(
        array(
          'type'          => 'attach_image',
          'holder'        => 'img',
          'class'         => 'wpb-vc-img-block',
          'heading'       => __('Image'),
          'param_name'    => 'gallery_img',
          'description'   => __('Image for gallery'),
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Custom Class'),
          'param_name'    => 'el_class',
          'description'   => __('Add custom class (space separated for multiple classes)'),
        ),
        array(
          'type'          => 'css_editor',
          'heading'       => __('CSS Box'),
          'param_name'    => 'css',
          'group'         => 'Design Options',
        )
      )
    ));
  }