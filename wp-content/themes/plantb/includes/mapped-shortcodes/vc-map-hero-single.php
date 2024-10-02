<?php 
  if(shortcode_exists('hero_single')) {
    vc_map(array(
      'name'        => __('Hero Single'),
      'base'        => 'hero_single',
      'description' => __('Hero single image with title, description and cta'),
      'icon'        => get_template_directory_uri(). '/assets/images/vc_icons/custom_icon.png',
      'category'    => __('Theme'),
      'params'      => array(
        // image
        array(
          'type'          => 'attach_image',
          'holder'        => 'img',
          'class'         => 'wpb-vc-img-block',
          'heading'       => __('Image'),
          'param_name'    => 'hero_img',
          'description'   => __('Hero Desktop Image'),
        ),
        array(
          'type'          => 'checkbox',
          'param_name' 	  => 'hero_mobile',
          'description'   => 'Check box to use a different image for mobile',
          'value'         => array(
            _('Use mobile hero image?')   => 'true',
          ),
          'std'           => 'false'
        ),
        array(
          'type'          => 'attach_image',
          'holder'        => 'img',
          'class'         => 'wpb-vc-img-none',
          'heading'       => __('Image'),
          'param_name'    => 'hero_img_mobile',
          'description'   => __('Hero Mobile Image'),
          'admin_label'   => false,
          'dependency'    => array(
            'element'        => 'hero_mobile',
            'value'          => 'true'
          ),
        ),
        array(
          'type'          => 'checkbox',
          'param_name' 	  => 'hero_hr_checkbox',
          'description'   => 'Check box to add horizontal line at the bottom',
          'value'         => array(
            _('Add bottom line to image?')   => 'true',
          ),
          'std'           => 'true'
        ),

        // title
        array(
          'type'          => 'textfield',
          'heading'       => __('Title'),
          'param_name'    => 'hero_title',
          'description'   => __('Enter a title'),
          'admin_label'   => true,
        ),
        array(
          'type'          => 'checkbox',
          'param_name' 	  => 'hero_accent_checkbox',
          'description'   => 'Check box to accent color part of the title',
          'value'         => array(
            _('Add accent to title?')   => 'true',
          ),
          'std'           => 'false'
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Accent title'),
          'param_name'    => 'hero_accent_title',
          'description'   => __('Enter a the part of the title to accent'),
          'edit_field_class' 	=> 'vc_col-sm-6',
          'dependency'    => array(
            'element'        => 'hero_accent_checkbox',
            'value'          => 'true'
          ),
        ),
        array(
          'type'              => 'colorpicker',
          'heading'           => __('Accent color'),
          'param_name'        => 'hero_accent_color',
          'description'       => 'Choose a color for accent',
          'edit_field_class' 	=> 'vc_col-sm-6',
          'value'             => '#008155',
          'dependency'        => array(
            'element'        => 'hero_accent_checkbox',
            'value'          => 'true'
          ),
        ),

        // text
        array(
          'type'          => 'textfield',
          'heading'       => __('Text'),
          'param_name'    => 'hero_text',
          'description'   => __('Enter short decription/text'),
        ),
        array(
          'type'              => 'checkbox',
          'param_name' 	      => 'hero_color_checkbox',
          'description'       => 'Check box to customize title color',
          'edit_field_class' 	=> 'vc_col-sm-6',
          'value'             => array(
            _('Customize color?')   => 'true',
          ),
          'std'               => 'false'
        ),
        array(
          'type'              => 'colorpicker',
          'heading'           => __('Text color'),
          'param_name'        => 'hero_color',
          'description'       => 'Choose a color for title',
          'edit_field_class' 	=> 'vc_col-sm-6',
          'value'             => '#212121',
          'dependency'        => array(
            'element'     => 'hero_color_checkbox',
            'value'       => 'true'
          ),
        ),

        // btn
        array(
          'type'          => 'checkbox',
          'param_name' 	  => 'hero_btn_checkbox',
          'description'   => 'Check box if you would like to show a button',
          'value'         => array(
            _('Show Button?')   => 'true',
          ),
          'std'           => 'false'
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Button Text'),
          'param_name'    => 'hero_btn_text',
          'description'   => __('Enter text for button'),
          'value'         => __('Text'),
          'dependency'    => array(
            'element'        => 'hero_btn_checkbox',
            'value'          => 'true'
          ),
        ),
        array(
          'type'          => 'vc_link',
          'heading'       => __('Button link'),
          'param_name'    => 'hero_btn',
          'description'   => __('Add link to button'),
          'dependency'    => array(
            'element'        => 'hero_btn_checkbox',
            'value'          => 'true'
          ),
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