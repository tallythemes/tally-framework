<?php
add_action('digita_reset_loops', 'digita_do_reset_search_content');
function digita_do_reset_search_content(){
	if(is_search()){
		remove_action( 'digita_entry_header', 'digita_do_post_media', 4 );
		remove_action( 'digita_entry_header', 'digita_entry_header_markup_open', 5 );
		remove_action( 'digita_entry_header', 'digita_entry_header_markup_close', 15 );
		remove_action( 'digita_entry_header', 'digita_do_post_info', 12 );
		remove_action( 'digita_entry_content', 'digita_do_post_content_nav', 12 );
		remove_action( 'digita_entry_footer', 'digita_entry_footer_markup_open', 5 );
		remove_action( 'digita_entry_footer', 'digita_entry_footer_markup_close', 15 );
		remove_action( 'digita_entry_footer', 'digita_do_post_meta' );
		remove_action( 'digita_entry_content', 'digita_do_post_content' );
		add_action( 'digita_entry_content', 'digita_do_reset_search_content_excerpt' );
	}
}


/***
	Add post Content
*-----------------------------------------------*/
function digita_do_reset_search_content_excerpt(){
	
	
	the_excerpt();
	if(get_post_format() == 'aside') return;
	if(get_post_format() == 'quote') return;
	if(get_post_format() == 'link') return;
	
	echo '<div class="entry-readmore"><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'digita_textdomain') . '</a></div>';
}