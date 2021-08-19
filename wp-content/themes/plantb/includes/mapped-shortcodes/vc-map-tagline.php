<?php 
  if(shortcode_exists('tagline')) {
    vc_map(array(
      'name'        => __('Tagline'),
      'base'        => 'tagline',
      'description' => __('Tagline: image and text'),
      'icon'        => get_template_directory_uri(). '/assets/images/vc_icons/custom_icon.png',
      'category'    => __('Theme'),
      'params'      => array(
        // image
        array(
          'type'          => 'attach_image',
          'holder'        => 'img',
          'class'         => 'wpb-vc-img-block',
          'heading'       => __('Image'),
          'param_name'    => 'tagline_img',
          'description'   => __('Tagline Image'),
        ),
        // title
        array(
          'type'          => 'textfield',
          'heading'       => __('Title'),
          'param_name'    => 'tagline_title',
          'description'   => __('Enter a title'),
          'admin_label'   => true,
        ),
        // text
        array(
          'type'          => 'textfield',
          'heading'       => __('Text'),
          'param_name'    => 'tagline_text',
          'description'   => __('Enter short decription/text'),
        ),

        // custom
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