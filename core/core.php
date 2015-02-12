<?php
/**
 * This is the Tally Framework loader class.
 *
 * @package   Tally Framework
 * @author    TallyThemes <http://tallythemes.com/>
 * @copyright Copyright (c) 2014, TallyThemes
 */
if(!class_exists('tally_loader')):

class tally_loader{
	
	/**
     * PHP5 constructor method.
     *
     * This method loads other methods of the class.
     *
     * @return    void
     *
     * @access    public
     * @since     0.7.3
	*/
	public function __construct() {
      
		$this->load_option_tree();
		
		add_filter( 'embed_oembed_html', array( $this, 'responsive_embed_output' ), 1, 3 );
      
		/* load Theme */
		add_action( 'after_setup_theme', array( $this, 'load_tally' ), 3);
    }
	
	
	/**
     * Load the theme on the 'after_setup_theme' action.
     *
     * @return    void
     *
     * @access    public
     * @since     0.7.3
	*/
	public function load_tally(){
		if ( ! isset( $content_width ) ){$content_width = 960; }
		$this->load_languages();	
		$this->constants();
		$this->theme_supports();
		$this->theme_menu();
		add_action('widgets_init', array($this, 'register_sidebar'));
		$this->inludes();
	}
	
	
	/**
     * Load languages of the theme.
     *
     * @return    void
     *
     * @access    public
     * @since     0.7.3
	*/
	public function load_languages() {
		load_theme_textdomain( 'tally_taxdomain', get_template_directory().'/languages' );
	}
	
	
	/**
     * Defines the constants for use within The Theme. Constants 
     * are prefixed with 'TALLY_' to avoid any naming collisions.
     *
     * @return    void
     *
     * @access    public
     * @since     0.7.3
	*/
	public function constants(){
		define('TALLY_NAME', 'tally');
		define('TALLY_URL', get_template_directory_uri());
		define('TALLY_DRI', get_template_directory());
		define('TALLY_CHILD_URL', get_stylesheet_directory_uri());
		define('TALLY_CHILD_DRI', get_stylesheet_directory());
		
		if(!defined('TALLY_BLOG_IMG_W')){ define('TALLY_BLOG_IMG_W', 960); }
		if(!defined('TALLY_BLOG_IMG_H')){ define('TALLY_BLOG_IMG_H', 500); }
		if(!defined('TALLY_BLOG_G_IMG_W')){ define('TALLY_BLOG_G_IMG_W', 960); }
		if(!defined('TALLY_BLOG_G_IMG_H')){ define('TALLY_BLOG_G_IMG_H', 500); }
		if(!defined('TALLY_IMAGE_RETINA_SUPPORT')){ define('TALLY_IMAGE_RETINA_SUPPORT', false); }
		
		if(!defined('TALLY_THEME_STORE_URL')){ define('TALLY_THEME_STORE_URL', ''); }
		if(!defined('TALLY_THEME_DEMO_URL')){ define('TALLY_THEME_DEMO_URL', ''); }
		if(!defined('TALLY_THEME_ORG_URL')){ define('TALLY_THEME_ORG_URL', ''); }
		if(!defined('TALLY_THEME_DOC_URL')){ define('TALLY_THEME_DOC_URL', ''); }
		if(!defined('TALLY_THEME_SUPPORT_URL')){ define('TALLY_THEME_SUPPORT_URL', ''); }
		if(!defined('TALLY_THEME_MORE_URL')){ define('TALLY_THEME_MORE_URL', ''); }
		if(!defined('TALLY_THEME_NAME')){ define('TALLY_THEME_NAME', ''); }
		
		/*  Constant for remove or active 
			some part of the theme
		----------------------------------*/
		define('TALLY_LAYOUT_TOPBAR_REMOVE', apply_filters('tally_layout_topbar_remove', false));
		define('TALLY_LAYOUT_SUBHEADER_REMOVE', apply_filters('tally_layout_subheader_remove', false));
		define('TALLY_LAYOUT_FOOTER_WIDGETS_REMOVE', apply_filters('tally_layout_footer_widgets_remove', false));
		define('TALLY_LAYOUT_FOOTER_REMOVE', apply_filters('tally_layout_footer_remove', false));
	}
	
	
	/**
     * Defines Theme Supports
     *
     * @return    void
     *
     * @access    public
     * @since     0.7.3
	*/
	public function theme_supports() {		
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio', 'chat' ) );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_filter('widget_text', 'do_shortcode');
	}
	
	
	/**
     * Defines The Menu of the theme
     *
     * @return    void
     *
     * @access    public
     * @since     0.7.3
	*/
	public function theme_menu() {
		$menus = array();
		
		$menus['main_menu'] =  'Main Menu';
		$menus['footer_menu'] =  'Footer Menu';
		$menus['alt_menu'] =  'Header Alt Menu';
		
		register_nav_menus($menus);	
	}
		
		
	
	
	/**
     * Defines Widget Area of the theme
     *
     * @return    void
     *
     * @access    public
     * @since     0.7.3
	*/
	public function register_sidebar(){
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
		register_sidebar( array(
			'name' => __('Footer Widget #5', 'tally_taxdomain'),
			'id' => 'footer_widget_5',
			'description' => __('Footer Widget #5', 'tally_taxdomain'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => "</div>",
			'before_title' => '<h4 class="heading">',
			'after_title' => '</h4>',
		));
		register_sidebar( array(
			'name' => __('Footer Widget #6', 'tally_taxdomain'),
			'id' => 'footer_widget_6',
			'description' => __('Footer Widget #6', 'tally_taxdomain'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => "</div>",
			'before_title' => '<h4 class="heading">',
			'after_title' => '</h4>',
		));
	}
	
	
	/**
     * This function load option tree plugin
     *
     * @return    void
     *
     * @access    public
     * @since     0.7.3
	*/
	public function load_option_tree(){
		/* Loading the Option Tree
		----------------------------------*/
		add_filter( 'ot_show_pages', '__return_false' );
		add_filter( 'ot_override_forced_textarea_simple', '__return_true' );
		add_filter( 'ot_header_version_text', '__return_false' );
	}
	
	
	/**
     * Load the theme functions files
     *
     * @return    void
     *
     * @access    public
     * @since     0.7.3
	*/
	public function inludes(){
		
		/* Loading vandors files
		----------------------------------*/
		if(!function_exists('mr_image_resize')){ include('vandors/mr-image-resize.php'); }
		if(!class_exists( 'TGM_Plugin_Activation')){ include('vandors/class-tgm-plugin-activation.php'); }
		
		
		
		/* Loading Includes files
		----------------------------------*/
		include('includes/custom-functions.php');
		include('includes/breadcrumb.php');
		include('includes/scripts-loader.php');
		include('includes/color-management.php');
		include('includes/default-theme-options.php');
		if(class_exists( 'TGM_Plugin_Activation')){ include('includes/recommended-plugin-list.php'); }
		
		
		
		/* Loading Setup files
		----------------------------------*/
		include('setup/the-theme-setup.php');
		include('setup/free-theme-notice.php');
		include('setup/help-links.php');
		
		
		
		/* Loading the Metaboxes
		----------------------------------*/
		if(function_exists('ot_register_meta_box')){
			tally_file_dri('metaboxs/_m_post-formats.php');
			tally_file_dri('metaboxs/_m_blog-template.php');
			tally_file_dri('metaboxs/_m_pages.php');
			tally_file_dri('metaboxs/_m_action.php');
		}
		
		
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
		tally_file_dri('options/_o_action.php');
		tally_file_dri('options/_o_advance.php');
		
		
		/* Loading Structure
		----------------------------------*/		
		tally_file_dri('structure/_st_topbar.php');
		tally_file_dri('structure/_st_header.php');
		tally_file_dri('structure/subheader/_st_subheader.php');
		tally_file_dri('structure/_st_footer-widgets.php');
		tally_file_dri('structure/_st_footer.php');
		tally_file_dri('structure/_st_sidebar.php');
		tally_file_dri('structure/_st_layout.php');
		
		tally_file_dri('structure/_st_comments.php');
		
		tally_file_dri('structure/_st_post.php');
		tally_file_dri('structure/_st_404.php');
		tally_file_dri('structure/_st_page.php');
		tally_file_dri('structure/_st_search.php');
		tally_file_dri('structure/_st_home.php');
		tally_file_dri('structure/_st_single.php');
		tally_file_dri('structure/_st_archive.php');
		tally_file_dri('structure/_st_template-blog.php');
		tally_file_dri('structure/_st_template-full-width.php');
		
		tally_file_dri('structure/_st_preloader.php');
	}
	
	
	/**
	 * Make Responsive Video
	 *
     * Wrap the video embed in a container for scaling using "embed_oembed_html" filter 
	 * This function use some javascript to make videos responsive
     *
     * @return    Modify embeds output
     *
     * @access    public
     * @since     0.7.3
	*/
	function responsive_embed_output( $html, $url, $attr ) {
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
}

endif;