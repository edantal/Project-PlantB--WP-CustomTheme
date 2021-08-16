<?php 
  if(shortcode_exists('header_single')) {
    vc_map(array(
      'name'        => __('Header Single'),
      'base'        => 'header_single',
      'description' => __('Header single image with title, description and cta'),
      'icon'        => get_template_directory_uri(). '/assets/images/vc_icons/custom_icon.png',
      'category'    => __('Theme'),
      'params'      => array(
        // image
        array(
          'type'          => 'attach_image',
          'holder'        => 'img',
          'class'         => 'wpb-vc-img-block',
          'heading'       => __('Image'),
          'param_name'    => 'header_img',
          'description'   => __('Header Image'),
        ),
        // title
        array(
          'type'          => 'textfield',
          'heading'       => __('Title'),
          'param_name'    => 'header_title',
          'description'   => __('Enter a title for header image'),
          'admin_label'   => true,
        ),
        // text
        array(
          'type'          => 'textfield',
          'heading'       => __('Text'),
          'param_name'    => 'header_text',
          'description'   => __('Enter short decription/text'),
        ),
        // btn
        array(
          'type'          => 'checkbox',
          'param_name' 	  => 'header_btn_checkbox',
          'description'   => 'Check this box if you would like to show a button',
          'value'         => array(
            _('Show Button?')   => 'true',
          ),
          'std'           => 'true'
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Button Text'),
          'param_name'    => 'header_btn_text',
          'description'   => __('Enter text for button'),
          'value'         => __('Text'),
          'dependency'    => array(
            'element'        => 'header_btn_checkbox',
            'value'          => 'true'
          ),
        ),
        array(
          'type'          => 'vc_link',
          'heading'       => __('Button link'),
          'param_name'    => 'header_btn',
          'description'   => __('Add link to button'),
          'dependency'    => array(
            'element'        => 'header_btn_checkbox',
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