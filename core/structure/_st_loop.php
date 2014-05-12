<?php
add_action('digita_loop', 'digita_do_loop_content');
function digita_do_loop_content(){
	digita_reset_loops();
	digita_standard_loop();
}




function digita_standard_loop(){
	if ( have_posts() ) : while ( have_posts() ) : the_post();
			do_action( 'digita_before_entry' );
			$article_class = apply_filters('digita_article_class', 'blog_entry');
			echo '<article '; post_class($article_class); echo '>';

				do_action( 'digita_entry_header' );

				do_action( 'digita_before_entry_content' );
				echo '<div class="entry-content">';
					do_action( 'digita_entry_content' );
				echo '</div>'; //* end .entry-content
				do_action( 'digita_after_entry_content' );

				do_action( 'digita_entry_footer' );

			echo '</article>';

			do_action( 'digita_after_entry' );

		endwhile; //* end of one post
		
		do_action( 'digita_after_endwhile' );
	else : //* if no posts exist
		do_action( 'digita_loop_else' );
	endif; //* end loop
}



/**
 * Restore all default post loop output by re-hooking all default functions.
 *
 * Useful in the event that you need to unhook something in a particular context, but don't want to restore it for all
 * subsequent loop instances.
 *
 * Calls `digita_reset_loops` action after everything has been re-hooked.
 *
 * @since 1.0
 *
 * @global array $_digita_loop_args Associative array for grid loop configuration
 */
function digita_reset_loops() {
	add_action( 'digita_entry_header', 'digita_do_post_media', 4 );
	
	add_action( 'digita_entry_header', 'digita_entry_header_markup_open', 5 );
	add_action( 'digita_entry_header', 'digita_entry_header_markup_close', 15 );
	add_action( 'digita_entry_header', 'digita_do_post_title' );
	add_action( 'digita_entry_header', 'digita_do_post_info', 12 );
	add_action( 'digita_entry_header', 'digita_do_post_format_link', 13 );
	
	add_action( 'digita_entry_content', 'digita_do_post_content' );
	add_action( 'digita_entry_content', 'digita_do_post_format_quote', 10 );
	add_action( 'digita_entry_content', 'digita_do_post_content_nav', 12 );
	
	add_action( 'digita_entry_footer', 'digita_entry_footer_markup_open', 5 );
	add_action( 'digita_entry_footer', 'digita_entry_footer_markup_close', 15 );
	add_action( 'digita_entry_footer', 'digita_do_post_meta' );
	
	add_action( 'digita_after_entry', 'digita_do_author_box_single', 8 );
	add_action( 'digita_after_entry', 'digita_do_comments_template' );

	//* Other
	add_action( 'digita_loop_else', 'digita_do_noposts' );
	add_action( 'digita_after_endwhile', 'digita_do_posts_nav' );

	//* Reset loop args
	global $_digita_loop_args;
	$_digita_loop_args = array();

	do_action( 'digita_reset_loops' );
}