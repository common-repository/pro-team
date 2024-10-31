jQuery(document).ready(function($){
	"use strict";
	//general var
	var $windowHeight = jQuery(window).outerHeight();
	

	/*========== Styles Fixes====================*/
	
	// Style Three 
	jQuery('.migproteam_member.style_three').each(function(){
		var $pos = jQuery(this).find('.migproteam_member_header').position();
		var $height = jQuery(this).find('.migproteam_member_header').outerHeight();
		jQuery(this).find('.migproteam_social_container ').css({top: $pos.top + $height + 10});
	})
	
	
	/*====================== FULL BIO =====================*/
	// popup size
	jQuery('.migproteam_full_bio_inner').css({height: $windowHeight/100*75, top:$windowHeight/100*7.5})
	jQuery('.migproteam_full_overlay, .migproteam_full_bio_close').on('click', function(){
		jQuery('.migproteam_full_bio').css({display: 'none', visibility: 'hidden'});
	})
	
	// Open Popup
	jQuery('.migproteam_main_image, .migproteam_name, .migproteam_position').on('click', function(){
		jQuery(this).parents('.migproteam_member ').find('.migproteam_full_bio').css({display: 'block', visibility: 'visible'});
	})
	
	//display additional images
	jQuery('.migproteam_full_additional_image').hover(
		
		function(){
			var $img = jQuery(this).find('img').attr('src');
			jQuery(this).parents('.migproteam_full_images').find('.migproteam_full_main_image').prepend('<img class="migproteam_full_prepended_image" src="'+$img+'">');
			jQuery(this).parents('.migproteam_full_images').find('.migproteam_full_main_image .migproteam_full_main_image_inner').css({display: 'none', visibility: 'hidden'})
		},
		function(){
			jQuery('.migproteam_full_prepended_image').remove();
			jQuery(this).parents('.migproteam_full_images').find('.migproteam_full_main_image .migproteam_full_main_image_inner').css({display: 'block', visibility: 'visible'})
		}
	)
	
	
	// Display previous/next member
	jQuery('.migproteam_full_next').on('click', function(){
		jQuery(this).parents('.migproteam_full_bio').css({display: 'none', visibility: 'hidden'});
		jQuery(this).parents('.migproteam_member').next('.migproteam_member').find('.migproteam_main_image').trigger('click');
		
	})
	jQuery('.migproteam_full_previous').on('click', function(){
		jQuery(this).parents('.migproteam_full_bio').css({display: 'none', visibility: 'hidden'});
		jQuery(this).parents('.migproteam_member').prev('.migproteam_member').find('.migproteam_main_image').trigger('click');
		
	})
	
}); /*End of document*/