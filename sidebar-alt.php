<?php
echo '<div id="sidebar-alt" class="sidebar widget-area">';
	echo '<div id="sidebar-alt-inner">';
		do_action( 'digita_before_sidebar_alt' );
		do_action( 'digita_sidebar_alt' );
		do_action( 'digita_after_sidebar_alt' );
	echo '</div>';
echo '</div>';