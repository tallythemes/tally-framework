<?php
/***
	Add comment list 
*-----------------------------------------------*/
add_action( 'digita_comments', 'digita_do_comments' );
function digita_do_comments() {

	global $post, $wp_query;


	if ( have_comments() && ! empty( $wp_query->comments_by_type['comment'] ) ) {

		echo '<div id="comments">';

		echo apply_filters( 'digita_title_comments', __( '<h3>Comments</h3>', 'digita_taxdomain' ) );
		echo '<ol class="comment-list">';
			$defaults = array(
				'type'        => 'comment',
				'avatar_size' => 48,
				'format'      => 'html5', //* Not necessary, but a good example
			);
			$args = apply_filters( 'digita_comment_list_args', $defaults );
			wp_list_comments( $args );
		echo '</ol>';

		//* Comment Navigation
		$prev_link = get_previous_comments_link( apply_filters( 'digita_prev_comments_link_text', '' ) );
		$next_link = get_next_comments_link( apply_filters( 'digita_next_comments_link_text', '' ) );

		if ( $prev_link || $next_link ) {

			echo '<div class="navigation">';
			
			printf( '<div class="pagination-previous alignleft">%s</div>', $prev_link );
			printf( '<div class="pagination-next alignright">%s</div>', $next_link );
			
			echo '</div>';

		}

		echo '</div>';

	}
	//* No comments so far
	elseif ( 'open' === $post->comment_status && $no_comments_text = apply_filters( 'digita_no_comments_text', '' ) ) {
		echo '<div id="comments">' . $no_comments_text . '</div>';
	}
	elseif ( $comments_closed_text = apply_filters( 'digita_comments_closed_text', '' ) ) {
		echo '<div id="comments">' . $comments_closed_text . '</div>';
	}

}

/***
	Add comment Pings 
*-----------------------------------------------*/
add_action( 'digita_pings', 'digita_do_pings' );
function digita_do_pings() {

	global $wp_query;

	//* If have pings
	if ( have_comments() && !empty( $wp_query->comments_by_type['pings'] ) ) {

		echo '<div id="pings">';

		echo apply_filters( 'genesis_title_pings', __( '<h3>Trackbacks</h3>', 'digita_taxdomain' ) );
		echo '<ol class="ping-list">';
			$args = apply_filters( 'digita_ping_list_args', array(
				'type' => 'pings',
			) );
		
			wp_list_comments( $args );
		echo '</ol>';

		echo '</div>';

	} else {

		echo apply_filters( 'digita_no_pings_text', '' );

	}

}


/***
	Add comment Form 
*-----------------------------------------------*/
add_action( 'digita_comment_form', 'digita_do_comment_form' );
function digita_do_comment_form() {

	comment_form( array( 'format' => 'html5' ) );

}