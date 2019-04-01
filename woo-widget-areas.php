<?php
/*
Plugin Name: Woo Widget Areas
Plugin URI: devnecks.com
Description: This plugin adds widget areas to WooCommerce product pages
Author: venqka
Author URI: devnecks.com
Version: 1.0
*/

include( 'woo-sidebars.php' );
include( 'woo-hooks.php' );

function wwa_enqueue() {
	/*frontend styles*/
	wp_enqueue_style( 'wwa-style', plugin_dir_url( __FILE__ ) . 'style.css', array(), '1.0', false );

}
add_action( 'wp_enqueue_scripts', 'wwa_enqueue' );