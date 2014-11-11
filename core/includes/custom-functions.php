<?php
/* Layout of the Pages
-------------------------------------------------*/
function tally_layout(){
	do_action( 'tally_template_init' );
	do_action( 'tally_html_before' );
	get_header();
	echo '<div id="wrapper">';
	
		do_action( 'tally_before_header' );
		do_action( 'tally_header' );
		do_action( 'tally_after_header' );
		
		echo '<div id="main" class="'.apply_filters('tally_main_class', '').'">';
			echo '<div id="main-inner">';
			do_action( 'tally_before_content_sidebar_area' );
				echo '<div id="content-sidebar-wrap">';
					do_action( 'tally_before_content' );
						echo '<div id="content">';
							echo '<div id="content-inner" class="hfeed">';
								do_action( 'tally_before_loop' );
								do_action( 'tally_loop' );
								do_action( 'tally_after_loop' );
							echo '</div>';
						echo '</div>';
					do_action( 'tally_after_content' );
				echo '</div>';
			do_action( 'tally_after_content_sidebar_area' );
			echo '</div>';
		echo '</div>';
		
		do_action( 'tally_before_footer' );
		do_action( 'tally_footer' );
		do_action( 'tally_after_footer' );
	
	echo '</div>';
	get_footer();
	do_action( 'html_footer' );
}


/* Resize image
-------------------------------------------------*/
if(!function_exists('tally_image_size')):
function tally_image_size($url, $width = '', $height = '', $crop = true, $align = '', $retina = TALLY_IMAGE_RETINA_SUPPORT){
	global $wpdb, $blog_id;
	
    $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$url'";
    $id = $wpdb->get_var($query);
	
	/*	
	$site_url = get_blog_option($blog_id,'siteurl');
	$absulate_url = str_replace($site_url,'',$url);
	if(!file_exists($absulate_url)){
		$url == "";
	}
	*/
	
	if($url == NULL){ 
		$url = 'http://placehold.it/'.$width.'x'.$height; 
		return $url;
	}
	
	if(function_exists('mr_image_resize')){
		if($id == false){
			return $url;
		}else{
			return mr_image_resize($url, $width, $height, $crop, $align, $retina);
		}
	}else{
		return $url;
	}
}
endif;



/* closing div
-------------------------------------------------*/
if(!function_exists('tally_div_close')):
	function tally_div_close(){
		echo '</div>';	
	}
endif;


/* closing div
-------------------------------------------------*/
if(!function_exists('tally_check')):
	function tally_check(){
		$tally = TALLY_NAME.'512';
		$child =  TALLY_THEME_NAME;	
		$filter = TALLY_NAME.md5($tally.$child);
		return apply_filters($filter, false);
	}
endif;

if(!function_exists('tally_check_see')):
	function tally_check_see(){
		$tally = TALLY_NAME.'512';
		$child =  TALLY_THEME_NAME;	
		$filter = TALLY_NAME.md5($tally.$child);
		return $filter;
	}
endif;

/* Theme template file loader
-------------------------------------------------*/
if(!function_exists('tally_file_dri')):
	function tally_file_dri($file, $data = NULL){
		if(file_exists(get_stylesheet_directory().'/'.$file)){
			include(get_stylesheet_directory().'/'.$file);
		}elseif(file_exists(get_stylesheet_directory().'/app/'.$file)){
			include(get_stylesheet_directory().'/app/'.$file);
		}elseif(file_exists(get_template_directory().'/'.$file)){
			include(get_template_directory().'/'.$file);
		}elseif(file_exists(get_template_directory().'/app/'.$file)){
			include(get_template_directory().'/app/'.$file);
		}elseif(file_exists(get_template_directory().'/core/'.$file)){
			include(get_template_directory().'/core/'.$file);
		}
	}
endif;


/* assets file loader function
-------------------------------------------------*/
if(!function_exists('tally_assets_file')):
	function tally_assets_file($file){
		if(file_exists(get_stylesheet_directory().'/'.$file)){
			return get_stylesheet_directory_uri().'/'.$file;
		}elseif(file_exists(get_stylesheet_directory().'/app/assets/'.$file)){
			return get_stylesheet_directory_uri().'/app/assets/'.$file;
		}elseif(file_exists(get_template_directory().'/assets/'.$file)){
			return get_template_directory_uri().'/assets/'.$file;
		}elseif(file_exists(get_template_directory().'/app/assets/'.$file)){
			return get_template_directory_uri().'/app/assets/'.$file;
		}elseif(file_exists(get_template_directory().'/core/assets/'.$file)){
			return get_template_directory_uri().'/core/assets/'.$file;
		}
	}
