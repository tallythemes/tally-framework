<?php
function tally_sidebar_layout_custom_body_class( array $classes ) {

	if(tally_sitebar_layout_option() != ''){
		$classes[] = tally_sitebar_layout_option();
	}

	return $classes;

}
add_filter( 'body_class', 'tally_sidebar_layout_custom_body_class', 15 );



add_action( 'tally_after_content', 'genesis_get_sidebar' );
function genesis_get_sidebar() {

	$site_layout = tally_sitebar_layout_option();

	//* Don't load sidebar on pages that don't need it
	if ( 'full-width-content' === $site_layout )
		return;

	get_sidebar();

}

add_action( 'tally_after_content_sidebar_area', 'tally_get_sidebar_alt' );
function tally_get_sidebar_alt() {

	$site_layout = tally_sitebar_layout_option();

	//* Don't load sidebar-alt on pages that don't need it
	if ( in_array( $site_layout, array( 'content-sidebar', 'sidebar-content', 'full-width-content' ) ) )
		return;

	get_sidebar( 'alt' );

}
