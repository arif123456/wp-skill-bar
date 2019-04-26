<?php 

if( !defined ( 'ABSPATH' ) ) exit;

function wpskillbar_wp_save_meta_data($post_id){

    if(isset($_POST['wpskill_save_meta_data_action'])){

        $arrayField = array();
        $oldArrayField = get_post_meta($post_id, 'wpskillbar_save_meta_value', true);

        $progressTitle = $_POST['skill_title'];
        $progressValue = $_POST['skill_value'];
        $count = count($progressTitle);

        for ($i=0; $i < $count; $i++) { 
            if($progressTitle[$i] != ''){
                $arrayField[$i]['skill_title'] = stripslashes($progressTitle[$i]);
                $arrayField[$i]['skill_value'] = stripslashes($progressValue[$i]);
            }
        }
        
        if( !empty($arrayField) && $arrayField != $oldArrayField){
            update_post_meta( $post_id, 'wpskillbar_save_meta_value', $arrayField);
        }elseif( empty($arrayField) && $oldArrayField){
            delete_post_meta($post_id, 'wpskillbar_save_meta_value', $oldArrayField);
        }
        

    }

}
add_action('save_post', 'wpskillbar_wp_save_meta_data');