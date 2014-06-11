<?php
define('TALLY_NAME', 'tally');
define('TALLY_URL', get_template_directory_uri());
define('TALLY_DRI', get_template_directory());
define('TALLY_CHILD_URL', get_stylesheet_directory_uri());
define('TALLY_CHILD_DRI', get_stylesheet_directory());
$tally_theme_info = wp_get_theme();


/*  Setup Default Option STD 
----------------------------------*/
$tally_theme_option_std = apply_filters('tally_theme_option_std', array(
	'sidebar_layout'    => 'content-sidebar',
	'site_layout'       => 'full',
	'heading_font_link' => "<link href='http://fonts.googleapis.com/css?family=Cherry+Swash:400,700' rel='stylesheet' type='text/css'>",
	'heading_font_name' => "font-family: 'Cherry Swash', cursive;",
	'body_font_link'    => "<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>",
	'body_font_name'    => "font-family: 'Open Sans', sans-serif;",
	'site_logo'         => TALLY_URL.'/assets/images/logo.png',
	'site_logo2'        => TALLY_URL.'/assets/images/logo@2x.png',
	'site_favicon'      => '',
), 10);


/*  redirect after activation
----------------------------------*/
/*global $pagenow;
if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ){
	wp_redirect( admin_url( 'themes.php?page=ot-theme-options' ) );
	exit;
}
*/


/*  Constant for remove or active 
    some part of the theme
----------------------------------*/
define('TALLY_LAYOUT_TOPBAR_REMOVE', apply_filters('tally_layout_topbar_remove', false));
define('TALLY_LAYOUT_SUBHEADER_REMOVE', apply_filters('tally_layout_subheader_remove', false));
define('TALLY_LAYOUT_FOOTER_WIDGETS_REMOVE', apply_filters('tally_layout_footer_widgets_remove', false));
define('TALLY_LAYOUT_FOOTER_REMOVE', apply_filters('tally_layout_footer_remove', false));



/* Loading ROOT files
----------------------------------*/
include('custom-functions.php');
include('scripts-loader.php');
include('breadcrumb.php');
include('class-tgm-plugin-activation.php');
include('color-management.php');



/* Loading the Option Tree
----------------------------------*/
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_override_forced_textarea_simple', '__return_true' );

if ( ! class_exists( 'OT_Loader' ) ) {
add_filter( 'ot_header_version_text', 'tally_ot_header_version_text' );
function tally_ot_header_version_text() {
	global $tally_theme_info;
	return $tally_theme_info->get( 'Name' ) . " -- Version " . $tally_theme_info->get( 'Version' );;
}
load_template( trailingslashit( TALLY_DRI ) . 'core/option-tree/ot-loader.php' );
}



/* Loading the Metaboxes
----------------------------------*/
tally_file_dri('metaboxs/_m_post-formats.php');
tally_file_dri('metaboxs/_m_blog-template.php');
tally_file_dri('metaboxs/_m_pages.php');
tally_file_dri('metaboxs/_m_action.php');



/* Loading the Options
----------------------------------*/
tally_file_dri('options/config-option-tree.php');
tally_file_dri('options/_o_branding.php');
tally_file_dri('options/_o_layout.php');
tally_file_dri('options/_o_header.php');
tally_file_dri('options/_o_colors.php');
tally_file_dri('options/_o_fonts.php');
tally_file_dri('options/_o_social-icons.php');
tally_file_dri('options/_o_footer.php');
tally_file_dri('options/_o_integration.php');
tally_file_dri('options/_o_action-colors.php');
tally_file_dri('options/_o_action.php');



/* Loading Structure
----------------------------------*/
tally_file_dri('structure/_st_topbar.php');
tally_file_dri('structure/_st_header.php');
tally_file_dri('structure/_st_subheader.php');
tally_file_dri('structure/_st_footer-widgets.php');
tally_file_dri('structure/_st_footer.php');
tally_file_dri('structure/_st_sidebar.php');
tally_file_dri('structure/_st_layout.php');

