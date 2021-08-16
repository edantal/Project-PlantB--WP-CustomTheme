<?php 
  if(shortcode_exists('card_sm')) {
    vc_map(array(
      'name'        => __('Small Card'),
      'base'        => 'card_sm',
      'description' => __('Small card component'),
      'icon'        => get_template_directory_uri(). '/assets/images/vc_icons/custom_icon.png',
      'category'    => __('Custom'),
      'params'      => array(
        array(
          'type'          => 'attach_image',
          'heading'       => __('Image'),
          'param_name'    => 'card_img',
          'description'   => __('Image for card'),
        ),
        array(
          'type'          => 'dropdown',
          'heading'       => __('Card Type'),
          'param_name'    => 'card_type',
          'description'   => __('Select card type'),
          'value'         => array(
            __('Square')    => 'square_card',
            __('Rhombus')   => 'rhombus_card',
            __('Services')  => 'service_card',
          )
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Title'),
          'param_name'    => 'card_title',
          'description'   => __('Enter a title for card'),
          'admin_label'   => true,
        ),
        array(
          'type'            => 'textfield',
          'heading' 		    => __('Text'),
          'param_name' 	    => 'card_text',
          'description' 	  => __('Card text content'),
          'dependency'      => array(
            'element'   => 'card_type',
            'value'     => array('service_card'),
          ),
        ),
        array(
          'type'            => 'textarea_html',
          'heading' 		    => __('Text'),
          'param_name' 	    => 'content',
          'description' 	  => __('Card text content'),
          'dependency'      => array(
            'element'   => 'card_type',
            'value'			=> array('square_card', 'rhombus_card'),
          ),
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