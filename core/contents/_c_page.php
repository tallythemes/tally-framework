<?php
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