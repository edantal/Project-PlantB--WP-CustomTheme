<?php
  global $inc_dir;
	global $lib_dir;
  global $connection;

	$inc_dir 	= get_template_directory() . '/includes/';
	$lib_dir 	= get_template_directory() . '/libs/';
  $connection = @fsockopen('localhost', '3000');

  require get_template_directory() . '/includes/customizer.php';

  // add theme files
  function theme_files() {
    global $connection;
    // scripts
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', NULL, '3.5.1', true);
    // wp_enqueue_script('googlemaps_js', '//maps.googleapis.com/maps/api/js?key=AIzaSyDMUh8pje59QWPEomq8bdArKmf74yDZni4', NULL, '2.0.1', true);
    
    // styles
    wp_enqueue_style('font_awesome', '//use.fontawesome.com/releases/v5.4.1/css/all.css');
    wp_enqueue_style('lato_font', '//fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap');
    wp_enqueue_style('worksans_font', '//fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap');

		if(strstr($_SERVER['SERVER_NAME'], 'plantb.local') AND is_resource($connection)) {
      wp_enqueue_script('theme_main_js', 'http://localhost:3000/scripts.js', NULL, '1.0', true);
		}
    else {
      wp_enqueue_script('theme_vendors_js', get_theme_file_uri('/bundled-assets/vendors.0fb4444437256e93066f.js'), NULL, '1.0', true);
      wp_enqueue_script('theme_main_js', get_theme_file_uri('/bundled-assets/scripts.c9d57803fe77da11b18f.js'), NULL, '1.0', true);
      wp_enqueue_style('theme_main_css', get_stylesheet_uri('/bundled-assets/styles.c9d57803fe77da11b18f.css'));
    }
  }
  add_action('wp_enqueue_scripts', 'theme_files');

  function admin_files() {
    wp_enqueue_style('admin-styles', get_theme_file_uri('/admin.css'));
  }
  add_action('admin_enqueue_scripts', 'admin_files');


  // theme features
  function theme_features() {
    add_image_size('post-img', 540, 270, true);
    add_image_size('gallery-img', 560, 560, true);
    add_image_size('slider-img', 1200, 560, true);

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ));
    add_theme_support('post-formats', array(
      'gallery',
      'video',
      'audio',
      'quote'
    ));

    register_nav_menus(array(
      'mainMenu_loc'        => 'Main Menu Location',
      'footerMenu1_loc'     => 'Footer Menu Location 1',
      'footerMenu2_loc'     => 'Footer Menu Location 2',
    ));
  }
  add_action('after_setup_theme', 'theme_features');

  // global variables
  function initialize_Global_variables() {
		global $gtm_container_id, $contact_wa, $contact_fb, $contact_tw, $contact_li, $contact_ig, $contact_yt;
		
    $gtm_container_id = 'GTM-';
    $contact_wa = '972' . substr(get_theme_mod('theme_wa_number'), 1);
    $contact_fb = 'https://www.facebook.com/' . get_theme_mod('theme_fb_link');
    $contact_tw = 'https://www.twitter.com/' . get_theme_mod('theme_tw_link');
    $contact_li = 'https://www.linkedin.com/in/' . get_theme_mod('theme_li_link');
    $contact_ig = 'https://www.instagram.com/' . get_theme_mod('theme_ig_link');
    $contact_yt = 'https://www.youtube.com/channel/' . get_theme_mod('theme_yt_link');
	}
  add_action('after_setup_theme', 'initialize_Global_variables');
  
  // echo gtm 
	function get_gtm_head_snippet() {
    global $gtm_container_id;
    
    $snippet = "<!-- Google Tag Manager -->
                <script>
                  (function(w,d,s,l,i){
                    w[l]=w[l]||[];
                    w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
                    var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
                    j.async=true;
                    j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
                    f.parentNode.insertBefore(j,f);
                  })(window,document,'script','dataLayer','".$gtm_container_id."');
                  window.dataLayer = window.dataLayer || [];
                </script>
								<!-- End Google Tag Manager -->";
		echo $snippet;
	}

	function get_gtm_body_snippet() {
		global $gtm_container_id;

    $snippet = "<!-- Google Tag Manager (noscript) -->
                <noscript>
                  <iframe src=\"https://www.googletagmanager.com/ns.html?id=".$gtm_container_id." height=\"0\" width=\"0\" style=\"display:none;visibility:hidden;\"></iframe>
                </noscript>
								<!-- End Google Tag Manager (noscript) -->";
		echo $snippet;
  }
  

  /* ==== PLUGIN FUNCTIONS ====================================================== */

  // Google Maps for ACF
  function theme_google_map_api($api){
    $api['key'] = '';
    return $api;
  }
  add_filter('acf/fields/google_map/api', 'theme_google_map_api');

  // Load visual composer custom file.
	function theme_custom_vc() {
		global $inc_dir;
		require $inc_dir. '/custom-extend-vc.php';
	}
	if(class_exists('Vc_Manager')) {
		add_action('init', 'theme_custom_vc', 99);
  }


  /* ==== UTIL FUNCTIONS ======================================================== */

  // count posts per category
  function count_cat_post($catslug) {
    $category_terms = get_term_by('slug', $catslug, 'category');
    if(!$category_terms){
      return 0;
    }
    return $category_terms->count;
  }
  
  // shorten string
  function shorten_string($string, $wordsreturned) {
    $retval = $string;
    $string = preg_replace('/(?<=\S,)(?=\S)/', ' ', $string);
    $string = str_replace("\n", " ", $string);
    $array = explode(" ", $string);
    if (count($array)<=$wordsreturned) {
      $retval = $string;
    }
    else {
      array_splice($array, $wordsreturned);
      $retval = implode(" ", $array)." ...";
    }
    return $retval;
  }

  // remove extra auto-generated <p> tags
  remove_filter('the_content', 'wpautop');
  remove_filter('acf_the_content', 'wpautop');
  add_filter('wpcf7_autop_or_not', '__return_false');

  // add svg upload support
  function theme_mime_types($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
  add_filter('upload_mimes', 'theme_mime_types');
  
  // prevent admin bar extra margin
  function theme_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }
  add_action('get_header', 'theme_filter_head');

  // custom admin favicon
  function favicon4admin() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . get_theme_file_uri('/assets/images/favicons/favicon_dark.ico') . '">';
  }
  add_action('admin_head', 'favicon4admin');

  
  /* ==== CUSTOM SHORTCODES ======================================================== */

  // get title shortcode
  function post_title_shortcode(){
    return get_the_title();
  }
  add_shortcode('post_title','post_title_shortcode');

  // header shortcode
	function header_cb($atts){
    extract(shortcode_atts(array(
      'title'     => '',
      'text'      => '',
      'add_btn'   => '',
      'btn_text'  => '',
      'btn_link'  => '',
    ), $atts));

    $html = '';
    ob_start();
    ?>

      <div class="hero-text">
        <?php
          echo ($title !== '') ? '<h1>'.$title.'</h1>' : '';
          echo ($text !== '') ? '<p>'.$text.'</p>' : '';
          
          if($add_btn) {
            $url = esc_url($btn_link);
            if(strpos($url, '#') === 0) $target = '';
            else if(strpos($url, 'plantb.local') !== false || strpos($url, 'plantbimports.com') !== false) $target = 'target="_self"';
            else $target = 'target="_blank"';
            echo '<a class="btn btn__full" href="' .$url. '" ' .$target. '>' .$btn_text. '</a>';
          }
        ?>
      </div>

    <?php
    $o = ob_get_contents();
		$html .= $o;
		ob_get_clean();
		return $html;
  }
  add_shortcode('header_shortcode', 'header_cb');
?>