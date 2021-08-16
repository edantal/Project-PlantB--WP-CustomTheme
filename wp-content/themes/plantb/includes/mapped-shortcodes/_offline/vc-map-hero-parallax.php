<?php 
  if(shortcode_exists('hero_parallax')) {
    vc_map(array(
      'name'        => __('Hero Parallax'),
      'base'        => 'hero_parallax',
      'description' => __('Hero Parallax Section'),
      'icon'        => get_template_directory_uri(). '/assets/images/vc_icons/custom_icon.png',
      'category'    => __('Custom'),
      'params'      => array(
        array(
          'type'          => 'attach_image',
          'heading'       => __('Background Image'),
          'param_name'    => 'hero_bg_img',
          'description'   => __('Background image hero section (2000x1200 for best results)'),
          'admin_label'   => true
        ),
        array(
          'type' 			    => 'checkbox',
          'heading' 		  => __('Use Customized Title?'),
          'param_name' 	  => 'hero_title_checkbox',
          'description'   => 'Check this box if you would like to use a custom title instead of page title',
          'value'         => 'false'
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Title'),
          'param_name'    => 'hero_title',
          'description'   => __('Default: Page title. Enter a different title to override default'),
          'dependency'    => array(
            'element'        => 'hero_title_checkbox',
            'value'          => 'true'
          ),
          'admin_label'   => true
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