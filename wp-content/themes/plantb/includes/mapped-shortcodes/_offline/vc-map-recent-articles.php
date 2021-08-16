<?php 
  if(shortcode_exists('recent_articles')) {
    vc_map(array(
      'name'        => __('Theme Recent Articles'),
      'base'        => 'recent_articles',
      'description' => __('Show recent articles'),
      'icon'        => get_template_directory_uri(). '/assets/images/vc_icons/custom_icon.png',
      'category'    => __('Custom'),
      'params'      => array(

        array(
          'type'				    => 'dropdown',
          'heading' 		    => __('Number of posts'),
          'param_name' 	    => 'posts',
          'description'	    => __('Select how many posts to show'),
          'value'				    => array(
            __('1')		    => '12',
            __('2')		    => '6',
            __('3')       => '4',
            __('4')       => '3',
          )
        ),
        // array(
        //   'type'				      => 'dropdown',
        //   'heading' 		      => __('Button Size'),
        //   'param_name' 	      => 'btn_size',
        //   'description'	      => __('Select button size'),
        //   'value'				      => array(
        //     __('Large')         => 'btn-lg',
        //     __('Small')         => 'btn-sm',
        //   ),
        // ),

        // // custom btn
        // array(
        //   'type'              => 'colorpicker',
        //   'heading'           => __('Background Color'),
        //   'param_name'        => 'custom_btn_bg',
        //   'value'             => '#285755',
        //   'description'				=> __('Select button background color'),
        //   'edit_field_class' 	=> 'vc_col-sm-6',
        //   'dependency' 				=> array(
        //     'element'		        => 'btn_type',
        //     'value'			        => array('custom_btn')
        //   ),
        // ),
        // array(
        //   'type'							=> 'colorpicker',
        //   'heading' 					=> __('Text Color'),
        //   'param_name' 				=> 'custom_text_color',
        //   'value'       			=> '#ffffff',
        //   'description'				=> __('Select button text color'),
        //   'edit_field_class' 	=> 'vc_col-sm-6',
        //   'dependency' 				=> array(
        //     'element'		        => 'btn_type',
        //     'value'			        => array('custom_btn')
        //   ),
        // ),

        // // title
        // array(
        //   'type'					    => 'textfield',
        //   'heading'				    => __('Button Text'),
        //   'param_name'		    => 'btn_text',
        //   'description'		    => __('Text for the button'),
        //   'admin_label'       => true
        // ),

        // // link
        // array(
        //   'type'					    => 'vc_link',
        //   'heading'				    => __('URL (Link)'),
        //   'param_name'		    => 'btn_link',
        //   'description'		    => __('Add link to button')
        // ),

        // // alignment
        // array(
        //   'type'					    => 'dropdown',
        //   'heading' 			    => __('Alignment'),
        //   'param_name' 		    => 'btn_align',
        //   'description'		    => __('Select button alignment'),
        //   'value'					    => array(
        //     __('Center')        => 'center',
        //     __('Left')          => 'left',
        //     __('Right')         => 'right',
        //     __('Inline')        => 'inline',
        //   ),
        //   'std'               => 'center',
        // ),
        
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