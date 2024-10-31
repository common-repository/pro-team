<?php

add_action( 'cmb2_admin_init', 'migthemes_proteam_register_metaboxes' );

function migthemes_proteam_register_metaboxes() {
	$proteamprefix = 'proteamprefix_';
	global $mig_proteam;



/*================================== Pro Team Metabox ===============================================*/

	$proteam_metabox = new_cmb2_box( array(
		'id'            => $proteamprefix . 'proteam_options',
		'title'         => __( 'Member Options', 'cmb2' ),
		'object_types'  => array( 'pro_team_posts' ), // Post type
		'context'    => 'normal',
		'priority'   => 'low',
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'side',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );

	$proteam_metabox->add_field( array(
		'name'       => __( 'Position', 'cmb2' ),
		'desc'       => __( 'Job Position', 'cmb2' ),
		'id'         => $proteamprefix . 'position',
		'type'       => 'text',
	) );
	
	$proteam_metabox->add_field( array(
		'name'       => __( 'Short Description', 'cmb2' ),
		'desc'       => __( 'This info it will be displayed under team page', 'cmb2' ),
		'id'         => $proteamprefix . 'short_description',
		'type'       => 'textarea_small',
	) );
	
	$proteam_metabox->add_field( array(
		'name'       => __( 'Additional Images', 'cmb2' ),
		'desc'       => __( '', 'cmb2' ),
		'id'         => $proteamprefix . 'additional_images',
		'type'       => 'file_list',
	) );
	


/*================================== Pro Team Design Metabox ===============================================*/

	$proteam_design_metabox = new_cmb2_box( array(
		'id'            => $proteamprefix . 'proteam_design_options',
		'title'         => __( 'Design Options', 'cmb2' ),
		'object_types'  => array( 'pro_team_posts' ), // Post type
		'context'    => 'side',
		'priority'   => 'low',
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'side',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );
	$proteam_design_metabox->add_field( array(
		'name'       => __( 'Style', 'cmb2' ),
		'desc'       => __( '', 'cmb2' ),
		'id'         => $proteamprefix . 'member_style',
		'type'       => 'select',
		'options'	 => array(
			'style_one' => 'Style One',
			'style_two' => 'Style Two',
			'style_three' => 'Style Three',
		)
	) );

	$proteam_design_metabox->add_field( array(
		'name'       => __( 'Background Color', 'cmb2' ),
		'desc'       => __( '', 'cmb2' ),
		'id'         => $proteamprefix . 'member_background',
		'type'       => 'colorpicker',
	) );
	$proteam_design_metabox->add_field( array(
		'name'       => __( 'Name Color', 'cmb2' ),
		'desc'       => __( '', 'cmb2' ),
		'id'         => $proteamprefix . 'member_name_color',
		'type'       => 'colorpicker',
		'default'	 => $mig_proteam['member-name-color'],
	) );
	$proteam_design_metabox->add_field( array(
		'name'       => __( 'Position Color', 'cmb2' ),
		'desc'       => __( '', 'cmb2' ),
		'id'         => $proteamprefix . 'member_position_color',
		'type'       => 'colorpicker',
		'default'	 => $mig_proteam['member-position-color'],
	) );
	$proteam_design_metabox->add_field( array(
		'name'       => __( 'Short Desc Color', 'cmb2' ),
		'desc'       => __( '', 'cmb2' ),
		'id'         => $proteamprefix . 'member_description_color',
		'type'       => 'colorpicker',
		'default'	 => $mig_proteam['member-short-description-color'],
	) );
	$proteam_design_metabox->add_field( array(
		'name'       => __( 'Main Color One', 'cmb2' ),
		'desc'       => __( 'Applies only in certain styles', 'cmb2' ),
		'id'         => $proteamprefix . 'member_main_one',
		'type'       => 'colorpicker',
		'default'	 => $mig_proteam['member-color-main-one'],
	) );
	$proteam_design_metabox->add_field( array(
		'name'       => __( 'Main Color Two', 'cmb2' ),
		'desc'       => __( 'Applies only in certain styles', 'cmb2' ),
		'id'         => $proteamprefix . 'member_main_two',
		'type'       => 'colorpicker',
		'default'	 => $mig_proteam['member-color-main-two'],
	) );
	
	$proteam_design_metabox->add_field( array(
		'name'       => __( 'Image Effect', 'cmb2' ),
		'desc'       => __( '', 'cmb2' ),
		'id'         => $proteamprefix . 'member_image_effect',
		'type'       => 'select',
		'options'	 => array(
			'none' => 'None',
			'scale' => 'Scale',
		),
		'default' => $mig_proteam['member_image_effect'],
	) );
	
	$proteam_design_metabox->add_field( array(
		'name'       => __( 'Custom Class', 'cmb2' ),
		'desc'       => __( 'Customize with CSS this member', 'cmb2' ),
		'id'         => $proteamprefix . 'member_custom_css',
		'type'       => 'text',
	) );
	
	
	
/*================================== Pro Team Features Metabox ===============================================*/

	$proteam_features_metabox = new_cmb2_box( array(
		'id'            => $proteamprefix . 'proteam_features_options',
		'title'         => __( 'Features', 'cmb2' ),
		'object_types'  => array( 'pro_team_posts' ), // Post type
		'context'    => 'normal',
		'priority'   => 'low',
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'side',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );

	$features_group = $proteam_features_metabox->add_field( array(
		'id'          => $proteamprefix . 'proteam_features',
		'type'        => 'group',
		'description' => __( '', 'cmb' ),
		'options'     => array(
			'group_title'   => __( 'Feature', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add Another feature', 'cmb' ),
			'remove_button' => __( 'Remove feature', 'cmb' ),
			'sortable'      => true, // beta
		),
	) );
	$proteam_features_metabox->add_group_field( $features_group, array(
		'name' => 'Feature Name',
		'description' => '',
		'id'   => 'feature_name',
		'type' => 'text',
	) );
	$proteam_features_metabox->add_group_field( $features_group, array(
		'name' => 'Feature description',
		'description' => '',
		'id'   => 'feature_description',
		'type' => 'text',
	) );
	$proteam_features_metabox->add_group_field( $features_group, array(
		'name' => 'Feature Background',
		'description' => '',
		'id'   => 'feature_background',
		'type' => 'colorpicker',
	) );
	$proteam_features_metabox->add_group_field( $features_group, array(
		'name' => 'Feature Color',
		'description' => '',
		'id'   => 'feature_color',
		'type' => 'colorpicker',
	) );

/*================================== Pro Team Social Metabox ===============================================*/

	$proteam_social_metabox = new_cmb2_box( array(
		'id'            => $proteamprefix . 'proteam_social_options',
		'title'         => __( 'Social Options', 'cmb2' ),
		'object_types'  => array( 'pro_team_posts' ), // Post type
		'context'    => 'normal',
		'priority'   => 'low',
		// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
		// 'context'    => 'side',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
	) );

	$social_group = $proteam_social_metabox->add_field( array(
		'id'          => $proteamprefix . 'proteam_social_icons',
		'type'        => 'group',
		'description' => __( '', 'cmb' ),
		'options'     => array(
			'group_title'   => __( 'Social', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add Another network', 'cmb' ),
			'remove_button' => __( 'Remove network', 'cmb' ),
			'sortable'      => true, // beta
		),
	) );
	
	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
	$proteam_social_metabox->add_group_field( $social_group, array(
		'name' => 'Network',
		'description' => 'Select the proper social icon',
		'id'   => 'social_type',
		'type' => 'select',
		'options'     => array(
			'amazon' => 'Amazon',
			'behance' => 'Behance',
			'digg' => 'Digg',
			'dribbble' => 'Dribbble',
			'dropbox' => 'Dropbox',
			'envelope' => 'Email',
			'facebook' => 'Facebook',
			'flickr' => 'Flickr',
			'github' => 'Github',
			'google' => 'Google',
			'google-plus' => 'Google plus',
			'google-wall' => 'Google Wall',
			'instagram' => 'Instagram',
			'lastfm' => 'LastFm',
			'linkedin' => 'Linkedin',
			'paypal' => 'Paypal',
			'pinterest' => 'Pinterest',
			'sellsy' => 'Sellsy',
			'skype' => 'Skype',
			'soundcloud' => 'Soundcloud',
			'steam' => 'Steam',
			'twitter' => 'Twitter',
			'tumblr' => 'Tumblr',
			'vimeo' => 'Vimeo',
			'weibo' => 'Weibo',
			'whatsapp' => 'Whatsapp',
			'wordpress' => 'Wordpress',
			'yahoo' => 'Yahoo',
			'youtube' => 'Youtube',
			'youtube-play' => 'Youtube Play',
		),
	) );
	
	$proteam_social_metabox->add_group_field( $social_group, array(
		'name' => 'Link',
		'description' => 'Paste the url here',
		'id'   => 'social_link',
		'type' => 'text',
	) );
	
	$proteam_social_metabox->add_group_field( $social_group, array(
		'name' => 'Icon Backogrund Color',
		'description' => 'Default Color was defined in admin panel',
		'id'   => 'background_social_link',
		'type' => 'colorpicker',
		'default' => $mig_proteam['member-icon-background-color'],
	) );
	$proteam_social_metabox->add_group_field( $social_group, array(
		'name' => 'Icon  Color',
		'description' => 'Default Color was defined in admin panel',
		'id'   => 'color_social_link',
		'type' => 'colorpicker',
		'default' => $mig_proteam['member-icon-color'],
	) );






}