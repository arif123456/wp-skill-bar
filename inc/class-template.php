<?php 



if (! class_exists( 'WPSKILLBAR' ) ) {
    
    class WPSKILLBAR{

        /**
         * instance
         *  
         */ 
        private static $instance = null;
    
        /**
         * get instance
         * 
        */
    
        public static function getInstance(){
            if(is_null(self::$instance)){
                self::$instance = new self();
            }
            return self::$instance;
        }
    
        /**
         * constructor
        */
        public function __construct(){

            $this->init();

        }

        /**
         * Initialize
         * 
        */
        public function init(){

            if(is_admin()){

                require_once ( plugin_dir_path(__FILE__) . '../admin/skill-post-type.php');
                require_once ( plugin_dir_path(__FILE__) . '../admin/skill-metabox.php');
                require_once ( plugin_dir_path(__FILE__) . '../admin/admin-scripts.php');
                require_once ( plugin_dir_path(__FILE__) . '../admin/settings.php');
                
            }

            add_action( 'wp_enqueue_scripts', array($this,'wpskillbar_front_end_scripts') );

            register_activation_hook(__FILE__, 'install');
    
            register_deactivation_hook(__FILE__, 'deactivate');

        }


        /**
         * Enqueue scripts and styles.
         */
        public function wpskillbar_front_end_scripts() {

            /**
             *Add Style 
            
            */
            wp_enqueue_style('wpeb-style-css', plugin_dir_url(__FILE__).  'css/wpskill.css');

            /**
             *Add Scripts 
            
            */

            wp_enqueue_script('wpeb-jquery-min-js', plugin_dir_url(__FILE__).  'js/jquery-3.3.1.min.js');

            wp_enqueue_script('wpeb-jquery-inview-js', plugin_dir_url(__FILE__).  'js/jquery.inview.js');

            wp_enqueue_script('wpeb-jquery-js', plugin_dir_url(__FILE__).  'js/wpskill.js');

        }
    
    }  

}



