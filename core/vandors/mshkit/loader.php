<?php

add_action( 'after_setup_theme', 'load_mshkit');
function load_mshkit(){
	$path_dir = trailingslashit(str_replace('\\','/',dirname(__FILE__)));
	$path_abs = trailingslashit(str_replace('\\','/',ABSPATH));
	
	define('MSHKIT_URL', site_url(str_replace( $path_abs, '', $path_dir )) );
	define('MSHKIT_DRI', $path_dir );
	
	include('');
}