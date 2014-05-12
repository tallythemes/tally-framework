<?php
add_image_size('image_format', 960, 500, true);
add_image_size('gallery_format', 960, 500, true);
include('core/core.php');


add_filter('option_tree_settings_args', 'digita_branding_ot_optionsqq');
function digita_branding_ot_optionsqq($custom_settings){
	
	//unset($custom_settings['settings']['site_layout']);
	
	return $custom_settings;
}