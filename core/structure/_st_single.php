<?php
add_action('tally_reset_loops', 'tally_do_reset_single_content');
function tally_do_reset_single_content(){
	if(is_single()){
		tally_defaults_reset_loops();
	}
}
