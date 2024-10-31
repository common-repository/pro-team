<?php 
// Create Custom Post Type for ProTeam
	
	function mig_register_pro_team_post_type() {
		$labels = array(
			'name' 				=> _x( 'Pro Team', 'post type general name' ),
			'singular_name'		=> _x( 'Pro Team', 'post type singular name' ),
			'add_new' 			=> __( 'Add New' ),
			'add_new_item' 		=> __( 'Add New' ),
			'edit_item' 		=> __( 'Edit' ),
			'new_item' 			=> __( 'New' ),
			'view_item' 		=> __( 'View' ),
			'search_items' 		=> __( 'Search' ),
			'not_found' 		=> __( 'Not found' ),
			'not_found_in_trash'=> __( 'Not found in trash' ),
			'parent_item_colon' => __( 'Pro Team' ),
			'menu_name'			=> __( 'Pro Team' ),
			
		);
		
		$taxonomies = array('');
		
		$supports = array('title','editor', 'thumbnail');
		
		$post_type_args = array(
			'labels' 			=> $labels,
			'singular_label' 	=> __('Pro Team'),
			'public' 			=> true,
			'show_ui' 			=> true,
			'publicly_queryable'=> true,
			'query_var'			=> true,
			'capability_type' 	=> 'post',
			'has_archive' 		=> false,
			'hierarchical' 		=> false,
			'rewrite' 			=> false,
			'supports' 			=> $supports,
			'menu_position' 	=> 118, 
			'menu_icon' 		=> 'dashicons-id-alt',
			'taxonomies'		=> $taxonomies
		 );
		 register_post_type('pro_team_posts',$post_type_args);
	}
	add_action('init', 'mig_register_pro_team_post_type');
	
/*=========================== Taxonomies ================================= */
add_action('init', 'ultimate_pro_team_custom_taxonomies');

function ultimate_pro_team_custom_taxonomies() {
	register_taxonomy(

		'ultimate_pro_team_categories', 
		'pro_team_posts', 
		array('hierarchical' => true, 'label' => 'Pro Team Categories', 'query_var' => true, 'rewrite' => true)
	);

}