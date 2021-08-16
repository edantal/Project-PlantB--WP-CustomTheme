<?php
  // customiser
  function theme_new_customizer_settings($wp_customize) {
    // Add Contact Information Section
    $wp_customize->add_section('theme_contact_settings', array(
      'title'       => 'Contact Settings',
      'description' => 'Please fill in the contact information that will appear globally on the site',
      'priority'    => 500
    ));

    $wp_customize->add_setting('theme_wa_number');
    $wp_customize->add_setting('theme_fb_link');
    $wp_customize->add_setting('theme_tw_link');
    $wp_customize->add_setting('theme_li_link');
    $wp_customize->add_setting('theme_ig_link');
    $wp_customize->add_setting('theme_yt_link');

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_wa_number',
      array(
        'label'     => 'Whatsapp Number',
        'section'   => 'theme_contact_settings',
        'type'      => 'text',
        'settings'  => 'theme_wa_number'
      )
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_fb_link',
      array(
        'label'     => 'Facebook Page',
        'section'   => 'theme_contact_settings',
        'type'      => 'text',
        'settings'  => 'theme_fb_link'
      )
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_tw_link',
      array(
        'label'     => 'Twitter Account',
        'section'   => 'theme_contact_settings',
        'type'      => 'text',
        'settings'  => 'theme_tw_link'
      )
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_li_link',
      array(
        'label'     => 'LinkedIn Profile',
        'section'   => 'theme_contact_settings',
        'type'      => 'text',
        'settings'  => 'theme_li_link'
      )
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_ig_link',
      array(
        'label'     => 'Instagram Page',
        'section'   => 'theme_contact_settings',
        'type'      => 'text',
        'settings'  => 'theme_ig_link'
      )
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'theme_yt_link',
      array(
        'label'     => 'YouTube Channel',
        'section'   => 'theme_contact_settings',
        'type'      => 'text',
        'settings'  => 'theme_yt_link'
      )
    ));
  }
  add_action('customize_register', 'theme_new_customizer_settings');
?>