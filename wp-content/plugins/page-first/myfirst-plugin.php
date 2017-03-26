<?php
/*
 Plugin Name: My Page First
 Plugin URI: http://www.start-nay.blogspot.com
 Description: A first plugins to test
 Author : Nay
 Version: 1.0
 Author URI: https://www.start-nay.blogspot.com 
 */



class options_page {

	function __construct() {
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}

	function admin_menu() {
		add_options_page(
			'Page Title',
			'Circle Tree Login',
			'manage_options',
			'options_page_slug',
			array(
				$this,
				'settings_page'
			)
		);
	}

	function  settings_page() {
		echo 'This is the page content';
	}
}

new options_page();
?> 