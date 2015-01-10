<?php
/*
 	topbar Open Div
--------------------------------------------*/
add_action('tally_before_header', 'tally_do_preloader', 1);
function tally_do_preloader(){
	if(tally_is_preloader() == 'yes'){
		$content = '<div id="tally_preloader">';
			$content .= '<div class="tally-spinner">';
				$content .= '<div class="bounce1"></div>';
				$content .= '<div class="bounce2"></div>';
				$content .= '<div class="bounce3"></div>';
			$content .= '</div>';
		$content .= '</div>';
		
		echo apply_filters('tally_preloader_content', $content );
	}
}