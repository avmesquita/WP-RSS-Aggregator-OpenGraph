<?php

/**
 * @package WP RSS Aggregator OpenGraph
 * @version 1.0
 */
/*
Plugin Name: WP RSS Aggregator OpenGraph
Plugin URI: http://www.andremesquita.com/
Description: This is a plugin includes new resources to display feed items.
Version: 1.0.0 - Beta
Author: Andre Mesquita
Author URI: http://www.andremesquita.com/
Text-Domain: wp_rss_aggragator, opengraph
*/

/*
 * WP RSS Aggregator OpenGraph
 */
if(!defined('ABSPATH')){
	exit;
}

//Load Scripts 
require_once(dirname(__FILE__).'/includes/wp-rss-aggregator-opengraph-scripts.php');

// Adiciona as minhas funções 
require_once(dirname(__FILE__).'/app/avm-functions.php');

//require_once(dirname(__FILE__).'/templates/template-news.php');
//require_once(dirname(__FILE__).'/templates/template-news-sidebar.php');
//require_once(dirname(__FILE__).'/templates/template-opengraph.php');
//require_once(dirname(__FILE__).'/templates/template-talkio-webrtc.php');
//require_once(dirname(__FILE__).'/templates/template-whats-my-ip.php');
	
register_activation_hook( __FILE__, 'child_plugin_activate' );
function child_plugin_activate(){
    // Require parent plugin
    if ( ! is_plugin_active( 'wp-rss-aggregator/wp-rss-aggregator.php' ) and current_user_can( 'activate_plugins' ) ) {
        // Stop activation redirect and show error
        wp_die('Sorry, but this plugin requires the WP RSS Aggregator to be installed and active. <br><a href="' . admin_url( 'plugins.php' ) . '">&laquo; Return to Plugins</a>');
    }	
    if ( ! is_plugin_active( 'wp-colorbox/main.php' ) and current_user_can( 'activate_plugins' ) ) {
        // Stop activation redirect and show error
        wp_die('Sorry, but this plugin requires the WP Colorbox to be installed and active. <br><a href="' . admin_url( 'plugins.php' ) . '">&laquo; Return to Plugins</a>');
    }	
}	
	
	
?>