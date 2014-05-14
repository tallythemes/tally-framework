<?php
echo '<div id="sidebar-alt" class="sidebar widget-area">';
	echo '<div id="sidebar-alt-inner">';
		do_action( 'tally_before_sidebar_alt' );
		do_action( 'tally_sidebar_alt' );
		do_action( 'tally_after_sidebar_alt' );
	echo '</div>';
echo '</div>';