tally_file_dri('structure/_st_loop.php');
tally_file_dri('structure/_st_comments.php');


tally_file_dri('structure/_st_post.php');
tally_file_dri('structure/_st_404.php');
tally_file_dri('structure/_st_page.php');
tally_file_dri('structure/_st_search.php');
tally_file_dri('structure/_st_home.php');
tally_file_dri('structure/_st_single.php');
tally_file_dri('structure/_st_archive.php');
tally_file_dri('structure/_st_blog-template.php');





/* Some settings for the theme
----------------------------------*/
if ( ! isset( $content_width ) ){$content_width = 960; }
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_filter('widget_text', 'do_shortcode');




/* Registering the Menu
----------------------------------*/
register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'footer_menu' => 'Footer Menu',
) );




/* load them textdomain
----------------------------------*/
load_theme_textdomain( 'tally_taxdomain', get_template_directory().'/languages' );	



/* Add post format support
----------------------------------*/
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio', 'chat' ) );



/* Make Responsive Video
 * Modify embeds output
 * Wrap the video embed in a container for scaling
----------------------------------*/
add_filter( 'embed_oembed_html', 'tally_embed_output', 1, 3 );
function tally_embed_output( $html, $url, $attr ) {
	// Only run this process for embeds that don't required fixed dimensions
	$resize = false;
	$accepted_providers = array(
		'youtube',
		'vimeo',
		'slideshare',
		'dailymotion',
		'viddler.com',
		'hulu.com',
		'blip.tv',
		'revision3.com',
		'funnyordie.com',
		'wordpress.tv',
		'scribd.com',
	);

	// Check each provider
	foreach ( $accepted_providers as $provider ) {
		if ( strstr( $url, $provider ) ) {
			$resize = true;
			break;
		}
	}

	// Cleanup output to avoid wpautop() conflicts
	$embed = preg_replace( '/\s+/', '', $html ); // Clean-up whitespace
	$embed = trim( $embed );
	global $content_width;

	$html = '<div class="rve" data-content-width="' . $content_width . '">' . $html . '</div>';

	return $html;
}



/* Registering Sidebars
----------------------------------*/
register_sidebar( array(
	'name' => __('Primary Sidebar', 'tally_taxdomain'),
	'id' => 'sidebar',
	'description' => __('Primary Sidebar Widgets', 'tally_taxdomain'),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div><div class='clear' style='height:30px;'></div>",
	'before_title' => '<h4 class="heading">',
	'after_title' => '</h4>',
));
register_sidebar( array(
	'name' => __('Sidebar Alt', 'tally_taxdomain'),
	'id' => 'sidebar-alt',
	'description' => __('Sidebar Widgets', 'tally_taxdomain'),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div><div class='clear' style='height:30px;'></div>",
	'before_title' => '<h4 class="heading">',
	'after_title' => '</h4>',
));
register_sidebar( array(
	'name' => __('Footer Widget #1', 'tally_taxdomain'),
	'id' => 'footer_widget_1',
	'description' => __('Footer Widget #1', 'tally_taxdomain'),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>",
	'before_title' => '<h4 class="heading">',
	'after_title' => '</h4>',
));


register_sidebar( array(
	'name' => __('Footer Widget #2', 'tally_taxdomain'),
	'id' => 'footer_widget_2',
	'description' => __('Footer Widget #2', 'tally_taxdomain'),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>",
	'before_title' => '<h4 class="heading">',
	'after_title' => '</h4>',
));

register_sidebar( array(
	'name' => __('Footer Widget #3', 'tally_taxdomain'),
	'id' => 'footer_widget_3',
	'description' => __('Footer Widget #3', 'tally_taxdomain'),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>",
	'before_title' => '<h4 class="heading">',
	'after_title' => '</h4>',
));

register_sidebar( array(
	'name' => __('Footer Widget #4', 'tally_taxdomain'),
	'id' => 'footer_widget_4',
	'description' => __('Footer Widget #4', 'tally_taxdomain'),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>",
	'before_title' => '<h4 class="heading">',
	'after_title' => '</h4>',
));