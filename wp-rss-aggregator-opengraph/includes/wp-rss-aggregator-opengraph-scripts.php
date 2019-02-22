<?php
	if(!defined('ABSPATH')){
		exit;
	}

	// Add Scripts
	function wprssogs_add_scripts(){
		// Add Main CSS
		wp_enqueue_style('wprssogs-main-style',plugins_url(). '/wp-rss-aggregator-opengraph/css/style.css');
		// Add Main JS
		wp_enqueue_script('wprssogs-main-script',plugins_url().'/wp-rss-aggregator-opengraph/js/main.js');	  
	}	  
	add_action('wp_enqueue_scripts','wprssogs_add_scripts');  

	
// END-OF-FILE: PHP OPEN TAG FOR SECURITY