endif;


/* assets file loader function
-------------------------------------------------*/
if(!function_exists('tally_assets_file2')):
	function tally_assets_file2($folder, $file){
		if(file_exists(get_stylesheet_directory().'/'.$file)){
			return get_stylesheet_directory_uri().'/'.$file;
		}
		elseif(file_exists(get_stylesheet_directory().'/'.$folder.'/'.$file)){
			return get_stylesheet_directory_uri().'/'.$folder.'/'.$file;
		}
		elseif(file_exists(get_stylesheet_directory().'/assets/'.$folder.'/'.$file)){
			return get_stylesheet_directory_uri().'/assets/'.$folder.'/'.$file;
		}
		elseif(file_exists(get_template_directory().'/'.$file)){
			return get_template_directory_uri().'/'.$file;
		}
		elseif(file_exists(get_template_directory().'/'.$folder.'/'.$file)){
			return get_template_directory_uri().'/'.$folder.'/'.$file;
		}
		elseif(file_exists(get_template_directory().'/assets/'.$folder.'/'.$file)){
			return get_template_directory_uri().'/assets/'.$folder.'/'.$file;
		}
		elseif(file_exists(get_template_directory().'/app/assets/'.$folder.'/'.$file)){
			return get_template_directory_uri().'/app/assets/'.$folder.'/'.$file;
		}
		elseif(file_exists(get_template_directory().'/core/assets/'.$folder.'/'.$file)){
			return get_template_directory_uri().'/core/assets/'.$folder.'/'.$file;
		}
	}
endif;



/* Option of the theme
-------------------------------------------------*/
if(!function_exists('tally_option')):
function tally_option($name, $default_data = NULL){
	$all_default_filter_data = apply_filters('tally_option_std', array());
	
	if(isset($all_default_filter_data[$name]) && ($all_default_filter_data[$name] != NULL)){ $default = $all_default_filter_data[$name]; }
	else{ $default = $default_data; }
	
	if(function_exists('ot_get_option')){
		$output = ot_get_option($name);
	}
	
	if( $output == NULL ){ $output = $default; }
	
	return $output;
}
endif;

if(!function_exists('tally_option_std')):
function tally_option_std($name, $default_data = NULL){
	$all_default_filter_data = apply_filters('tally_option_std', array());
	$output = $default_data;
	if(isset($all_default_filter_data[$name]) && ($all_default_filter_data[$name] != NULL)){ $output = $all_default_filter_data[$name]; }
	return $output;
}
endif;


if(!function_exists('tally_get_serialize_option_data')):
function tally_get_serialize_option_data(){
	$output = '';
	
	if( function_exists('ot_options_id') ){
		$field_settings = get_option( ot_options_id());
		$output = tally_encode( serialize( $field_settings ));
	}
	
	return $output;
}
endif;





/* Sidebar Layout 
-------------------------------------------------*/
function tally_sitebar_layout_option(){
	global $wp_query;
	
	//* If viewing a singular page or post
	if ( is_singular() ) {
		$custom_field = get_post_meta( get_the_ID(), 'tally_sidebar_layout', true );
		$site_layout  = $custom_field ? $custom_field : tally_option( 'sidebar_layout' );
	}else{
		$site_layout  = tally_option( 'sidebar_layout', 'full-width-content' );
	}
	
	return apply_filters('tally_sitebar_layout_option', $site_layout);
}



/* is Comment
-------------------------------------------------*/
function tally_is_comment_template(){
	global $wp_query;
	
	if(is_page()){
		$option = tally_option( 'enable_page_comment', 'yes' );
	}else{
		$option = tally_option( 'enable_post_comment', 'yes' );
	}

	//* If viewing a singular page or post
	if(is_page()){
		$custom_field = get_post_meta( get_the_ID(), 'tally_is_comment', true );
		$site_layout  = $custom_field ? $custom_field : $option;
	}elseif ( is_singular() ) {
		$custom_field = get_post_meta( get_the_ID(), 'tally_is_comment', true );
		$site_layout  = $custom_field ? $custom_field : $option;
	}else{
		$site_layout  = $option;
	}
	
	return apply_filters('tally_is_comment_template', $site_layout);
}




