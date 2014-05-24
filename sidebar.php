<?php
echo '<div id="sidebar" class="sidebar widget-area">';
	echo '<div id="sidebar-inner">';
		do_action( 'tally_before_sidebar' );
		do_action( 'tally_sidebar' );
		do_action( 'tally_after_sidebar' );
	echo '</div>';
echo '</div>';