<?php
/**
 * Plugin Name: Custom Shortcodes
 * Description: Shortcodes for Custom theme - shortcodes used in visual composer.
 * Version: 1.0.0
 * Author: edanTal
 */

class Custom_Shortcodes {
	public $text_domain;
	public $shortcodes;
	
	function __construct() {
		$this->text_domain = 'plantb';
		$this->shortcodes = array();

		$this->include_shortcodes_files();
		$this->add_shortcode();
	}

	public function include_shortcodes_files() {
		include_once('includes/section.php');
		include_once('includes/hero-single.php');
		include_once('includes/tagline.php');
		include_once('includes/contact-us.php');
		include_once('includes/contact-info.php');
		include_once('includes/partner-single.php');
	}

	public function create_shortcode($shortcode_name, $shortcode_fun) {
		$this->shortcodes[] = array(
			'name'      => $shortcode_name,
			'callback' 	=> $shortcode_fun
		);
	}

	private function add_shortcode() {
		foreach ($this->shortcodes as $shortcode) {
			add_shortcode($shortcode['name'], $shortcode['callback']);
		}
	}
}

new Custom_Shortcodes();