<?php
add_action('tally_loop', 'tally_do_home_content');
function tally_do_home_content(){
	if(is_home()){
		do_action('tally_deafult_post_content');
	}
}