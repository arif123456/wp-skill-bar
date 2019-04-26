<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

/** 
 * 
 * add action progress bar post type
 * 
*/

add_action('init','wpskillbar_post_type');

/** 
 * 
 * register post type progress bar function
 * 
*/
function wpskillbar_post_type(){

    $labels  = array( 
        'name'                  => _x('WP Skill Bar','wpepbar'),
        'singular_name'         =>  _x('WP Skill Bar','wpepbar'),
        'menu_name'             =>  __('WP Skill Bar','wpepbar'),
        'parent_item_colon'   => __( 'Parent Item:', 'wpepbar' ),
        'add_new_item'          =>  __('Add New','wpepbar'),
        'add_new'               =>  __('Add New','wpepbar'),
        'all_items'             =>  __('All Skill Bar','wpepbar'),
        'view_item'             =>  __('View Skill Bar','wpepbar'),
        'edit_item'             =>  __('Edit Skill Bar','wpepbar'),
        'update_item'           =>  __('Update Skill Bar','wpepbar'),
        'search_item'           =>  __('Search Skill Bar','wpepbar'),
        'not_found'             =>  __('No Skill Bar Found','wpepbar'),
        'not_found_in_trash'    =>  __('Not Skill Bar found in trash','wpepbar'),
    );

    $args = array(

        'label'               => __( 'WP Skill Bar Panels', 'wpepbar' ),
        'description'         => __( 'WP Skill Bar Panels', 'wpepbar' ),
        'labels'              => $labels,
        'supports'            => array( 'title', '', '', '', '', '', '', '', '', '', '', ),
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => false,
        'show_in_admin_bar'   => false,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-admin-tools',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => false,
        'capability_type'     => 'page',

    );

    register_post_type('skillbar',$args);
    

}