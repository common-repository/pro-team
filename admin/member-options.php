<?php 

	 Redux::setSection( $opt_name, array(
        'title'            => __( 'Member List', 'migwoo_enhancer' ),
        'id'               => 'member-page',
        'desc'             => __( '', 'redux-framework-demo' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-shopping-cart'
    ) );
	
	
	Redux::setSection( $opt_name, array(
        'title'      => __( 'Design', 'redux-framework-demo' ),
        'id'         => 'product-page-colors-and-text',
        'desc'       => __( '', 'redux-framework-demo' ),
        'subsection' => true,
        'fields'     => array(
			/*================= Defaults ===========================*/
			array(
                'id'       => 'member-defaults',
                'type'     => 'section',
                'title'    => __( 'Member Default Settings', 'redux-framework-demo' ),
                'subtitle' => __( 'This options are used to set design options and also will be used as defaults under member page options', 'redux-framework-demo' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
			array(
			'id'            => 'member-name-size',
			'type'          => 'slider',
			'title'         => __( 'Name size (pixels)', 'redux-framework-demo' ),
			'subtitle'      => __( '', 'redux-framework-demo' ),
			'desc'          => __( '', 'redux-framework-demo' ),
			'default'       => 20,
			'min'           => 0,
			'step'          => 1,
			'max'           => 300,
			'display_value' => 'text'
			),
			array(
				'id'       => 'member-name-color',
				'type'     => 'color',
				'title'    => __( 'Name Color', 'redux-framework-demo' ),
				'subtitle' => __( '', 'redux-framework-demo' ),
				'default'  => '',
			),
			array(
			'id'            => 'member-position-size',
			'type'          => 'slider',
			'title'         => __( 'Position size (pixels)', 'redux-framework-demo' ),
			'subtitle'      => __( '', 'redux-framework-demo' ),
			'desc'          => __( '', 'redux-framework-demo' ),
			'default'       => 16,
			'min'           => 0,
			'step'          => 1,
			'max'           => 300,
			'display_value' => 'text'
			),
			array(
				'id'       => 'member-position-color',
				'type'     => 'color',
				'title'    => __( 'Position Color', 'redux-framework-demo' ),
				'subtitle' => __( '', 'redux-framework-demo' ),
				'default'  => '',
			),
			array(
			'id'            => 'member-short-description-size',
			'type'          => 'slider',
			'title'         => __( 'Short Description size (pixels)', 'redux-framework-demo' ),
			'subtitle'      => __( '', 'redux-framework-demo' ),
			'desc'          => __( '', 'redux-framework-demo' ),
			'default'       => 13,
			'min'           => 0,
			'step'          => 1,
			'max'           => 300,
			'display_value' => 'text'
			),
			array(
				'id'       => 'member-short-description-color',
				'type'     => 'color',
				'title'    => __( 'Short Description Color', 'redux-framework-demo' ),
				'subtitle' => __( '', 'redux-framework-demo' ),
				'default'  => '',
			),
			array(
				'id'       => 'member-icon-background-color',
				'type'     => 'color',
				'title'    => __( 'Icon Background Color', 'redux-framework-demo' ),
				'subtitle' => __( '', 'redux-framework-demo' ),
				'default'  => '#222222',
			),
			array(
				'id'       => 'member-icon-color',
				'type'     => 'color',
				'title'    => __( 'Icon Color', 'redux-framework-demo' ),
				'subtitle' => __( '', 'redux-framework-demo' ),
				'default'  => '#ffffff',
			),
			array(
				'id'       => 'member-color-main-one',
				'type'     => 'color',
				'title'    => __( 'Main Color One', 'redux-framework-demo' ),
				'subtitle' => __( 'Applies only in certain styles', 'redux-framework-demo' ),
				'default'  => '#03c3b2',
			),
			array(
				'id'       => 'member-color-main-two',
				'type'     => 'color',
				'title'    => __( 'Main Color Two', 'redux-framework-demo' ),
				'subtitle' => __( 'Applies only in certain styles', 'redux-framework-demo' ),
				'default'  => '#000000',
			),
			array(
				'id'       => 'member_image_effect',
				'type'     => 'select',
				'title'    => __( 'Image Effect', 'redux-framework-demo' ),
				'subtitle' => __( '', 'redux-framework-demo' ),
				'default'  => 'none',
				'options'  => array(
					'none' => 'None',
					'scale' => 'Scale',
				),
			),
			
		 )

    ) );
	
?>