<?php
  // create custom post types
  function theme_post_types() {
    register_post_type('brand', array(
      'supports'          => array('title', 'editor', 'excerpt', 'thumbnail'),
      'rewrite'           => array('slug' => 'brands'),
      'has_archive'       => true,
      'public'            => true,
      'show_in_rest'      => true,
      'labels'            => array(
        'name'          => 'Brands',
        'singular_name' => 'Brand',
        'add_new_item'  => 'Add new Brand',
        'edit_item'     => 'Edit Brand',
        'view_item'     => 'View Brand',
        'update_item'   => 'Update Brand',
        'all_items'     => 'All Brands',
      ),
      'menu_icon'         => 'dashicons-groups',
      'taxonomies'        => array('brand_type'),
    ));

    register_post_type('partner', array(
      'supports'          => array('title', 'editor', 'excerpt', 'thumbnail'),
      'rewrite'           => array('slug' => 'partners'),
      'has_archive'       => true,
      'public'            => true,
      'show_in_rest'      => true,
      'labels'            => array(
        'name'          => 'Partners',
        'singular_name' => 'Partner',
        'add_new_item'  => 'Add new Partner',
        'edit_item'     => 'Edit Partner',
        'view_item'     => 'View Partner',
        'update_item'   => 'Update Partner',
        'all_items'     => 'All Partners',
      ),
      'menu_icon'         => 'dashicons-groups',
      'taxonomies'        => array('partner_type'),
    ));
  }
  add_action('init', 'theme_post_types');
?>