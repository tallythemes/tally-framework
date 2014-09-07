<?php
/*
 	topbar Open Div
--------------------------------------------*/
add_action('wp_head', 'tally_do_preloader');
function tally_do_preloader(){
	//if(tally_is_preloader() == 'no') return;
	
	$content = '<div id="tally_preloader">';
		$content .= '<div class="tally-spinner">';
			$content .= '<div class="bounce1"></div>';
			$content .= '<div class="bounce2"></div>';
			$content .= '<div class="bounce3"></div>';
		$content .= '</div>';
	$content .= '</div>';
	
	echo apply_filters('tally_preloader_content', $content );	
}