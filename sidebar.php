<?php
echo '<div id="sidebar" class="sidebar widget-area">';
	echo '<div id="sidebar-inner">';
		do_action( 'digita_before_sidebar' );
		do_action( 'digita_sidebar' );
		do_action( 'digita_after_sidebar' );
	echo '</div>';
echo '</div>';