<?php
add_action('tally_loop', 'tally_do_single_content');
function tally_do_single_content(){
	if(is_single()){
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post();
			echo '<article '; post_class(); echo '>';
				echo '<div class="entry-header">';
					tally_do_post_media();
					tally_do_post_title();
					tally_do_post_info();
				echo '</div>';
				echo '<div class="entry-content">';
					tally_do_post_content();
					tally_do_post_content_nav();
					tally_do_post_meta();
				echo '</div>';
				echo '<div class="entry-footer">';
					tally_do_author_box_single();
					tally_do_comments_template();
				echo '</div>';
			echo '</article>';
		endwhile;
	else :
		tally_do_noposts();
	endif;
	}
}
