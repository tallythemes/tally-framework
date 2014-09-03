<?php
/*----------------------------------------------------------------
 ## Load JavaScript and CSS
----------------------------------------------------------------*/
add_action('wp_enqueue_scripts', 'tally_script_loader');
function tally_script_loader(){
	wp_enqueue_script('jquery');
	
	wp_enqueue_script('tinynav', tally_assets_file('js/tinynav.min.js'), array('jquery'), '', true);
	wp_enqueue_script('jquery-flexslider', tally_assets_file('js/jquery.flexslider-min.js'),array('jquery'), '', true);
	wp_enqueue_script('jquery-prettyPhoto', tally_assets_file('js/jquery.prettyPhoto.js'),array('jquery'), '', true);
	wp_enqueue_script('jquery-easing', tally_assets_file('js/jquery.easing.min.js'), array('jquery'), '');
	wp_enqueue_script('jquery-wow', tally_assets_file('js/wow.min.js'), array('jquery'), '');
	wp_enqueue_script('jquery-fitvids', tally_assets_file('js/jquery.fitvids.js'), array('jquery'), '');
	
	//Custom Script
	wp_enqueue_script('theme', tally_assets_file('js/theme.js'), array('jquery'), '', true);
	
	wp_enqueue_style('jquery-prettyPhoto', tally_assets_file('css/prettyPhoto.css'));
	wp_enqueue_style('flexslider', tally_assets_file('css/flexslider.css'));
	wp_enqueue_style('font-awesome', tally_assets_file('css/font-awesome.min.css'));
	wp_enqueue_style('animate', tally_assets_file('css/animate.css'));
	
	wp_enqueue_style('base', tally_assets_file2('css', 'base.css'));
	//wp_enqueue_style('main-css', tally_assets_file2('css', 'style.css'));
	wp_enqueue_style('responsive', tally_assets_file2('css', 'responsive.css'));
}




add_action('admin_enqueue_scripts', 'tally_admin_script_loader');
function tally_admin_script_loader(){
	wp_enqueue_style('theme-admin', tally_assets_file('css/admin.css'));
	wp_enqueue_script('theme-admin', tally_assets_file('js/theme-admin.js'), array('jquery'), '', true);
}