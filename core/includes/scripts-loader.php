<?php
/*----------------------------------------------------------------
 ## Load JavaScript and CSS
----------------------------------------------------------------*/
add_action('wp_enqueue_scripts', 'tally_script_loader');
function tally_script_loader(){
	wp_enqueue_script('html5', tally_assets_file('js/html5.js'));
	wp_enqueue_script('tinynav', tally_assets_file('js/tinynav.js'), array('jquery'), '', true);
	wp_enqueue_script('jquery-flexslider', tally_assets_file('js/jquery.flexslider.js'),array('jquery'), '', true);
	wp_enqueue_script('jquery-prettyPhoto', tally_assets_file('js/jquery.prettyPhoto.js'),array('jquery'), '', true);
	wp_enqueue_script('jquery-easing', tally_assets_file('js/jquery.easing.js'), array('jquery'), '');
	wp_enqueue_script('jquery-wow', tally_assets_file('js/wow.min.js'), array('jquery'), '');
	wp_enqueue_script('jquery-fitvids', tally_assets_file('js/jquery.fitvids.js'), array('jquery'), '');
	
	//Custom Script
	wp_enqueue_script('theme', tally_assets_file('js/theme.js'), array('jquery'), '', true);
	wp_enqueue_script('jquery-wow', tally_assets_file('js/wow.js'), array('jquery'), '', true);
	wp_enqueue_script('jquery-smoothscroll', tally_assets_file('js/smoothscroll.js'), array('jquery'), '', true);
	
	wp_enqueue_style('jquery-prettyPhoto', tally_assets_file('css/prettyPhoto.css'));
	wp_enqueue_style('flexslider', tally_assets_file('css/flexslider.css'));
	wp_enqueue_style('font-awesome', tally_assets_file('css/font-awesome.css'), '', ' 4.2.0');
	wp_enqueue_style('animate', tally_assets_file('css/animate.css'), '', '3.2.0');
	
	wp_enqueue_style('base', tally_assets_file2('css', 'base.css'));
	wp_enqueue_style('main-css', tally_assets_file2('css', 'style.css'));
	wp_enqueue_style('responsive', tally_assets_file2('css', 'responsive.css'));
	
	wp_enqueue_style('tally-dynamic', admin_url('admin-ajax.php').'?action=tally_dynamic_css&post_id='.get_the_ID().'');

}

function tally_dynamic_css() {
	$current_post_id = '';
	if(isset($_GET['post_id']) && !empty($_GET['post_id'])){ $current_post_id = $_GET['post_id']; }
	require(TALLY_DRI.'/core/assets/css/dynamic.css.php');
	exit;
}
add_action('wp_ajax_tally_dynamic_css', 'tally_dynamic_css');
add_action('wp_ajax_nopriv_tally_dynamic_css', 'tally_dynamic_css');


add_action('admin_enqueue_scripts', 'tally_admin_script_loader');
function tally_admin_script_loader(){
	wp_enqueue_style('theme-admin', tally_assets_file('css/admin.css'));
	wp_enqueue_script('theme-admin', tally_assets_file('js/theme-admin.js'), array('jquery'), '', true);
}