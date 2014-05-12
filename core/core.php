<?php
define('DIGITA_URL', get_template_directory_uri());
define('DIGITA_DRI', get_template_directory());
define('DIGITA_CHILD_URL', get_stylesheet_directory_uri());
define('DIGITA_CHILD_DRI', get_stylesheet_directory());
$digita_theme_info = wp_get_theme();


/*  Setup Default Option STD 
----------------------------------*/
$digita_theme_option_std = apply_filters('digita_theme_option_std', array(
	'sidebar_layout'    => 'full-width-content',
	'site_layout'       => 'full',
	'heading_font_link' => "<link href='http://fonts.googleapis.com/css?family=Cherry+Swash:400,700' rel='stylesheet' type='text/css'>",
	'heading_font_name' => "font-family: 'Cherry Swash', cursive;",
	'body_font_link'    => "<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>",
	'body_font_name'    => "font-family: 'Open Sans', sans-serif;",
	'site_logo'         => DIGITA_URL.'/assets/images/logo.png',
	'site_logo2'        => DIGITA_URL.'/assets/images/logo@2x.png',
	'site_favicon'      => '',
), 10);



/*  Constant for remove or active 
    some part of the theme
----------------------------------*/
define('DIGITA_LAYOUT_TOPBAR_REMOVE', apply_filters('digita_layout_topbar_remove', false));
define('DIGITA_LAYOUT_SUBHEADER_REMOVE', apply_filters('digita_layout_subheader_remove', false));
define('DIGITA_LAYOUT_FOOTER_WIDGETS_REMOVE', apply_filters('digita_layout_footer_widgets_remove', false));
define('DIGITA_LAYOUT_FOOTER_REMOVE', apply_filters('digita_layout_footer_remove', false));



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

if ( ! class_exists( 'OT_Loader' ) ) {
add_filter( 'ot_header_version_text', 'digita_ot_header_version_text' );
function digita_ot_header_version_text() {
	global $digita_theme_info;
	return $digita_theme_info->get( 'Name' ) . " -- Version " . $digita_theme_info->get( 'Version' );;
}
load_template( trailingslashit( DIGITA_DRI ) . 'core/option-tree/ot-loader.php' );
}



/* Loading the Metaboxes
----------------------------------*/
digita_file_dri('metaboxs/_m_post-formats.php');
digita_file_dri('metaboxs/_m_blog-template.php');
digita_file_dri('metaboxs/_m_pages.php');
digita_file_dri('metaboxs/_m_action.php');



/* Loading the Options
----------------------------------*/
digita_file_dri('options/config-option-tree.php');
digita_file_dri('options/_o_branding.php');
digita_file_dri('options/_o_layout.php');
digita_file_dri('options/_o_header.php');
digita_file_dri('options/_o_colors.php');
digita_file_dri('options/_o_fonts.php');
digita_file_dri('options/_o_social-icons.php');
digita_file_dri('options/_o_footer.php');
digita_file_dri('options/_o_integration.php');
digita_file_dri('options/_o_action-colors.php');
digita_file_dri('options/_o_action.php');



/* Loading Structure
----------------------------------*/
digita_file_dri('structure/_st_topbar.php');
digita_file_dri('structure/_st_header.php');
digita_file_dri('structure/_st_subheader.php');
digita_file_dri('structure/_st_footer-widgets.php');
digita_file_dri('structure/_st_footer.php');
digita_file_dri('structure/_st_loop.php');
digita_file_dri('structure/_st_comments.php');
digita_file_dri('structure/_st_sidebar.php');
digita_file_dri('structure/_st_layout.php');

digita_file_dri('structure/_st_post.php');
digita_file_dri('structure/_st_404.php');
digita_file_dri('structure/_st_page.php');
digita_file_dri('structure/_st_search.php');





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
load_theme_textdomain( 'digita_taxdomain', get_template_directory().'/languages' );	



/* Add post format support
----------------------------------*/
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio', 'chat' ) );



/* Registering Sidebars
----------------------------------*/
register_sidebar( array(
	'name' => __('Primary Sidebar', 'digita_taxdomain'),
	'id' => 'sidebar',
	'description' => __('Primary Sidebar Widgets', 'digita_taxdomain'),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div><div class='clear' style='height:30px;'></div>",
	'before_title' => '<h4 class="heading">',
	'after_title' => '</h4>',
));
register_sidebar( array(
	'name' => __('Sidebar Alt', 'digita_taxdomain'),
	'id' => 'sidebar-alt',
	'description' => __('Sidebar Widgets', 'digita_taxdomain'),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div><div class='clear' style='height:30px;'></div>",
	'before_title' => '<h4 class="heading">',
	'after_title' => '</h4>',
));
register_sidebar( array(
	'name' => __('Footer Widget #1', 'digita_taxdomain'),
	'id' => 'footer_widget_1',
	'description' => __('Footer Widget #1', 'digita_taxdomain'),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>",
	'before_title' => '<h4 class="heading">',
	'after_title' => '</h4>',
));


register_sidebar( array(
	'name' => __('Footer Widget #2', 'digita_taxdomain'),
	'id' => 'footer_widget_2',
	'description' => __('Footer Widget #2', 'digita_taxdomain'),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>",
	'before_title' => '<h4 class="heading">',
	'after_title' => '</h4>',
));

register_sidebar( array(
	'name' => __('Footer Widget #3', 'digita_taxdomain'),
	'id' => 'footer_widget_3',
	'description' => __('Footer Widget #3', 'digita_taxdomain'),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>",
	'before_title' => '<h4 class="heading">',
	'after_title' => '</h4>',
));

register_sidebar( array(
	'name' => __('Footer Widget #4', 'digita_taxdomain'),
	'id' => 'footer_widget_4',
	'description' => __('Footer Widget #4', 'digita_taxdomain'),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => "</div>",
	'before_title' => '<h4 class="heading">',
	'after_title' => '</h4>',
));