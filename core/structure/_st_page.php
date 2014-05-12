<?php
add_action('digita_reset_loops', 'digita_do_reset_page_content');
function digita_do_reset_page_content(){
	if(is_page()){
		remove_action( 'digita_entry_header', 'digita_do_post_media', 4 );
		remove_action( 'digita_entry_header', 'digita_entry_header_markup_open', 5 );
		remove_action( 'digita_entry_header', 'digita_entry_header_markup_close', 15 );
		remove_action( 'digita_entry_header', 'digita_do_post_title' );
		remove_action( 'digita_entry_header', 'digita_do_post_info', 12 );
		remove_action( 'digita_entry_header', 'digita_do_post_format_link', 13 );
		remove_action( 'digita_entry_content', 'digita_do_post_format_quote', 10 );
		remove_action( 'digita_entry_content', 'digita_do_post_content_nav', 12 );
		remove_action( 'digita_entry_footer', 'digita_entry_footer_markup_open', 5 );
		remove_action( 'digita_entry_footer', 'digita_entry_footer_markup_close', 15 );
		remove_action( 'digita_entry_footer', 'digita_do_post_meta' );
		remove_action( 'digita_after_entry', 'digita_do_author_box_single', 8 );
		remove_action( 'digita_after_endwhile', 'digita_do_posts_nav' );
	}
}

add_filter('digita_article_class', 'digita_filter_loop_class_for_page');
function digita_filter_loop_class_for_page($class){
	if(is_page()){
		$class = 'page_entry';
	}
	
	return $class;
}