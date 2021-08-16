<?php 
  if(shortcode_exists('theme_btn')) {
    vc_map(array(
      'name'        => __('Theme Custom Button'),
      'base'        => 'theme_btn',
      'description' => __('Customized theme button'),
      'icon'        => get_template_directory_uri(). '/assets/images/vc_icons/custom_icon.png',
      'category'    => __('Custom'),
      'params'      => array(

        array(
          'type'				    => 'dropdown',
          'heading' 		    => __('Button Type'),
          'param_name' 	    => 'btn_type',
          'description'	    => __('Select button type'),
          'value'				    => array(
            __('Black')		      => 'btn--black',
            __('Grey')		      => 'btn--grey',
            __('Brand Colors')  => 'btn--brand',
            __('Custom')        => 'btn--custom',
          )
        ),
        array(
          'type'				      => 'dropdown',
          'heading' 		      => __('Button Size'),
          'param_name' 	      => 'btn_size',
          'description'	      => __('Select button size'),
          'value'				      => array(
            __('Large')         => 'btn-lg',
            __('Small')         => 'btn-sm',
          ),
        ),

        // brand colors
        array(
          'type'				    => 'dropdown',
          'heading' 		    => __('Background Color'),
          'param_name' 	    => 'brand_btn_bg',
          'description'	    => __('Select brand button color'),
          'value'				    => array(
            __('Dark Green')  => 'btn--dark-green',
            __('Light Green') => 'btn--green',
            __('Yellow')      => 'btn--yellow',
            __('Orange')      => 'btn--orange',
          ),
          'dependency' 				=> array(
            'element'		        => 'btn_type',
            'value'			        => array('btn--brand')
          ),
        ),

        // custom btn
        array(
          'type'              => 'colorpicker',
          'heading'           => __('Background Color'),
          'param_name'        => 'custom_btn_bg',
          'value'             => '#37af4a',
          'description'				=> __('Select button background color'),
          'edit_field_class' 	=> 'vc_col-sm-6',
          'dependency' 				=> array(
            'element'		        => 'btn_type',
            'value'			        => array('btn--custom')
          ),
        ),
        array(
          'type'							=> 'colorpicker',
          'heading' 					=> __('Text Color'),
          'param_name' 				=> 'custom_text_color',
          'value'       			=> '#ffffff',
          'description'				=> __('Select button text color'),
          'edit_field_class' 	=> 'vc_col-sm-6',
          'dependency' 				=> array(
            'element'		        => 'btn_type',
            'value'			        => array('btn--custom')
          ),
        ),

        // title
        array(
          'type'					    => 'textfield',
          'heading'				    => __('Button Text'),
          'param_name'		    => 'btn_text',
          'description'		    => __('Text for the button'),
          'admin_label'       => true
        ),

        // link
        array(
          'type'					    => 'vc_link',
          'heading'				    => __('URL (Link)'),
          'param_name'		    => 'btn_link',
          'description'		    => __('Add link to button')
        ),

        // alignment
        array(
          'type'					    => 'dropdown',
          'heading' 			    => __('Alignment'),
          'param_name' 		    => 'btn_align',
          'description'		    => __('Select button alignment'),
          'value'					    => array(
            __('Center')        => 'center',
            __('Left')          => 'left',
            __('Right')         => 'right',
            __('Inline')        => 'inline',
          ),
          'std'               => 'center',
        ),
        
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