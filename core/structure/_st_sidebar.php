<?php

add_action( 'tally_sidebar', 'tally_do_sidebar' );
function tally_do_sidebar() {
	
	$active = apply_filters('tally_sidebar_active', true);
	
	if($active == false) return;
	
	if ( ! dynamic_sidebar( 'sidebar' ) && current_user_can( 'edit_theme_options' )  ) {
		tally_default_widget_area_content( __( 'Primary Sidebar Widget Area', 'tally_textdomain' ) );
	}

}

add_action( 'tally_sidebar_alt', 'tally_do_sidebar_alt' );
function tally_do_sidebar_alt() {
	
	$active = apply_filters('tally_sidebar_alt_active', true);
	
	if($active == false) return;

	if ( ! dynamic_sidebar( 'sidebar-alt' ) && current_user_can( 'edit_theme_options' ) ) {
		tally_default_widget_area_content( __( 'Secondary Sidebar Widget Area', 'tally_textdomain' ) );
	}

}


function tally_default_widget_area_content( $name ) {

	echo '<div class="widget widget_text">';
	echo '<div class="widget-wrap">';
	
		printf( '<h4 class="widgettitle">%s</h4>', esc_html( $name ) );
		echo '<div class="textwidget"><p>';
		
			printf( __( 'This is the %s. You can add content to this area by visiting your <a href="%s">Widgets Panel</a> and adding new widgets to this area.', 'tally_textdomain' ), $name, admin_url( 'widgets.php' ) );
		
		echo '</p></div>';
	
	echo '</div>';
	echo '</div>';
}