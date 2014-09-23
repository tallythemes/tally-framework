<?php
add_action('tally_loop', 'tally_do_is_archive_content');
function tally_do_is_archive_content(){
	if(is_archive()){
		do_action('tally_deafult_post_content');
	}
}