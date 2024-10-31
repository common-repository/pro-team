jQuery(document).ready(function($){
	"use strict";
	
	
	// options
	function migprog_select($type, $label, $id, $values, $default){
		var $opt = '<div class="migproteam_option_wrapper migprog_hidden">';
		$opt += '<label>'+$label+'</label>';
		
		//Select
		if($type == 'select'){
			var $selected = '';
			$opt += '<select id="'+$id+'">';
			$values.forEach(function ($value, $i) {
			if($value == $default){$selected = 'selected="selected"'}
			$opt += '<option '+$selected+' value="'+$value+'">'+$value+'</option>';
			$selected = '';
			});
			$opt += '</select>';
		}
		
		if($type == 'text'){
			$opt += '<input type="text" id="'+$id+'" value="'+$default+'">';
		}
		
		
		if($type == 'colorpicker'){
			$opt += '<input type="text" class="migprog_colorpicker" id="'+$id+'" value="'+$default+'">';
		}
		
		
		
		$opt += '</div>';
		return $opt;
	};
	
	
			
	jQuery(document).on('click', '#migproteam_shortcode_generator', function(){
		var $close = '<span class="migproteam_close_shortcode">Close</span>';
		var $title = '<div class="migproteam_shortcode_title">ProTeam Shortcode Options</div>';
		var $sendshortcode = '<span class="migproteam_send_shortcode">Done</span>';
		var $styleopt = migprog_select('select', 'Style (Custom uses the one defined under member page)','styleopt', ['custom', 'style_one', 'style_two', 'style_three'], 'default');
		var $designopt = migprog_select('select', 'Design (Default use values defined at admin panel, custom uses values under member page)','designopt', ['default', 'custom'], 'default');
		var $columnopt = migprog_select('select', 'Column','columnopt', [1,2,3,4,5,6], 4);
		var $membersopt = migprog_select('text', 'Members per Page', 'membersopt', '', 12);
		var $orderbyopt = migprog_select('select', 'Order By', 'orderbyopt', ['title', 'date', 'modified', 'rand'], 'date');
		var $orderopt = migprog_select('select', 'Order', 'orderopt', ['ASC', 'DESC'], 'DESC');
		var $paginationopt = migprog_select('select', 'Display Pagination', 'paginationopt', ['yes', 'no'], 'yes');
		var $paginationback = migprog_select('colorpicker', 'Pagination Background Color', 'paginationback', '', '#222222');
		var $paginationcolor = migprog_select('colorpicker', 'Pagination Text Color', 'paginationcolor', '', '#ffffff');
		var $spacesopt = migprog_select('select', 'Space Between Members', 'spacesopt', ['yes', 'no'], 'yes');
		var $classopt = migprog_select('text', 'Custom Class (Optional)', 'classopt', '', '');
		var $shortcode_options = $title + $close + $styleopt + $designopt + $columnopt + $membersopt + $orderbyopt + $orderopt + $spacesopt + $paginationopt;
			$shortcode_options += $paginationback + $paginationcolor + $classopt + $sendshortcode;
		var $windowHeight = jQuery(window).outerHeight();
		
		
		jQuery('body').append('<div class="migproteam_shortcode_popup"><div class="migproteam_shortcode_inner">'+$shortcode_options+'</div></div>');
		jQuery('.migproteam_shortcode_inner').css({top: $windowHeight/2 - 250});
		jQuery('.migprog_colorpicker').wpColorPicker();
		
		// Remove Popup
		jQuery('.migproteam_close_shortcode').on('click', function(){
			jQuery('.migproteam_shortcode_popup').remove();
		})
		
		// Send Content to editor
		jQuery('.migproteam_send_shortcode').on('click', function(){
			var $shortcode = '';
			var $column = jQuery('.migproteam_shortcode_inner').find('#columnopt').val();
			var $style = jQuery('.migproteam_shortcode_inner').find('#styleopt').val();
			var $design = jQuery('.migproteam_shortcode_inner').find('#designopt').val();
			var $members = jQuery('.migproteam_shortcode_inner').find('#membersopt').val();
			var $pagination = jQuery('.migproteam_shortcode_inner').find('#paginationopt').val();
			var $orderby = jQuery('.migproteam_shortcode_inner').find('#orderbyopt').val();
			var $order = jQuery('.migproteam_shortcode_inner').find('#orderopt').val();
			var $spaces = jQuery('.migproteam_shortcode_inner').find('#spacesopt').val();
			var $paginationback = jQuery('.migproteam_shortcode_inner').find('#paginationback').val();
			var $paginationcolor = jQuery('.migproteam_shortcode_inner').find('#paginationcolor').val();
			var $class = jQuery('.migproteam_shortcode_inner').find('#classopt').val();
			
			$shortcode += '[proteam ';
			$shortcode += 'style="'+$style+'" ';
			$shortcode += 'design="'+$design+'" ';
			$shortcode += 'column="'+$column+'" ';
			$shortcode += 'members="'+$members+'" ';
			$shortcode += 'orderby="'+$orderby+'" ';
			$shortcode += 'order="'+$order+'" ';
			$shortcode += 'spaces="'+$spaces+'" ';
			$shortcode += 'pagination="'+$pagination+'" ';
			$shortcode += 'paginationback="'+$paginationback+'" ';
			$shortcode += 'paginationcolor="'+$paginationcolor+'" ';
			$shortcode += 'class="'+$class+'" ';
			$shortcode += ']';
			
			window.parent.send_to_editor($shortcode);

			jQuery('.migproteam_shortcode_popup').remove();
			 
		})
	
	
	});

	
	
	

}); //jQuery
