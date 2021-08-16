<?php 
  $cf7 = get_posts('post_type="wpcf7_contact_form"&numberposts=-1');
  $contact_forms = array();
  if($cf7) {
    foreach($cf7 as $cform) {
      $contact_forms[$cform->post_title] = $cform->ID;
    }
  }
  else {
    $contact_forms[__('No contact forms found')] = 0;
  }

  if(shortcode_exists('contact_us')) {
    vc_map(array(
      'name'        => __('Contact Us'),
      'base'        => 'contact_us',
      'as_child'    => array('only' => 'section_wrap'),
      'description' => __('Contact us - contact form'),
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
          'std'           => 'Contact us'
        ),
        // subtitle
        array(
          'type'          => 'textfield',
          'heading'       => __('Subtitle / text (optional)'),
          'param_name'    => 'contact_text',
          'description'   => __('Enter short line for subtitle'),
        ),
        // select form
        array(
          'type'          => 'dropdown',
          'heading'       => __('Contact form'),
          'param_name'    => 'contact_form',
          'description'   => __('Select previously created contact form from the list'),
          'value'         => $contact_forms,
          'admin_label'   => true,
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