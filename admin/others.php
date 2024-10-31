<?php 
$advcontent = '
	<div class="alborotado-advertiser clearfix">
	<h2 class="alborotado-title">Sportif Theme</h2>
	<a target="_blank" href="http://alborotado.com/themes/sportif">
		<img class="alborotado-image" src="'.plugins_url( 'images/responsive-sportif2.jpg', __FILE__ ).'">
	</a>
	<p class="alborotado-description">
	Sportif is a Wordpress Theme suitable for gym/sports sites. It has a unique vanguardist design.
	
	All templates are easily customizable, because almost everything on this theme was made with Divi, the fantastic page builder made by elegantthemes. 
	
	Want to know best? You can choose the price! Yeah, pay your price for this fantastic theme.
	<p>
	<div class="alborotado-buttons-container">
		<a target="_blank" class="alborotado-button" href="http://alborotado.com/themes/sportif">Theme Demo</a>
		<a target="_blank" class="alborotado-button" href="http://alborotado.com/producto/sportif-tema-wordpress-orientado-a-deportes/">Theme Details</a>
	</div>





	<h2 class="alborotado-title">WooEnhancer Pro</h2>
	<a target="_blank" href="http://alborotado.com/producto/wooenhancer-pro/">
		<img class="alborotado-image" src="'.plugins_url( 'images/wooenhancer-pro.jpg', __FILE__ ).'">
	</a>
	<p class="alborotado-description">
	WooEnhancer Pro activates all the required functions listed as “PRO” under WooEnhancer Plugin.
	<p>
	<div class="alborotado-buttons-container">
		<a target="_blank" class="alborotado-button" href="http://alborotado.com/plugindemo/woocommerce_enhancer/shop/">Plugin Demo</a>
		<a target="_blank" class="alborotado-button" href="http://alborotado.com/producto/wooenhancer-pro/">Plugin Details</a>
	</div>
</div>

';
 Redux::setSection( $opt_name, array(
        'title'            => __( 'Themes & Plugins', 'redux-framework-demo' ),
        'desc'             => __( '', 'redux-framework-demo' ),
        'id'               => 'alborotado-options-fields',
        'subsection'       => false,
        'customizer_width' => '700px',
        'fields'           => array(
            array( 
				'id'       => 'advertise-alborotado',
				'type'     => 'raw',
				'title'    => __('Other themes & plugins made by Miguras', 'redux-framework-demo'),
				'subtitle' => __('', 'redux-framework-demo'),
				'desc'     => __('', 'redux-framework-demo'),
				'content'  => $advcontent,
			),
        )
    ) );
?>