/* Footer Widget Layour Option
-------------------------------------------------*/
function tally_footer_widget_layout_option(){
	global $wp_query;
	$widget_layout  = tally_option( 'footer_widget_layout', 3);
	
	if(!is_404() && get_post()){
		$custom_field = get_post_meta( get_the_ID(), 'tally_footer_widget_layout', true );
		$widget_layout  = $custom_field ? $custom_field : $widget_layout;
	}
	
	if(TALLY_LAYOUT_FOOTER_WIDGETS_REMOVE == true){ $widget_layout  = 'none'; }
	
	return apply_filters('tally_footer_widget_layout_option', $widget_layout);
}


/* Footer Widget Columns Option
-------------------------------------------------*/
function tally_footer_widget_columns_option($widget_number){
	global $wp_query;
	
	$footer_widget_layout = tally_footer_widget_layout_option();
	$footer_widget_meta_layout = get_post_meta( get_the_ID(), 'tally_footer_widget_layout', true );
	$widget_column = '24';
						
	if( $footer_widget_layout == '4' ){ $widget_column = '6'; }
	elseif( $footer_widget_layout == '3' ){ $widget_column = '8'; }
	elseif( $footer_widget_layout == '2' ){ $widget_column = '12'; }
	elseif( $footer_widget_layout == '1' ){ $widget_column = '24'; }
	elseif( $footer_widget_layout == '5' ){ $widget_column = 'one_5'; }
	elseif( $footer_widget_layout == '6' ){ $widget_column = '4'; }
	
	if( (tally_option('footer_widget_'.$widget_number.'_column_width')!='0') && (tally_option('footer_widget_custom_width')=='on') ){ 
		$widget_column = tally_option('footer_widget_'.$widget_number.'_column_width'); 
	}
	
	if(tally_option( 'footer_widget_layout') !== $footer_widget_meta_layout){
		if( $footer_widget_meta_layout == '4' ){ $widget_column = '6'; }
		elseif( $footer_widget_meta_layout == '3' ){ $widget_column = '8'; }
		elseif( $footer_widget_meta_layout == '2' ){ $widget_column = '12'; }
		elseif( $footer_widget_meta_layout == '1' ){ $widget_column = '24'; }
		elseif( $footer_widget_meta_layout == '5' ){ $widget_column = 'one_5'; }
		elseif( $footer_widget_meta_layout == '6' ){ $widget_column = '4'; }
	}
	
	if(!is_404() && get_post()){
		if((get_post_meta( get_the_ID(), 'tally_footer_widget_'.$widget_number.'_column_width', true )!='0') && (get_post_meta( get_the_ID(),'tally_footer_widget_custom_width',true)=='on') ){
			$widget_column = get_post_meta( get_the_ID(), 'tally_footer_widget_'.$widget_number.'_column_width', true ); 
		}
	}
	
	return apply_filters('tally_footer_widget_columns_option', $widget_column);
}


function tally_is_preloader(){
	$preloader = tally_option( 'preloader', 'yes');
	return apply_filters('tally_is_preloader', $preloader);
}



/* Footer Layour Option
-------------------------------------------------*/
function tally_is_footer(){
	global $wp_query;
	$footer_layout = tally_option( 'footer_layout', 'yes');
	
	if(!is_404() && get_post()){
		$custom_field = get_post_meta( get_the_ID(), 'tally_footer_layout', true );
		$footer_layout  = $custom_field ? $custom_field : $footer_layout;
	}
	
	if(TALLY_LAYOUT_FOOTER_REMOVE == true){ $footer_layout  = 'none'; }
	
	return $footer_layout;
	return apply_filters('tally_is_footer', $footer_layout);
}


/* Is topbar
-------------------------------------------------*/
function tally_is_topbar(){
	global $wp_query;
	$topbar  = tally_option( 'is_topbar', 'no');
	
	if(!is_404() && get_post()){
		$custom_field = get_post_meta( get_the_ID(), 'tally_is_topbar', true );
		$topbar  = $custom_field ? $custom_field : $topbar;
	}
	
	if(TALLY_LAYOUT_TOPBAR_REMOVE == true){ $topbar  = 'no'; }
	
	return apply_filters('tally_is_topbar', $topbar);
}


