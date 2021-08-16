<?php 
  if(shortcode_exists('section_wrap')){
    vc_map(array(
      'name'                      => __('Section'),
      'base'                      => 'section_wrap',
      'as_parent'                 => array('only' => 'contact_info, contact_us'),
      'content_element' 			    => true,
      'description' 				      => __('Section containing other components'),
      'show_settings_on_create' 	=> false,
      'is_container' 				      => true,
      'icon'                      => get_template_directory_uri(). '/assets/images/vc_icons/custom_icon.png',
      'category' 					        => __('Theme'),
      'params' 					          => array(

        array(
          'type'          => 'checkbox',
          'param_name' 	  => 'use_section_title',
          'description'   => 'Check box to show section title',
          'value'         => array(
            _('Use title?')   => 'true',
          ),
          'std'           => 'true',
        ),
        array(
          'type'          => 'textfield',
          'holder'        => 'h4',
          'class'         => 'wpb-vc-h4-title',
          'heading'       => __('Title'),
          'param_name'    => 'section_title',
          'description'   => __('Section title'),
          'std'           => 'Section',
          'dependency'    => array(
            'element'   => 'use_section_title',
            'value'			=> 'true',
          ),
        ),
        array(
          'type'          => 'checkbox',
          'param_name' 	  => 'section_container',
          'description'   => 'Check box to constrain content inside container',
          'value'         => array(
            _('Use container?')   => 'true',
          ),
          'std'           => 'true'
        ),
        array(
          'type'          => 'checkbox',
          'param_name' 	  => 'section_grid',
          'description'   => 'Check box to show css grid options',
          'value'         => array(
            _('Use css grid?')    => 'true',
          ),
          'std'           => 'false'
        ),
        array(
          'type'          => 'dropdown',
          'heading'       => __('Number of columns'),
          'param_name'    => 'section_grid_cols',
          'description'   => __('Select number of grid columns'),
          'value'         => array(
            __('2 Columns')     => 'grid--2-cols',
            __('3 Columns')     => 'grid--3-cols',
            __('4 Columns')     => 'grid--4-cols',
          ),
          'std'           => 'grid--2-cols',
          'dependency'    => array(
            'element'   => 'section_grid',
            'value'			=> 'true',
          ),
        ),
        array(
          'type'          => 'checkbox',
          'param_name' 	  => 'section_inner_element',
          'description'   => 'Check box to add inner element',
          'value'         => array(
            _('Use inner element?') => 'true',
          ),
          'std'           => 'false'
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Inner element'),
          'param_name'    => 'section_inner_class',
          'description'   => __('Add inner element class name (space separated for multiple classes)'),
          'dependency'    => array(
            'element'   => 'section_inner_element',
            'value'			=> 'true',
          ),
        ),

        // extra classes
        array(
          'type'          => 'textfield',
          'heading'       => __('Custom Class'),
          'param_name'    => 'el_class',
          'description'   => __('Add custom class (space separated for multiple classes)'),
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Custom ID'),
          'param_name'    => 'el_id',
          'description'   => __('Add custom id name (unique)'),
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
    class WPBakeryShortCode_Section_Wrap extends WPBakeryShortCodesContainer {}
  }