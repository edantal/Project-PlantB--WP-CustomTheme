<?php 
  if(shortcode_exists('contact_info')) {
    vc_map(array(
      'name'        => __('Contact Info'),
      'base'        => 'contact_info',
      'as_child'    => array('only' => 'section_wrap'),
      'description' => __('Contact info - company info'),
      'icon'        => get_template_directory_uri(). '/assets/images/vc_icons/custom_icon.png',
      'category'    => __('Theme'),
      'params'      => array(
        // title
        array(
          'type'          => 'textfield',
          'heading'       => __('Title'),
          'param_name'    => 'contact_title',
          'description'   => __('Enter a title for contact form'),
          'admin_label'   => true,
          'std'           => __('Let\'s get in touch')
        ),

        // address
        array(
          'type'          => 'textfield',
          'heading'       => __('Address'),
          'param_name'    => 'contact_info_address',
          'description'   => __('Enter address'),
          'group'         => 'Address',
        ),
        // phone
        array(
          'type'          => 'textfield',
          'heading'       => __('Phone'),
          'param_name'    => 'contact_info_phone',
          'description'   => __('Enter phone'),
          'group'         => 'Phone',
        ),
        // email 1
        array(
          'type'          => 'textfield',
          'heading'       => __('Email'),
          'param_name'    => 'contact_info_email1',
          'description'   => __('Enter email address'),
          'group'         => 'Email',
        ),
        // email 2
        array(
          'type'          => 'textfield',
          'heading'       => __('Additional Email'),
          'param_name'    => 'contact_info_email2',
          'description'   => __('Enter additional email address'),
          'group'         => 'Email',
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