/* Is subheader
-------------------------------------------------*/
function tally_is_subheader(){
	global $wp_query;
	$subheader  = tally_option( 'is_subheader', 'yes');
	
	if(!is_404() && get_post()){
		$custom_field = get_post_meta( get_the_ID(), 'tally_is_subheader', true );
		$subheader  = $custom_field ? $custom_field : $subheader;
	}
	
	if(TALLY_LAYOUT_SUBHEADER_REMOVE == true){ $subheader  = 'no'; }
	
	return apply_filters('tally_is_subheader', $subheader);
}


/* Is header
-------------------------------------------------*/
function tally_is_header(){
	global $wp_query;
	$header  = tally_option( 'is_header', 'yes');
	
	if(!is_404() && get_post()){
		$custom_field = get_post_meta( get_the_ID(), 'tally_is_header', true );
		$header  = $custom_field ? $custom_field : $header;
	}
	
	return apply_filters('tally_is_header', $header);
}



/* Title Output
-------------------------------------------------*/
if(!function_exists('tally_wp_title')):
	function tally_wp_title( $title, $sep ) {
		global $paged, $page;
	
		if ( is_feed() )
			return $title;
	
		// Add the site name.
		$title .= get_bloginfo( 'name' );
	
		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";
	
		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'tally_taxdomain' ), max( $paged, $page ) );
	
		return $title;
	}
	add_filter( 'wp_title', 'tally_wp_title', 10, 2 );
endif;




 /* Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
-------------------------------------------------*/
function tally_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )	
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'tally_page_menu_args' );




/* Logo / title output function
-------------------------------------------------*/
function tallyfn_logo($logo = '', $des = true){
	?>
    <div id="logo">
		<?php if($logo != ''): ?>
			<a href="<?php echo home_url(); ?>"><img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>"></a>
		<?php else: ?>
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<?php if($des == true){ ?><span><?php bloginfo( 'description' ); ?></span><?php } ?>
		<?php endif; ?>
	</div>
    <?php	
}




/* Output Theme title
-------------------------------------------------*/
function tallyfn_title($tally_custom_page_title = NULL) {
	
	global $wp_query;
	$output = the_title('', '', false);
	
	if (is_tax()) $output = single_term_title( "", false );
	elseif ((get_post_type() == 'product') && is_archive()) $output =  get_the_title( woocommerce_get_page_id( 'shop' ) );
	elseif (is_search()) $output = __('Search Results', 'tally_taxdomain') . ' &quot;' . get_search_query() . '&quot;';
	elseif (!(is_404()) && (is_single()) || (is_page())) $output = get_the_title();
	elseif (is_404()) $output = __('Not Found', 'tally_taxdomain');
	elseif (is_home()) $output = __('Blog', 'tally_taxdomain');
	elseif (is_archive()) {
		if (is_category()) $output = __('Category Archive', 'tally_taxdomain') . ' &raquo; ' . single_cat_title('', false);
		if (is_author()) {
			$curauth = get_userdata(get_query_var('author'));			
			$output = __('Author Archive', 'tally_taxdomain') . ' &raquo; ' . $curauth->display_name;
		}
		if (is_tag()) $output = __('Tag Archive', 'tally_taxdomain') . ' &raquo; ' . single_tag_title('', false);
		if (is_year()) $output = __('Yearly Archive', 'tally_taxdomain') . ' &raquo; ' . get_the_date('Y');
		if (is_month()) $output = __('Monthly Archive', 'tally_taxdomain') . ' &raquo; ' . get_the_date('F Y');
		if (is_day()) $output = __('Daily Archive', 'tally_taxdomain') . ' &raquo; ' . get_the_date('d F Y');
	}
	else $output = the_title('', '', false);
	
	if( $tally_custom_page_title != NULL ){ echo $tally_custom_page_title; }else{ echo $output; }
}



/* Output Theme title
-------------------------------------------------*/
function tallyfn_title2($tally_custom_page_title = NULL) {
	
	global $wp_query;
	$output = '';
	
	if ( is_home()){
		$home_page = get_page( get_queried_object_id() );
		$output = get_the_title( $home_page->ID );
	}elseif ( is_singular() ) {
		/* Get singular post variables needed. */
		$post = get_queried_object();
		$post_id = absint( get_queried_object_id() );
		$post_type = $post->post_type;
		$parent = absint( $post->post_parent );
		/* Get the post type object. */
		$post_type_object = get_post_type_object( $post_type );
	}else{
		$output = get_the_title();
	}
	
	if( $tally_custom_page_title != NULL ){ echo $tally_custom_page_title; }else{ echo $output; }
}




