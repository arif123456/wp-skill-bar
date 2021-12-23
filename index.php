<?php

/**
 * Plugin Name: WP Skill Bar
 * Plugin URI:   https://github.com/arif123456/wp-skill-bar
 * Description: Easy wp progress bar plugin
 * Version:     1.0.0
 * Author:      WPFound
 * Author URI    https://github.com/arif123456
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wpskillbar
 */

 if( ! defined( 'ABSPATH' ) ){
    exit;
 }

require_once ( plugin_dir_path(__FILE__) . '/inc/class-template.php');

require_once ( plugin_dir_path(__FILE__) . '/inc/shortcode.php');

function wpskillbar_init(){

    WP_Skill_Bar::getInstance();
    
}
add_action('plugins_loaded','wpskillbar_init');