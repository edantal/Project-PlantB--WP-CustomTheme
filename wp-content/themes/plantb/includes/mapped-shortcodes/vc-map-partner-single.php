<?php 
  if(shortcode_exists('partner_single')) {
    vc_map(array(
      'name'        => __('Partner Single'),
      'base'        => 'partner_single',
      'description' => __('Partner single for inner partner page'),
      'icon'        => get_template_directory_uri(). '/assets/images/vc_icons/custom_icon.png',
      'category'    => __('Theme'),
      'params'      => array(

        // general
        array(
          'type'          => 'textfield',
          'heading'       => __('Title'),
          'param_name'    => 'partner_title',
          'description'   => __('Enter a title'),
          'admin_label'   => true,
        ),
        array(
          'type'          => 'textarea_html',
          'heading'       => __('Text'),
          'param_name'    => 'content',
          'description'   => __('Enter short decription/text'),
        ),
        array(
          'type'          => 'vc_link',
          'heading'       => __('External Link'),
          'param_name'    => 'partner_exlink',
          'description'   => __('Partner link (optional)'),
        ),

        // social
        array(
          'type'          => 'textfield',
          'heading'       => __('Social: Facebook'),
          'param_name'    => 'partner_fb',
          'description'   => __('Facebook page link (optional)'),
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Social: Twitter'),
          'param_name'    => 'partner_tw',
          'description'   => __('Twitter account link (optional)'),
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Social: Instagram'),
          'param_name'    => 'partner_ig',
          'description'   => __('Instagram page link (optional)'),
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Social: Youtube'),
          'param_name'    => 'partner_yt',
          'description'   => __('Youtube channel link (optional)'),
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Social: Pinterest'),
          'param_name'    => 'partner_pt',
          'description'   => __('Pinterest boards link (optional)'),
        ),
        array(
          'type'          => 'textfield',
          'heading'       => __('Social: Linkedin'),
          'param_name'    => 'partner_in',
          'description'   => __('Linkedin page link (optional)'),
        ),

        // logo
        array(
          'type'          => 'attach_image',
          'holder'        => 'img',
          'class'         => 'wpb-vc-img-block',
          'heading'       => __('Logo'),
          'param_name'    => 'partner_img',
          'description'   => __('Partner logo image'),
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