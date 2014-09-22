<?php
add_action('tally_loop', 'tally_do_home_content');
function tally_do_home_content(){
	if(is_home()){
		tally_deafult_post_content();
	}
}