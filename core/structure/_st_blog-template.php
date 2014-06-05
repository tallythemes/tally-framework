<?php
add_action('tally_reset_loops', 'tally_do_blog_page_template');
function tally_do_blog_page_template(){
	if(is_page_template( 'page-blog.php' )){
		tally_defaults_reset_loops();
	}
}
