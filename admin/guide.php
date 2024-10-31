<?php 
 Redux::setSection( $opt_name, array(
        'title'            => __( 'Guide', 'redux-framework-demo' ),
        'desc'             => __( '', 'redux-framework-demo' ),
        'id'               => 'guide-options-fields',
        'subsection'       => false,
        'customizer_width' => '700px',
        'fields'           => array(
            array( 
				'id'       => 'guide',
				'type'     => 'raw',
				'title'    => __('Guide', 'redux-framework-demo'),
				'subtitle' => __('', 'redux-framework-demo'),
				'desc'     => __('', 'redux-framework-demo'),
				'content'  => file_get_contents(dirname(__FILE__) . '/guide.txt')
			),
        )
    ) );
?>