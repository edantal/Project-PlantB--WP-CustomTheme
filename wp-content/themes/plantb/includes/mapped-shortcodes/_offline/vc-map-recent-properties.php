<?php 
  if(shortcode_exists('recent_properties')) {
    vc_map(array(
      'name'        => __('Theme Recent Properties'),
      'base'        => 'recent_properties',
      'description' => __('Show recent properties'),
      'icon'        => get_template_directory_uri(). '/assets/images/vc_icons/custom_icon.png',
      'category'    => __('Custom'),
      'params'      => array(
        
        // id and class names
        array(
          'type'					=> 'textfield',
          'heading'				=> __('Custom ID'),
          'param_name'		=> 'el_id',
          'description'   => __('Add a custom ID to the button'),
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