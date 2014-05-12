<?php
function digita_sidebar_layout_custom_body_class( array $classes ) {

	if(digita_sitebar_layout_option() != ''){
		$classes[] = digita_sitebar_layout_option();
	}

	return $classes;

}
add_filter( 'body_class', 'digita_sidebar_layout_custom_body_class', 15 );



add_action( 'digita_after_content', 'genesis_get_sidebar' );
function genesis_get_sidebar() {

	$site_layout = digita_sitebar_layout_option();

	//* Don't load sidebar on pages that don't need it
	if ( 'full-width-content' === $site_layout )
		return;

	get_sidebar();

}

add_action( 'digita_after_content_sidebar_area', 'digita_get_sidebar_alt' );
function digita_get_sidebar_alt() {

	$site_layout = digita_sitebar_layout_option();

	//* Don't load sidebar-alt on pages that don't need it
	if ( in_array( $site_layout, array( 'content-sidebar', 'sidebar-content', 'full-width-content' ) ) )
		return;

	get_sidebar( 'alt' );

}
