<?php 
global $mig_proteam;

/*================ MAIN SHORTCODE ============================*/



if(!function_exists('mig_proteam_main_shortcode')) {
	
	add_shortcode('proteam', 'mig_proteam_main_shortcode');
		
	function mig_proteam_main_shortcode($atts = NULL, $content = NULL){
		global $post;
		global $mig_proteam;

		$proteamprefix = 'proteamprefix_';
		
		extract(shortcode_atts(array(
			'style' => 'custom',
			'design' => 'default',
			'members' => '4',
			'orderby' => '',
			'order' => '',
			'column' => '4',
			'spaces' => 'yes',
			'pagination' => 'yes',
			'paginationback' => '#222222',
			'paginationcolor' => '#ffffff',
			'class' => '',
		), $atts));
		
		
		$output = '';
		
		/*Pagination Fix for Home*/
	    if ( get_query_var('paged') ) {
    	$paged = get_query_var('paged');
		} else if ( get_query_var('page') ) {
    	$paged = get_query_var('page');
		} else {
    	$paged = 1;
		}
		
		////////////////////////////////Query 
		$args = array('post_type' => 'pro_team_posts', 'orderby' => $orderby, 'order' => $order, 'posts_per_page' => $members, 'paged' => $paged );
		$proteam_query = new WP_Query($args);
		
		//
		if ( $proteam_query->have_posts() ) {
			$output .= '<div class="migproteam-wrapper cont-spaces-'.$spaces.'-'.$column.' clearfix">';


			// each member  
			while ( $proteam_query->have_posts() ) {
				$proteam_query->the_post();
				$social = get_post_meta( get_the_ID(), $proteamprefix . 'proteam_social_icons', true );
				$skill = get_post_meta( get_the_ID(), $proteamprefix . 'proteam_features', true );
				$additional_images = get_post_meta( get_the_ID(), $proteamprefix . 'additional_images', true );
				$id = 'member-'.$post->ID;
				$bordercolor = '';
				
				
				if($style == 'custom'){
					$memberstyle =  get_post_meta( get_the_ID(), $proteamprefix . 'member_style', true );
				}
				else {
					$memberstyle = $style;	
				}
				
				$customcss = get_post_meta( get_the_ID(), $proteamprefix . 'member_custom_css', true );
				$position = get_post_meta( get_the_ID(), $proteamprefix . 'position', true );
				$shortdescription = get_post_meta( get_the_ID(), $proteamprefix . 'short_description', true );
				
				if($design == 'custom'){
				$backgroundcolor = get_post_meta( get_the_ID(), $proteamprefix . 'member_background', true );
				$namecolor = get_post_meta( get_the_ID(), $proteamprefix . 'member_name_color', true );
				$positioncolor = get_post_meta( get_the_ID(), $proteamprefix . 'member_position_color', true );
				$descriptioncolor = get_post_meta( get_the_ID(), $proteamprefix . 'member_description_color', true );
				$mainone = get_post_meta( $post->ID, $proteamprefix . 'member_main_one', true );
				$maintwo = get_post_meta( $post->ID, $proteamprefix . 'member_main_two', true );
				$image_effect = 'migproteam_image_'.get_post_meta( get_the_ID(), $proteamprefix . 'member_image_effect', true );
				}
				else {
				$backgroundcolor = $mig_proteam['member_background'];
				$namecolor = $mig_proteam['member_name_color'];
				$positioncolor = $mig_proteam['member_position_color'];
				$descriptioncolor = $mig_proteam['member_description_color'];	
				$mainone = $mig_proteam['member-color-main-one'];
				$maintwo = $mig_proteam['member-color-main-two'];
				$image_effect = 'migproteam_image_'.$mig_proteam['member_image_effect'];
				}
				if($style == 'style_two'){$bordercolor = 'border-color:'.$mainone.';';}
				
				
				$output .= '<div id="'.$id.'" class="mig-col-'.$column.' migproteam_member clearfix '.$memberstyle.' '.$customcss.'">';
					$output .= '<div class="mig-col-inner spaces-'.$spaces.'">';
						$output .= '<div class="migproteam_main_image clearfix '.$image_effect.'"><div class="migproteam_image_inner"><img style="'.$bordercolor.'" src="'.get_the_post_thumbnail_url().'"></div></div>';
						$output .= '<div class="migproteam_inner_content clearfix" style="background-color:'.$backgroundcolor.';">';
							$output .= '<div class="migproteam_member_header clearfix">';
								$output .= '<div class="migproteam_name clearfix" style="color:'.$namecolor.';">'.get_the_title().'</div>';
								$output .= '<div class="migproteam_position clearfix" style="color:'.$positioncolor.';">'.$position.'</div>';
							$output .= '</div>';// end migproteam_member_header 
							$output .= '<div class="migproteam_short_description clearfix" style="color:'.$descriptioncolor.';">'.$shortdescription.'</div>';
							$output .= '<div class="migproteam_social_container clearfix">';
								foreach($social as $socialkey => $socialvalue){
								if($socialvalue['social_type'] == 'envelope'){$social_link = 'mailto:'.$socialvalue['social_link'] ; $target = '_self';} else {$cosial_link = $socialvalue['social_link']; $target = '_blank';}
								$output .= '<a style="background-color:'.$socialvalue['background_social_link'].'; color:'.$socialvalue['color_social_link'].';" class="migproteam_icon" href="'.$social_link.'" target="'.$target.'"><i class="fa fa-'.$socialvalue['social_type'].'"></i></a>';	
								}
							$output .= '</div>'; // End of migproteam_social_container
						 $output .= '</div>'; // End of migproteam_inner_content
					$output .= '</div>'; //End of mig-col-inner
				
					
					// Full Bio
					$output .= '<div class="migproteam_full_bio clearfix">';
						$output .= '<i class="migproteam_full_previous fa fa-angle-left"></i><i class="migproteam_full_next fa fa-angle-right"></i>';
						$output .= '<div class="migproteam_full_overlay"></div>';
						$output .= '<div class="migproteam_full_bio_inner clearfix">';
							$output .= '<div class="migproteam_full_bio_close clearfix">Close</div>';
							
							$output .= '<div class="migproteam_full_images">';
								$output .= '<div class="migproteam_full_main_image clearfix"><div class="migproteam_full_main_image_inner">'.get_the_post_thumbnail().'</div></div>';
								foreach($additional_images as $imagekey => $imagevalue){
								$output .= '<div class="migproteam_full_additional_image clearfix"><img src="'.$imagevalue.'"></div>';	
								}
								$output .= '<div class="migproteam_full_social_container clearfix">';
									foreach($social as $socialkey => $socialvalue){
									if($socialvalue['social_type'] == 'envelope'){$social_link = 'mailto:'.$socialvalue['social_link'] ; $target = '_self';} else {$cosial_link = $socialvalue['social_link']; $target = '_blank';}
									$output .= '<a style="background-color:'.$socialvalue['background_social_link'].'; color:'.$socialvalue['color_social_link'].';" class="migproteam_icon" href="'.$social_link.'" target="'.$target.'"><i class="fa fa-'.$socialvalue['social_type'].'"></i></a>';	
									}
								$output .= '</div>'; // End of migproteam_full_social_container
							$output .= '</div>'; // end of migproteam_full_images
							
							$output .= '<div class="migproteam_full_info clearfix">';
								$output .= '<div class="migproteam_full_name clearfix">'.get_the_title().'</div>';
								$output .= '<div class="migproteam_full_position clearfix">'.$position.'</div>';
								foreach($skill as $skillkey => $skillvalue){
									if(!empty($skillvalue['feature_name']) || !empty($skillvalue['feature_description'])){
									$output .= '<div class="migproteam_full_feature_wrapper" style="background-color:'.$skillvalue['feature_background'].'; color:'.$skillvalue['feature_color'].';">';
										$output .= '<div class="migproteam_full_skillname">'.$skillvalue['feature_name'].'</div>';	
										$output .= '<div class="migproteam_full_feature_description">'.$skillvalue['feature_description'].'</div>';
									$output .= '</div>'; // End of migproteam_full_feature_wrapper
									}
								}
								$output .= '<div class="migproteam_full_description clearfix">'.get_the_content().'</div>';
							$output .= '</div>'; // End of migproteam_full_info
							
						$output .= '</div>'; // end migproteam_full_bio_inner	
					$output .= '</div>'; // end migproteam_full_bio
					
				
				
				
				
				$output .= '</div>'; // End of migproteam_member
				
				
			
			
			//specific css

			} // while end
			
			//general css
			$output .= '<style type="text/css">';
				$output .= '.mig-pagination a, .mig-pagination span {background-color:'.$paginationback.'; color:'.$paginationcolor.';}';
			$output .= '</style>';
			
			
			
			
			$output .= '</div>';
			
			//////////////////////////////////PAGINATION
			if($pagination == 'yes'){
			$numberof = 999999999; // need an unlikely integer
	
			$output .= '<nav class="mig-pagination clearfix">'.paginate_links( array(
			'base' => str_replace( $numberof, '%#%', esc_url( get_pagenum_link( $numberof ) ) ),
			'format' => '?paged=%#%',
			'prev_text'    => __('Previous', 'migproteam'),
			'next_text'    => __('Next', 'migproteam'),
			'current' => max( 1, $paged ),
			'total' => $proteam_query->max_num_pages
			) ).'</nav>';
			}

			
			wp_reset_query();
			
			
		} 
		else {
			$output .= __('No Members Found', 'mig_proteam');
		}
		
		return $output;
		
	}


} // End if function_exists




/*================================== EDITOR BUTTON ====================================*/
// add new buttons
add_action('media_buttons', 'migproteam_editor_button');

function migproteam_editor_button() {
    echo '<div id="migproteam_shortcode_generator" class="button dashicons-before dashicons-id-alt dashicons-id-alt"><div class="migproteam_shortcode_text">ProTeam</div></div>';
}



?>