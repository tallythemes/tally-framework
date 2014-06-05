<?php
add_action('tally_reset_loops', 'tally_do_reset_archive_content');
function tally_do_reset_archive_content(){
	if(is_archive()){
		tally_defaults_reset_loops();
	}
}
