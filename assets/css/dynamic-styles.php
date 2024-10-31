<?php  	function migproteam_dynamic_styles(){?>
<!-- Load dynamic styles from backend -->
<?php 
global $mig_proteam;
global $post;

?>

<style type="text/css">
.migproteam_name.clearfix {
    font-size:<?php echo $mig_proteam['member-name-size']?>px;
	color:<?php echo $mig_proteam['member-name-color']?>;
}

.migproteam_position.clearfix {
    font-size:<?php echo $mig_proteam['member-position-size']?>px;
	color:<?php echo $mig_proteam['member-position-color']?>;
}

.migproteam_short_description.clearfix {
    font-size:<?php echo $mig_proteam['member-short-description-size']?>px;
	color:<?php echo $mig_proteam['member-short-description-color']?>;
}



</style>


<?php } ?>