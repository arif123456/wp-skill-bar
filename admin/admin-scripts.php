<?php
/** 
 * 
 * admin enqueue scripts
 * 
*/

add_action('admin_enqueue_scripts','wpskillbar_admin_scripts');

function wpskillbar_admin_scripts(){

    wp_enqueue_style('progress-style', plugin_dir_url(__FILE__). '/css/admin-style.css' );

    wp_enqueue_style('progress-fontawesome-style', plugin_dir_url(__FILE__). '/css/font-awesome.css' );

    wp_enqueue_script('progress-script', plugin_dir_url(__FILE__). '/js/admin-script.js');

}
