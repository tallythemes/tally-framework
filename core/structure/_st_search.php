<?php
add_action('tally_reset_loops', 'tally_do_reset_search_content');
function tally_do_reset_search_content(){
	if(is_search()){
		remove_action( 'tally_entry_header', 'tally_do_post_media', 4 );
		remove_action( 'tally_entry_header', 'tally_entry_header_markup_open', 5 );
		remove_action( 'tally_entry_header', 'tally_entry_header_markup_close', 15 );
		remove_action( 'tally_entry_header', 'tally_do_post_info', 12 );
		remove_action( 'tally_entry_content', 'tally_do_post_content_nav', 12 );
		remove_action( 'tally_entry_footer', 'tally_entry_footer_markup_open', 5 );
		remove_action( 'tally_entry_footer', 'tally_entry_footer_markup_close', 15 );
		remove_action( 'tally_entry_footer', 'tally_do_post_meta' );
		remove_action( 'tally_entry_content', 'tally_do_post_content' );
		add_action( 'tally_entry_content', 'tally_do_reset_search_content_excerpt' );
	}
}


/***
	Add post Content
*-----------------------------------------------*/
function tally_do_reset_search_content_excerpt(){
	
	
	the_excerpt();
	if(get_post_format() == 'aside') return;
	if(get_post_format() == 'quote') return;
	if(get_post_format() == 'link') return;
	
	echo '<div class="entry-readmore"><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'tally_textdomain') . '</a></div>';
}