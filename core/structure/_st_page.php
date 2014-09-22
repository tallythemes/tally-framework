<?php
add_action('tally_loop', 'tally_do_page_content');
function tally_do_page_content(){
	if(is_page()){
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post();
			echo '<article '; post_class(); echo '>';
				echo '<div class="entry-content">';
					the_content();
				echo '</div>';
			echo '</article>';
		endwhile;
	else :
		tally_do_noposts();
	endif;
	}
}