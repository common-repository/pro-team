<?php 

function migproteam_admin_styles(){
	global $mig_proteam;
	
	wp_enqueue_style( 'proteam-admin-styles', MIGPROTEAMPATH .'assets/css/admin-styles.css');
	wp_enqueue_script( 'proteam-admin-scripts', MIGPROTEAMPATH .'assets/js/admin-scripts.js');
	wp_enqueue_style( 'wp-color-picker');
	wp_enqueue_script( 'wp-color-picker');
}

add_action('admin_enqueue_scripts', 'migproteam_admin_styles');

?>
