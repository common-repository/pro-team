<?php 
/*
* Plugin Name: ProTeam
* Plugin URI: http://alborotado.com
* Description: Create complete team members profiles. Add social icons, skills, images, and more in an easy and customizable way.
* Version: 1.01
* Author: Miguras
* Author URI: http://alborotado.com
* License: GPLv2 or later
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/
if ( ! defined( 'ABSPATH' ) ) {
exit; // Exit if accessed directly
}
define("MIGPROTEAMPATH", plugin_dir_url( __FILE__ ));
	
	
		/*======================== FUNCTIONS ==============================*/
		
		if ( file_exists( dirname( __FILE__ ) . '/inc/functions.php' ) ) {
			require_once( dirname( __FILE__ ) . '/inc/functions.php' );
		}
		
		
		
		/*======================== POST TYPE ==============================*/
		
		if ( file_exists( dirname( __FILE__ ) . '/inc/post-type.php' ) ) {
			require_once( dirname( __FILE__ ) . '/inc/post-type.php' );
		}
		
		
		// ========================== REDUX FRAMEWORK =========================================
		if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/admin/redux-framework/framework.php' ) ) {
			require_once( dirname( __FILE__ ) . '/admin/redux-framework/framework.php' );
		}
		if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/admin/proteam-options.php' ) ) {
			require_once( dirname( __FILE__ ) . '/admin/proteam-options.php' );
		}
		
		/*====================== TGM =========================*/
		if ( file_exists( dirname( __FILE__ ) . '/inc/plugins/plugin-activation.php' ) ) {
			require_once( dirname( __FILE__ ) . '/inc/plugins/plugin-activation.php' );
		}
		
			
		/*=========================== METABOXES ===================*/
		if ( file_exists( dirname( __FILE__ ) . '/metaboxes/plugin-metaboxes.php' ) ) {
			require_once( dirname( __FILE__ ) . '/metaboxes/plugin-metaboxes.php' );
		}
		

		
		/*=========================== DYNAMIC CSS ===================*/
		if ( file_exists( dirname( __FILE__ ) . '/assets/css/dynamic-styles.php' ) ) {
			require_once( dirname( __FILE__ ) . '/assets/css/dynamic-styles.php' );
		}
		
		if(!is_admin() && function_exists('wp_register_script')){
					add_action('wp_head', 'migproteam_dynamic_styles');
		};
		
		//===================== STYLES AND SCRIPTS ===========================
		add_action( 'wp_enqueue_scripts', 'mig_proteam_front_styles' );
		function mig_proteam_front_styles(){
			wp_enqueue_script( 'jquery');
			wp_enqueue_style( 'basic-proteam', plugin_dir_url( __FILE__ ) . 'assets/css/basic-styles.css', rand(0, 100));
			wp_enqueue_script( 'front-scripts', plugin_dir_url( __FILE__ ) . 'assets/js/front-scripts.js', rand(0, 100));
			wp_enqueue_style( 'fontawesome', plugin_dir_url( __FILE__ ) . 'assets/css/font-awesome.min.css');
		};
	
	

?>