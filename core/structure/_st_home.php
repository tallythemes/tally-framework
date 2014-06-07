<?php
add_action('wp_head', 'tally_do_home_template');
function tally_do_home_template(){
	if(is_home()){
		remove_action('tally_after_header', 'tally_do_subheader_open_warp', 5);
		remove_action('tally_after_header', 'tally_do_subheader_closing_warp', 15);
		remove_action('tally_after_header', 'tally_do_page_title', 10);
		remove_action('tally_after_header', 'tally_do_breadcrumb', 10);
	}
}

add_action('tally_reset_loops', 'tally_do_home_template_loop');
function tally_do_home_template_loop(){
	if(is_home()){
		tally_defaults_reset_loops();
	}
}