/* Output Content Nav
-------------------------------------------------*/
function tallyfn_paginate($query = ''){
	
	$output = null;
	
	if ($query->max_num_pages > 1) {
		$output .= '<div class="pagenav">';
			$big = 999999999; // need an unlikely integer		
			$output .= paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $query->max_num_pages
			));
		$output .= '</div>';
	}
	
	return $output;
}



/* Output Content Nav
-------------------------------------------------*/
function tallyfn_paginate2(){
	global $wp_query; 
	$query = $wp_query;
	$output = null;
	
	if ($query->max_num_pages > 1) {
		$output .= '<div class="pagenav">';
			$big = 999999999; // need an unlikely integer		
			$output .= paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $query->max_num_pages
			));
		$output .= '</div>';
	}
	
	return $output;
}




/* Widget Counter
-------------------------------------------------*/
function tallyfn_count_widgets($sidebar_id, $echo = true) {
    $the_sidebars = wp_get_sidebars_widgets();
    if (!isset($the_sidebars[$sidebar_id]))
        return 0;
    if ($echo)
        echo count($the_sidebars[$sidebar_id]);
    else
        return count($the_sidebars[$sidebar_id]);
}




/* Widget Column Class
-------------------------------------------------*/
function tallyfn_column_class($sidebar_id){
	$columns = tallyfn_count_widgets($sidebar_id, false);
	
	switch ($columns) {	    
	    case 1:
	        return '12';
	        break;
	    case 2:
	        return '6';
	        break;
	    case 3:
	        return '4';
	        break;
	    case 4:
	        return '3';
	        break;
	    case 0:
	    default:
	        return '4';
	        break;
	}
}




/* tally_max_charlength
-------------------------------------------------*/
function tally_max_charlength($charlength, $text = null) {

        if ($text) {
            $excerpt = $text;
        } else {
            $excerpt = get_the_excerpt();
        }

        $charlength++;
        if (strlen($excerpt)>$charlength) {
            $subex   = substr($excerpt,0,$charlength-5);
            $exwords = explode(" ",$subex);
            $excut   = -(strlen($exwords[count($exwords)-1]));
            if ($excut<0) {
                return substr($subex,0,$excut);
            } else {
                return $subex;
            }
            return '...';
        } else {
            return $excerpt;
        }
    }
	


/*-**************************************************************
	hex2rgb
-****************************************************************/
function tally_hex2rgb($hex, $arry_format = false) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   
   if( $arry_format == true ){
		return $rgb; // returns an array with the rgb values
   }else{
		return implode(",", $rgb); // returns the rgb values separated by commas
   } 
}





if ( ! function_exists( 'ot_get_option' ) ) {

  function ot_get_option( $option_id, $default = '' ) {
    
    /* get the saved options */ 
    $options = get_option( 'option_tree' );
    
    /* look for the saved value */
    if ( isset( $options[$option_id] ) && '' != $options[$option_id] ) {
        
      return ot_wpml_filter( $options, $option_id );
      
    }
    
    return $default;
    
  }
  
}



if ( ! function_exists( 'ot_wpml_filter' ) ) {

  function ot_wpml_filter( $options, $option_id ) {
      
    // Return translated strings using WMPL
    if ( function_exists('icl_t') ) {
      
      $settings = get_option( 'option_tree_settings' );
      
      if ( isset( $settings['settings'] ) ) {
      
        foreach( $settings['settings'] as $setting ) {
          
          // List Item & Slider
          if ( $option_id == $setting['id'] && in_array( $setting['type'], array( 'list-item', 'slider' ) ) ) {
          
            foreach( $options[$option_id] as $key => $value ) {
          
              foreach( $value as $ckey => $cvalue ) {
                
                $id = $option_id . '_' . $ckey . '_' . $key;
                $_string = icl_t( 'Theme Options', $id, $cvalue );
                
                if ( ! empty( $_string ) ) {
                
                  $options[$option_id][$key][$ckey] = $_string;
                  
                }
                
              }
            
            }
          
          // All other acceptable option types
          } else if ( $option_id == $setting['id'] && in_array( $setting['type'], apply_filters( 'ot_wpml_option_types', array( 'text', 'textarea', 'textarea-simple' ) ) ) ) {
          
            $_string = icl_t( 'Theme Options', $option_id, $options[$option_id] );
            
            if ( ! empty( $_string ) ) {
            
              $options[$option_id] = $_string;
              
            }
            
          }
          
        }
      
      }
    
    }
    
    return $options[$option_id];
  
  }

}




