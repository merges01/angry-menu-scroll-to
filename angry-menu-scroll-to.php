<?php

/**
 * Plugin Name: Angry Menu Scrolling To
 * Plugin URI: http://angryportfolio.com
 * Description: Scroll to a specific item from menu in a single page website
 * Version: 1.0.0
 * Author: Zoltan Merges
 * Author URI: http://angryportfolio.com
 * Developer: Zoltan Merges
 * Developer URI: http://angryportfolio.com
 *
 * Copyright: © 2016 Zoltan Merges.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */
 
 if ( ! defined( 'ABSPATH' ) ) { 
    exit; // Exit if accessed directly
}

class MenuScrollingPlugin {
	public function __construct() {
		add_action('wp_footer', array($this, 'addFooterScripts'));
	}
	
	public function addFooterScripts() {
		echo '<script type="text/javascript" src="' . plugin_dir_url( __FILE__ ) . '/assets/js/scrolling.js"></script>';
	}
}

new MenuScrollingPlugin();