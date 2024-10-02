<?php 
  if(shortcode_exists('tagline')) {
    vc_map(array(
      'name'        => __('Tagline'),
      'base'        => 'tagline',
      'description' => __('Tagline: image and text'),
      'icon'        => get_template_directory_uri(). '/assets/images/vc_icons/custom_icon.png',
      'category'    => __('Theme'),
      'params'      => array(

        // type
        array(
          'type'          => 'dropdown',
          'heading'       => __('Tagline Type'),
          'param_name'    => 'tagline_type',
          'description'   => __('Select type of tagline style'),
          'value'         => array(
            __('Image 1/3 + Text 2/3')  => '1',
            __('Text 1/2 + Image 1/2')  => '2',
          ),
          'std'           => '1'
        ),

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
          'type'          => 'textarea_html',
          'heading'       => __('Text'),
          'param_name'    => 'content',
          'description'   => __('Enter tagline text'),
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