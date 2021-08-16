<?php 
  if(shortcode_exists('hero_slide')) {
    vc_map(array(
      'name'        => __('Hero Slide'),
      'base'        => 'hero_slide',
      'as_child'    => array('only' => 'slider_wrap'),
      'description' => __('Hero single slide'),
      'icon'        => get_template_directory_uri(). '/assets/images/vc_icons/custom_icon.png',
      'category'    => __('Custom'),
      'params'      => array(
        array(
          'type'          => 'attach_image',
          'holder'        => 'img',
          'class'         => 'wpb-vc-img-block',
          'heading'       => __('Image'),
          'param_name'    => 'slide_img',
          'description'   => __('Image for slide'),
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Title'),
          'param_name'    => 'slide_title',
          'description'   => __('Optional. Enter a title for slide'),
          'admin_label'   => true,
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Text'),
          'param_name'    => 'slide_text',
          'description'   => __('Optional. Enter short decription/text for slide'),
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Small Text'),
          'param_name'    => 'slide_smalltext',
          'description'   => __('Optional. Enter short details text (for property details)'),
        ),
        // array(
        //   'type' 			    => 'checkbox',
        //   'heading'        => __('Add property details?'),
        //   'param_name' 	  => 'slide_details_checkbox',
        //   'description'    => 'Check this box if you would like to include the details for a property slide',
        //   'std'            => 'false'
        // ),
        // array(
        //   'type'           => 'checkbox',
        //   'value'          => array(
        //     __('Type')                => 'type',
        //     __('Number of Rooms')     => 'number_rooms',
        //     __('Location')            => 'location',
        //     __('Size')                => 'size',
        //     __('Floor')               => 'floor',
        //   ),
        //   'param_name'     => 'slide_details',
        //   'dependency'     => array(
        //     'element'          => 'slide_details_checkbox',
        //     'value'            => 'true'
        //   ),
        // ),
        array(
          'type'          => 'checkbox',
          'param_name' 	  => 'slide_btn_checkbox',
          'description'   => 'Check this box if you would like to show button for slide',
          'value'         => array(
            _('Show Button?')   => 'true',
          ),
          'std'           => 'true'
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Button Text'),
          'param_name'    => 'slide_btn_text',
          'description'   => __('Optional. Enter text for button'),
          'value'         => __('לפרטים נוספים'),
          'dependency'    => array(
            'element'        => 'slide_btn_checkbox',
            'value'          => 'true'
          ),
        ),
        array(
          'type'          => 'vc_link',
          'heading'       => __('Button link'),
          'param_name'    => 'slide_btn',
          'description'   => __('Add link to button'),
          'dependency'    => array(
            'element'        => 'slide_btn_checkbox',
            'value'          => 'true'
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