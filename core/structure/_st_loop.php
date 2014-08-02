<?php
add_action('tally_loop', 'tally_do_loop_content');
function tally_do_loop_content(){
	do_action( 'tally_reset_loops' );
	
	if(is_page_template( 'page-blog.php' )){
		$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

		//* Easter Egg
		$query_args = array(
			'paged' => $paged,
			'post_type' => 'post',
		);
		tally_custom_loop( $query_args );
	}else{
		tally_standard_loop();
	}
}




function tally_standard_loop(){
	
	if ( have_posts() ) : while ( have_posts() ) : the_post();
			do_action( 'tally_before_entry' );
			
			echo '<article '; post_class(); echo '>';

				do_action( 'tally_entry_header' );

				do_action( 'tally_before_entry_content' );
				echo '<div class="entry-content">';
					do_action( 'tally_entry_content' );
				echo '</div>'; //* end .entry-content
				do_action( 'tally_after_entry_content' );

				do_action( 'tally_entry_footer' );

			echo '</article>';

			do_action( 'tally_after_entry' );

		endwhile; //* end of one post
		
		do_action( 'tally_after_endwhile' );
	else : //* if no posts exist
		do_action( 'tally_loop_else' );
	endif; //* end loop
}



function tally_custom_loop( $args = array() ) {

	global $wp_query, $more;

	$defaults = array(); //* For forward compatibility
	$args     = apply_filters( 'tally_custom_loop_args', wp_parse_args( $args, $defaults ), $args, $defaults );

	$wp_query = new WP_Query( $args );

	//* Only set $more to 0 if we're on an archive
	$more = is_singular() ? $more : 0;

	tally_standard_loop();

	//* Restore original query
	wp_reset_query();

}



/**
 * Restore all default post loop output by re-hooking all default functions.
 *
 * Useful in the event that you need to unhook something in a particular context, but don't want to restore it for all
 * subsequent loop instances.
 *
 * Calls `tally_reset_loops` action after everything has been re-hooked.
 *
 * @since 1.0
 *
 * @global array $_tally_loop_args Associative array for grid loop configuration
 */
function tally_defaults_reset_loops() {
	add_action( 'tally_entry_header', 'tally_do_post_media', 4 );
	
	add_action( 'tally_entry_header', 'tally_entry_header_markup_open', 5 );
	add_action( 'tally_entry_header', 'tally_entry_header_markup_close', 15 );
	add_action( 'tally_entry_header', 'tally_do_post_title' );
	add_action( 'tally_entry_header', 'tally_do_post_info', 12 );
	add_action( 'tally_entry_header', 'tally_do_post_format_link', 13 );
	
	add_action( 'tally_entry_content', 'tally_do_post_content' );
	add_action( 'tally_entry_content', 'tally_do_post_format_quote', 10 );
	add_action( 'tally_entry_content', 'tally_do_post_content_nav', 12 );
	
	add_action( 'tally_entry_footer', 'tally_entry_footer_markup_open', 5 );
	add_action( 'tally_entry_footer', 'tally_entry_footer_markup_close', 15 );
	add_action( 'tally_entry_footer', 'tally_do_post_meta' );
	
	add_action( 'tally_after_entry', 'tally_do_author_box_single', 8 );
	add_action( 'tally_after_entry', 'tally_do_comments_template' );

	//* Other
	add_action( 'tally_loop_else', 'tally_do_noposts' );
	add_action( 'tally_after_endwhile', 'tally_do_posts_nav' );
}