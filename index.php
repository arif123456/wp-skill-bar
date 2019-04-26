<?php

/**
 * Plugin Name: WP Skill Bar
 * Plugin URI:  https://melbweb.com/demo/plugins/the-basics/
 * Description: Easy wp progress bar plugin
 * Version:     1.0
 * Author:      MelbWeb
 * Author URI:  https://melbweb.com/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wpskillbar
 * Domain Path: /languages
 */

 if( ! defined( 'ABSPATH' ) ){
    exit;
 }

require_once ( plugin_dir_path(__FILE__) . '/inc/class-template.php');

require_once ( plugin_dir_path(__FILE__) . '/inc/shortcode.php');

function wpskillbar_init(){

    WPSKILLBAR::getInstance();
    
}
add_action('plugins_loaded','wpskillbar_init');