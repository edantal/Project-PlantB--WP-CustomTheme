<?php 
  if(shortcode_exists('articles')) {
    vc_map(array(
      'name'        => __('Theme Articles'),
      'base'        => 'articles',
      'description' => __('Display articles'),
      'icon'        => get_template_directory_uri(). '/assets/images/vc_icons/custom_icon.png',
      'category'    => __('Custom'),
      'params'      => array(

        // Display Type
        array(
          'type'					    => 'dropdown',
          'heading' 			    => __('Display Type'),
          'param_name' 		    => 'display_type',
          'description'		    => __('Select display for articles'),
          'value'					    => array(
            __('Recent posts')    => 'recent',
            __('Blog posts')      => 'blog',
          ),
          'admin_label'       => true,
        ),

        // Recent: Number of posts
        array(
          'type'              => 'dropdown',
          'heading'           => __('Number of posts to display'),
          'param_name'        => 'recent_posts_num',
          'description'				=> __('Select how many posts to display'),
          'value'					    => array(
            __('4 Posts')         => '4',
            __('6 Posts')         => '6',
          ),
          'dependency' 				=> array(
            'element'		          => 'display_type',
            'value'			          => array('recent')
          ),
          'std'               => '4',
        ),

        // Blog: Number of posts
        array(
          'type'              => 'dropdown',
          'heading'           => __('Number of posts to display'),
          'param_name'        => 'blog_posts_num',
          'description'				=> __('Select how many posts to display for each page of the blog'),
          'value'					    => array(
            __('5 Posts')         => '5',
            __('6 Posts')         => '6',
            __('8 Posts')         => '8',
          ),
          'dependency' 				=> array(
            'element'		          => 'display_type',
            'value'			          => array('blog')
          ),
          'std'               => '8',
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