function tally_css_rule($selector, $style, $value, $display = true){
	$css = $selector . "{ ".$style.":".$value."; }\n";
	
	if($display == true){
		echo $css;
	}else{
		return $css;
	}
}


/**
 * Helper function to return encoded strings
 *
 * @return    string
 *
 * @access    public
 * @since     0.8.3
 */
function tally_encode( $value ) {

  $func = 'base64' . '_encode';
  return $func( $value );
  
}

/**
 * Helper function to return decoded strings
 *
 * @return    string
 *
 * @access    public
 * @since     0.8.3
 */
function tally_decode( $value ) {

  $func = 'base64' . '_decode';
  return $func( $value );
  
}



/* Search bar with icon
-------------------------------------------------*/
function tally_icon_search_bar($class = ''){
?>
<div class="tally_icon_search_bar <?php echo $class; ?>">
	<a href="#" class="the_search_icon"><i class="fa fa-search"></i></a>
	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
		<div class="search-form-inner">
			<input type="text" value="" name="s" id="s" placeholder="<?php _e('Search', 'tally_textdomain'); ?>" />
			<input type="submit" id="searchsubmit" value="<?php _e('Search', 'tally_textdomain'); ?>" />
		</div>
	</form>
</div>
<?php	
}



/*
   WPML language switcher
-----------------------------------*/
function tally_wpml_language_switcher( $class = '' ){
	if(function_exists('icl_get_languages')){
		echo '<div class="tally_wpml_language_switcher '.$class.'">';
			$items = icl_get_languages('skip_missing=1&orderby=id&order=asc&link_empty_to=empty');
			if(is_array($items) && !empty($items)){
				echo '<ul class="main-ul-holder">';
					echo '<li>';
						foreach( $items as $item ){
							if($item['active'] == 1){
								echo '<a href="#" class="lan-menu"><span>'.$item['language_code'].'</span><i class="fa fa-angle-down"></i></a>';
							}
						}
						echo '<ul class="flag-list">';
							foreach( $items as $item ){
								echo '<li>';
									echo '<a href="'.$item['url'].'" class="active_'.$item['active'].'" title="'.$item['translated_name'].'">';
										echo '<img src="'.$item['country_flag_url'].'" alt="'.$item['translated_name'].'" /> <span>'.$item['native_name'].'</span>';
									echo '</a>';
								echo '</li>';
							}
						echo '</ul>';
					echo '</li>';
				echo '</ul>';
			}
		echo '</div>';
	}
}


/*
  Woocommerce Cart
-----------------------------------*/
function tally_woocommerce_cart($class = ''){
	/** Fail silently if WooCommerce is not activated */
	if ( ! in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) return;
	global $woocommerce;
	echo '<div class="tally_woocommerce_cart '.$class.'">';
		echo tally_woocommerce_cart_content();
	echo '</div>';
	
}
add_filter('add_to_cart_fragments', 'tally_woocommerce_add_to_cart_fragment');
function tally_woocommerce_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	
	ob_start();
	
	echo tally_woocommerce_cart_content();
	
	$fragments['a.tally-woo-cart-contents'] = ob_get_clean();
	
	return $fragments;
}

if(!function_exists('tally_woocommerce_cart_content')){
	function tally_woocommerce_cart_content(){
		global $woocommerce;
		?>
		<a class="tally-woo-cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'tally_child_textdomain'); ?>">
			<i class="fa fa-shopping-cart"></i>
			<span class="tally_woo_items">
				<?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'tally_child_textdomain'), $woocommerce->cart->cart_contents_count);?>
			</span>
		</a>
		<?php
	}
}


/*
  Social Icons
-----------------------------------*/
function tally_social_icons($class = ''){
	?>
	<?php if(tally_option('enable_social_icons', 'yes') == 'yes'): ?>
		<?php if(is_array(tally_option('social_icons'))): ?>
			<div class="tally-social-icons <?php echo $class; ?>">
				<?php foreach(tally_option('social_icons') as $social_icon): ?>
					<a href="<?php echo $social_icon['link']; ?>" class="" title="<?php echo $social_icon['title']; ?>" rel="nofollow" target="_blank">
						<i class="fa <?php echo $social_icon['icon']; ?>"></i>
					</a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	<?php	
}