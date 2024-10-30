<?php
/*
Plugin Name: js-chat
Plugin URI: http://saquery.com/javascript-real-time-chat/
Description: Javascript Realtime Chat
Version: 0.2
Author: Stephan Ahlf
Author URI: http://saquery.com
*/


	class js_chat{
		function admin_init() {
			register_setting( 'jschatOptions', 'url' );
		}
		
		function init() {
		}

		function plugin_options(){
			require_once dirname(__FILE__).'/js-chat.options.php';
		}

		
		function wp_print_scripts(){		
		}
		function wp_print_admin_scripts(){				
		}

		function wp_print_styles() {
		}

		function admin_menu(){

			add_menu_page('js-chat', 'js-chat', 'administrator', 'js-chat', array('js_chat','plugin_options'));
/* 			add_submenu_page( 'js-chat', 'Timeline', 'Timeline', 'manage_options', 'js-chat-timeline', array('js_chat','plugin_timeline'));
			add_submenu_page( 'js-chat', 'Settings', 'Options', 'manage_options', 'js-chat-options', array('js_chat','plugin_options'));
 */			add_action( 'admin_init', array('js_chat','admin_init') );
		}	
		
		 
		
		
		function tag() {
			 
			$url = get_option('url','https://js-chat.appspot.com/');
			$content = '<iframe src="'.$url.'" width="100%" height="800" scrolling="auto" border="0" frameborder="0"">';
				$content .= '<p><a href="http://example.org/">'.$url.'</a></p>';
			$content .= '</iframe>';
            return $content;
		}
	}
	add_action('admin_menu', array('js_chat','admin_menu'));
	add_action('wp_print_scripts', array('js_chat', 'wp_print_scripts'), 1);
	add_action('wp_print_styles', array('js_chat', 'wp_print_styles'));
	
	if(isset($_GET['activate']) && $_GET['activate'] == 'true')
	add_action('init', array('js_chat', 'init'));
	
	
	add_shortcode( 'js-chat', array('js_chat', 'tag') );
?>
