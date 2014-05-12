<?php

add_action( 'digita_sidebar', 'digita_do_sidebar' );
function digita_do_sidebar() {

	if ( ! dynamic_sidebar( 'sidebar' ) && current_user_can( 'edit_theme_options' )  ) {
		digita_default_widget_area_content( __( 'Primary Sidebar Widget Area', 'digita_textdomain' ) );
	}

}

add_action( 'digita_sidebar_alt', 'digita_do_sidebar_alt' );
function digita_do_sidebar_alt() {

	if ( ! dynamic_sidebar( 'sidebar-alt' ) && current_user_can( 'edit_theme_options' ) ) {
		digita_default_widget_area_content( __( 'Secondary Sidebar Widget Area', 'digita_textdomain' ) );
	}

}


function digita_default_widget_area_content( $name ) {

	echo '<div class="widget widget_text">';
	echo '<div class="widget-wrap">';
	
		printf( '<h4 class="widgettitle">%s</h4>', esc_html( $name ) );
		echo '<div class="textwidget"><p>';
		
			printf( __( 'This is the %s. You can add content to this area by visiting your <a href="%s">Widgets Panel</a> and adding new widgets to this area.', 'digita_textdomain' ), $name, admin_url( 'widgets.php' ) );
		
		echo '</p></div>';
	
	echo '</div>';
	echo '</div>';
}