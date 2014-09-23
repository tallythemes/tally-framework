<?php
add_action('tally_loop', 'tally_do_is_search_content');
function tally_do_is_search_content(){
	if(is_search()){
		do_action('tally_deafult_post_content');
	}
}