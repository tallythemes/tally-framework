<?php
header("Content-type: text/css; charset: UTF-8");

$site_accent_color = tally_color('site_accent_color', '', false);
$site_accent2_color = tally_color('site_accent2_color', '', false);
$site_background = tally_option('site_background');
$color_headings_light = tally_color('color_headings_light', '', false);
$color_headings_dark = tally_color('color_headings_dark', '', false);
$color_subheading_light = tally_color('color_subheading_light', '', false);
$color_text_light = tally_color('color_text_light', '', false);
$color_text_dark = tally_color('color_text_dark', '', false);
$color_meta_light = tally_color('color_meta_light', '', false);
$color_meta_dark = tally_color('color_meta_dark', '', false);
$color_border_light = tally_color('color_border_light', '', false);
$color_border_dark = tally_color('color_border_dark', '', false);
$color_bg_light = tally_color('color_bg_light', '', false);
$color_bg_dark = tally_color('color_bg_dark', '', false);
$color_inner_bg_light = tally_color('color_inner_bg_light', '', false);
$color_inner_bg_dark = tally_color('color_inner_bg_dark', '', false);
	
$color_topbar_mood = tally_color('color_topbar_mood', '', false);
$color_topbar_bg = tally_option('color_topbar_bg');
$color_header_mood = tally_color('color_header_mood', '', false);
$color_header_bg = tally_option('color_header_bg');
	
$color_navigation_text = tally_color('color_navigation_text', '', false);
$color_navigation_border = tally_color('color_navigation_border', '', false);
$color_navigation_bg = tally_color('color_navigation_bg', '', false);
$color_navigation_text_hover = tally_color('color_navigation_text_hover', '', false);
$color_navigation_border_hover = tally_color('color_navigation_border_hover', '', false);
$color_navigation_bg_hover = tally_color('color_navigation_bg_hover', '', false);
$color_navigation_submenu_bg = tally_color('color_navigation_submenu_bg', '', false);
	
$color_subheader_mood = tally_color('color_subheader_mood', '', false);
$color_subheader_bg = tally_option('color_subheader_bg');
$color_content_mood = tally_color('color_content_mood', '', false);
$color_content_bg = tally_option('color_content_bg');
$color_fwidget_mood = tally_color('color_fwidget_mood', '', false);
$color_fwidget_bg = tally_option('color_fwidget_bg');
$color_footer_mood = tally_color('color_footer_mood', '', false);
$color_footer_bg = tally_option('color_footer_bg');
?>
::selection {
	background: <?php echo tally_color('site_accent_color'); ?>;
	color: #fff;
}



<?php
/*Branding*/
if(tally_option('site_layout') == 'box'){
	echo '#wrapper{max-width: 1050px; margin: 30px auto; 
	-webkit-box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.40);
	-moz-box-shadow:    0px 0px 12px rgba(0, 0, 0, 0.40);
	box-shadow:         0px 0px 12px rgba(0, 0, 0, 0.40);}';
}
if(is_array(tally_option('site_background'))){
	$site_background = tally_option('site_background');
	if( isset( $site_background['background-color']) && !empty($site_background['background-color'] ) )
		{ echo 'body{ background-color:'.$site_background['background-color'].'; }'; }
	if( isset( $site_background['background-image']) && !empty($site_background['background-image'] ) )
		{ echo 'body{ background-image:url('.$site_background['background-image'].'); }'; }
	if( isset( $site_background['background-attachment']) && !empty($site_background['background-attachment'] ) )
		{ echo 'body{ background-attachment:'.$site_background['background-attachment'].'; }'; }
	if( isset( $site_background['background-position']) && !empty($site_background['background-position'] ) )
		{ echo 'body{ background-position:'.$site_background['background-position'].'; }'; }
	if( isset( $site_background['background-repeat']) && !empty($site_background['background-repeat'] ) )
		{ echo 'body{ background-repeat:'.$site_background['background-repeat'].'; }'; }
}
		
/*Header*/
if(tally_option('header_height')){echo '#header .hheight , #header, #header #header-inner{ height:'.tally_option('header_height').' !important; }';}
if(tally_option('header_logo_top_margin')){echo '#header #logo{margin-top:'.tally_option('header_logo_top_margin').'; }';}
if(tally_option('header_menu_top_margin')){echo '#header #nav{margin-top:'.tally_option('header_menu_top_margin').'; }';}
if(tally_option('header_menu_top_margin')){echo 'ul.tally-wpml-language-switcher{margin-top:'.tally_option('header_menu_top_margin').'; }';}

if(tally_option('topbar_height')){echo '#topbar-inner{ height:'.tally_option('topbar_height').' !important; }';}
if(tally_option('menu_height')){echo '#navigation-area-inner{ height:'.tally_option('menu_height').' !important; }';}
		
/*subHeader*/
if(tally_option('subheader_bottom_padding')){echo '#subheader{ padding-bottom:'.tally_option('subheader_bottom_padding').'; }';}
if(tally_option('subheader_top_padding')){echo '#subheader{padding-top:'.tally_option('subheader_top_padding').'; }';}
		
		
/*-Typography-*/
if(tally_option('enable_google_fonts') == 'yes'){
	if(tally_option('headings_google_font_family')){
		echo '#wrapper h1, #wrapper h2, #wrapper h3, #wrapper h4, #wrapper h5, #wrapper h6{ '.tally_option('headings_google_font_family').'}';
	}
	if(tally_option('body_google_font_family')){
		echo 'body{ '.tally_option('body_google_font_family').'}';
	}
}
if(tally_option('h1_font_size')){ echo 'h1{ font-size:'.tally_option('h1_font_size').'; }'; }
if(tally_option('h2_font_size')){ echo 'h2{ font-size:'.tally_option('h2_font_size').'; }'; }
if(tally_option('h3_font_size')){ echo 'h3{ font-size:'.tally_option('h3_font_size').'; }'; }
if(tally_option('h4_font_size')){ echo 'h4{ font-size:'.tally_option('h4_font_size').'; }'; }
if(tally_option('h5_font_size')){ echo 'h5{ font-size:'.tally_option('h5_font_size').'; }'; }
if(tally_option('h6_font_size')){ echo 'h6{ font-size:'.tally_option('h6_font_size').'; }'; }
if(tally_option('body_font_size')){ echo 'body{ font-size:'.tally_option('body_font_size').'; }'; }

?>



.tally_woocommerce_cart a .tally_woo_items{ background: <?php echo tally_color('site_accent_color'); ?>;  }
.tally_wpml_language_switcher .lan-menu:hover{ color:<?php tally_color('color_navigation_text_hover'); ?>;  }
.tally_wpml_language_switcher .flag-list{ background:<?php tally_color('color_navigation_submenu_bg','1'); ?>;  }
.tally_wpml_language_switcher .flag-list li a{ border-color:<?php tally_color('color_navigation_border','1'); ?>;  }
		
		
/*------------------------ DARK ------------------------*/
.color_mood_dark{ border-color:<?php tally_color('color_border_dark'); ?>  !important; color: <?php tally_color('color_text_dark'); ?>; }
.color_mood_dark *{ border-color:<?php tally_color('color_border_dark'); ?>  !important; color: <?php tally_color('color_text_dark'); ?>; }
.color_mood_dark{ 
			background: <?php tally_color('color_bg_light'); ?>; color: <?php tally_color('color_text_dark'); ?>; border-color:<?php tally_color('color_border_dark'); ?>; 
}
.color_mood_dark a{ color:<?php echo tally_color('site_accent_color'); ?>; }
.color_mood_dark a:hover{ color:<?php tally_color('site_accent2_color'); ?>; }
.color_mood_dark input,
.color_mood_dark textarea,
.color_mood_dark select{ background:<?php tally_color('color_inner_bg_dark','0.1'); ?>; border-color:<?php tally_color('color_headings_dark', '0.3'); ?>  !important; }
.color_mood_dark input[type="submit"],
.color_mood_dark button[type="submit"]{ 
			background-color:<?php echo tally_color('site_accent_color'); ?>; color:#FFF; border:solid 1px <?php echo tally_color('site_accent_color'); ?> !important; 
}
.color_mood_dark input[type="submit"]:hover{
			background-color:<?php echo tally_color('site_accent2_color'); ?>; color:#FFF; border:solid 1px <?php echo tally_color('site_accent2_color'); ?> !important; 
}
		
.color_mood_dark #comments li.comment,
.color_mood_dark .author-box,
.color_mood_dark .form-allowed-tags{ background:<?php tally_color('color_inner_bg_dark','1'); ?>; border-color:<?php tally_color('color_border_dark', '1'); ?>; }
		
.color_mood_dark .widget_meta ul li, 
.color_mood_dark .widget_pages ul li, 
.color_mood_dark .widget_nav_menu ul li, 
.color_mood_dark .widget_recent_entries ul li, 
.color_mood_dark .widget_archive ul li, 
.color_mood_dark .widget_categories ul li, 
.color_mood_dark .widget_recent_comments ul li { border-color:<?php tally_color('color_border_dark', '0.4'); ?> !important; }
		
.color_mood_dark .widget_meta ul li a,
.color_mood_dark .widget_pages ul li a,
.color_mood_dark .widget_nav_menu ul li a,
.color_mood_dark .widget_recent_entries ul li a,
.color_mood_dark .widget_archive ul li a,
.color_mood_dark .widget_categories ul li a,
.color_mood_dark .widget_recent_comments ul li a{ color:<?php tally_color('color_text_dark'); ?>;  }
.color_mood_dark .widget_meta ul li a:hover,
.color_mood_dark .widget_pages ul li a:hover,
.color_mood_dark .widget_nav_menu ul li a:hover,
.color_mood_dark .widget_recent_entries ul li a:hover,
.color_mood_dark .widget_archive ul li a:hover,
.color_mood_dark .widget_categories ul li a:hover,
.color_mood_dark .widget_recent_comments ul li a:hover{ color:<?php echo tally_color('site_accent_color'); ?>; }
.color_mood_dark .widget_calendar thead>tr>th{ color:<?php tally_color('color_text_dark'); ?>; background:<?php tally_color('color_inner_bg_dark', '1'); ?>; }
		
.color_mood_dark h1, 
.color_mood_dark h2, 
.color_mood_dark h3, 
.color_mood_dark h4,
.color_mood_dark h5, 
.color_mood_dark h6{ color:<?php tally_color('color_headings_dark'); ?> !important; }
		
.color_mood_dark .subheading{ color:<?php tally_color('color_subheading_dark'); ?>;  }
.color_mood_dark .metatext{ color:<?php tally_color('color_meta_dark'); ?>;  }
		
.color_mood_dark .post.type-post .entry-readmore a,
.color_mood_dark .post.type-post.format-aside,
.color_mood_dark .post.type-post.format-quote{ background-color:<?php echo tally_color('site_accent_color'); ?>; }
		
.color_mood_dark .post.type-post .entry-title a{ color:<?php tally_color('color_headings_dark'); ?>; }
		
.color_mood_dark .entry-meta-item a,
.color_mood_dark .entry-meta-item{ color:<?php tally_color('color_headings_dark'); ?>; }
		
#header.color_mood_dark,
#subheader.color_mood_dark,
#fwidget.color_mood_dark{ color: <?php tally_color('color_text_dark'); ?>; border-color:<?php tally_color('color_border_dark'); ?>; }
		
.header-sticky #header.stickyMenu.color_mood_dark{
	background: <?php tally_color('color_bg_light'); ?>;
	box-shadow: 0px 0px 3px 0px <?php tally_color('color_border_dark'); ?>;
	border-color:<?php tally_color('color_border_dark', 0.4); ?>;
}


.color_mood_dark .tally_icon_search_bar .search-form-inner{ background:<?php tally_color('color_inner_bg_dark','1'); ?>;  }
.color_mood_dark .tally_icon_search_bar .search-form-inner:after{ border-bottom-color:<?php tally_color('color_inner_bg_dark','1'); ?>;  }
.color_mood_light .tally_icon_search_bar .search-form-inner:before{ border-bottom-color:<?php tally_color('color_border_light','1'); ?>;  }




/*------------------------ LIGHT ------------------------*/
.color_mood_light{ border-color:<?php tally_color('color_border_light'); ?> !important; color: <?php tally_color('color_text_light'); ?>; }
.color_mood_light *{ border-color:<?php tally_color('color_border_light'); ?> !important; color: <?php tally_color('color_text_light'); ?>; }
.color_mood_light{ 
	background: <?php tally_color('color_bg_dark'); ?>; color: <?php tally_color('color_text_light'); ?>; border-color:<?php tally_color('color_border_light'); ?>; 
}
.color_mood_light a{ color:<?php echo tally_color('site_accent_color'); ?>; }
.color_mood_light a:hover{ color:<?php tally_color('site_accent2_color'); ?>; }
.color_mood_light input,
.color_mood_light textarea,
.color_mood_light select{ background:<?php tally_color('color_inner_bg_light', '0.4'); ?>; border-color:<?php tally_color('color_border_light', '1'); ?>  !important; }
.color_mood_light input[type="submit"],
.color_mood_light button[type="submit"]{ 
	background-color:<?php echo tally_color('site_accent_color'); ?>; color:#FFF; border:solid 1px <?php echo tally_color('site_accent_color'); ?> !important; 
}
.color_mood_light input[type="submit"]:hover{
	background-color:<?php echo tally_color('site_accent2_color'); ?>; color:#FFF; border:solid 1px <?php echo tally_color('site_accent2_color'); ?> !important; 
}
		
.color_mood_light #comments li.comment,
.color_mood_light .author-box,
.color_mood_light .form-allowed-tags{ background:<?php tally_color('color_inner_bg_light', '1'); ?>; border-color:<?php tally_color('color_border_light', '1'); ?>; }
		
.color_mood_light .widget_meta ul li, 
.color_mood_light .widget_pages ul li, 
.color_mood_light .widget_nav_menu ul li, 
.color_mood_light .widget_recent_entries ul li, 
.color_mood_light .widget_archive ul li, 
.color_mood_light .widget_categories ul li, 
.color_mood_light .widget_recent_comments ul li { border-color:<?php tally_color('color_border_light', '0.4'); ?> !important; }
		
.color_mood_light .widget_meta ul li a,
.color_mood_light .widget_pages ul li a,
.color_mood_light .widget_nav_menu ul li a,
.color_mood_light .widget_recent_entries ul li a,
.color_mood_light .widget_archive ul li a,
.color_mood_light .widget_categories ul li a,
.color_mood_light .widget_recent_comments ul li a{ color:<?php tally_color('color_text_light'); ?>; }
.color_mood_light .widget_meta ul li a:hover,
.color_mood_light .widget_pages ul li a:hover,
.color_mood_light .widget_nav_menu ul li a:hover,
.color_mood_light .widget_recent_entries ul li a:hover,
.color_mood_light .widget_archive ul li a:hover,
.color_mood_light .widget_categories ul li a:hover,
.color_mood_light .widget_recent_comments ul li a:hover{ color:<?php echo tally_color('site_accent_color'); ?>; }
.color_mood_light .widget_calendar thead>tr>th{ color:<?php tally_color('color_text_light'); ?>; background:<?php tally_color('color_inner_bg_light', '1'); ?>; }
		
.color_mood_light h1, 
.color_mood_light h2, 
.color_mood_light h3, 
.color_mood_light h4,
.color_mood_light h5, 
.color_mood_light h6{ color:<?php tally_color('color_headings_light'); ?> !important; }
		
.color_mood_light .subheading{ color:<?php tally_color('color_subheading_light'); ?>;  }
.color_mood_light .metatext{ color:<?php tally_color('color_meta_light'); ?>;  }
		
.color_mood_light .post.type-post .entry-readmore a,
.color_mood_light .post.type-post.format-aside,
.color_mood_light .post.type-post.format-quote{ background-color:<?php echo tally_color('site_accent_color'); ?>; }
		
.color_mood_light .post.type-post .entry-title a{ color:<?php tally_color('color_headings_light'); ?>; }
.color_mood_light .entry-meta-item a,
.color_mood_light .entry-meta-item{ color:<?php tally_color('color_headings_light'); ?>; }
		
#header.color_mood_light,
#subheader.color_mood_light,
#fwidget.color_mood_light{ color: <?php tally_color('color_text_light'); ?>; border-color:<?php tally_color('color_border_light'); ?>; }
		
.header-sticky #header.stickyMenu.color_mood_light{
	background: <?php tally_color('color_bg_light'); ?>;
	box-shadow: 0px 0px 3px 0px <?php tally_color('color_border_light'); ?>;
	border-color:<?php tally_color('color_border_light', 0.4); ?>;
}
		
.color_mood_light .tally_icon_search_bar .search-form-inner{ background:<?php tally_color('color_inner_bg_light','1'); ?>;  }
.color_mood_light .tally_icon_search_bar .search-form-inner:after{ border-bottom-color:<?php tally_color('color_inner_bg_light','1'); ?>;  }
.color_mood_dark .tally_icon_search_bar .search-form-inner:before{ border-bottom-color:<?php tally_color('color_border_dark','1'); ?>;  }




/*---------------------Backgrounds--------------------*/
#topbar.color_mood_dark,
#topbar.color_mood_light{
	<?php
	$topbar_bg = tally_option('color_topbar_bg');
	if(is_array($topbar_bg) && !empty($topbar_bg)){
		if( isset($topbar_bg['background-color']) && ($topbar_bg['background-color'] != '') ){ echo 'background-color:'.$topbar_bg['background-color'].';'; }
		if( isset($topbar_bg['background-repeat']) && ($topbar_bg['background-repeat'] != '') ){ echo 'background-repeat:'.$topbar_bg['background-repeat'].';'; }
		if( isset($topbar_bg['background-attachment'])&&($topbar_bg['background-attachment'] !='')){echo'background-attachment:'.$topbar_bg['background-attachment'].';'; }
		if( isset($topbar_bg['background-position']) && ($topbar_bg['background-position'] != '') ){ echo 'background-position:'.$topbar_bg['background-position'].';'; }
		if( isset($topbar_bg['background-size']) && ($topbar_bg['background-size'] != '') ){ echo 'background-size:'.$topbar_bg['background-size'].';'; }
		if( isset($topbar_bg['background-image']) && ($topbar_bg['background-image'] != '') ){ echo 'background-image:url('.$topbar_bg['background-image'].');'; }
	}
	?>	
}
		
#header.color_mood_dark,
#header.color_mood_light{
	<?php
	$header_bg = tally_option('color_header_bg');
	if(is_array($header_bg) && !empty($header_bg)){
		if( isset($header_bg['background-color']) && ($header_bg['background-color'] != '') ){ echo 'background-color:'.$header_bg['background-color'].';'; }
		if( isset($header_bg['background-repeat']) && ($header_bg['background-repeat'] != '') ){ echo 'background-repeat:'.$header_bg['background-repeat'].';'; }
		if( isset($header_bg['background-attachment'])&&($header_bg['background-attachment'] !='')){echo'background-attachment:'.$header_bg['background-attachment'].';'; }
		if( isset($header_bg['background-position']) && ($header_bg['background-position'] != '') ){ echo 'background-position:'.$header_bg['background-position'].';'; }
		if( isset($header_bg['background-size']) && ($header_bg['background-size'] != '') ){ echo 'background-size:'.$header_bg['background-size'].';'; }
		if( isset($header_bg['background-image']) && ($header_bg['background-image'] != '') ){ echo 'background-image:url('.$header_bg['background-image'].');'; }
	}
	?>	
}
		
.header-sticky #header.stickyMenu.color_mood_dark{
	box-shadow: 0px 0px 3px 0px <?php tally_color('color_border_dark', '0.5'); ?>;
	<?php
	$header_bg = tally_option('color_header_bg');
	if(is_array($header_bg) && !empty($header_bg)){
		if( isset($header_bg['background-color']) && ($header_bg['background-color'] != '') ){echo 'background-color:'.$header_bg['background-color'].'!important;';}
	}
	?>	
}
		
.header-sticky #header.stickyMenu.color_mood_light{
	box-shadow: 0px 0px 3px 0px <?php tally_color('color_border_light', '0.5'); ?>;
	<?php
	$header_bg = tally_option('color_header_bg');
	if(is_array($header_bg) && !empty($header_bg)){
		if( isset($header_bg['background-color']) && ($header_bg['background-color'] != '') ){echo 'background-color:'.$header_bg['background-color'].' !important;';}
	}
	?>	
}
		
		
#subheader.color_mood_dark,
#subheader.color_mood_light{
	<?php
	$subheader_bg = tally_option('color_subheader_bg');
	if(is_array($subheader_bg) && !empty($subheader_bg)){
		if( isset($subheader_bg['background-color']) && ($subheader_bg['background-color'] != '') ){ echo 'background-color:'.$subheader_bg['background-color'].';'; }
		if( isset($subheader_bg['background-repeat']) && ($subheader_bg['background-repeat'] != '') ){ echo 'background-repeat:'.$subheader_bg['background-repeat'].';'; }
		if( isset($subheader_bg['background-attachment'])&&($subheader_bg['background-attachment']!='')){echo 'background-attachment:'.$subheader_bg['background-attachment'].';';}
		if( isset($subheader_bg['background-position']) && ($subheader_bg['background-position'] != '') ){ echo 'background-position:'.$subheader_bg['background-position'].';'; }
		if( isset($subheader_bg['background-size']) && ($subheader_bg['background-size'] != '') ){ echo 'background-size:'.$subheader_bg['background-size'].';'; }
		if( isset($subheader_bg['background-image']) && ($subheader_bg['background-image'] != '') ){ echo 'background-image:url('.$subheader_bg['background-image'].');'; }
	}
	?>	
}
		
#main.color_mood_dark,
#main.color_mood_light{
	<?php
	$main_bg = tally_option('color_content_bg');
	if(is_array($main_bg) && !empty($main_bg)){
		if( isset($main_bg['background-color']) && ($main_bg['background-color'] != '') ){ echo 'background-color:'.$main_bg['background-color'].';'; }
		if( isset($main_bg['background-repeat']) && ($main_bg['background-repeat'] != '') ){ echo 'background-repeat:'.$main_bg['background-repeat'].';'; }
		if( isset($main_bg['background-attachment'])&&($main_bg['background-attachment'] !='')){echo'background-attachment:'.$main_bg['background-attachment'].';'; }
		if( isset($main_bg['background-position']) && ($main_bg['background-position'] != '') ){ echo 'background-position:'.$main_bg['background-position'].';'; }
		if( isset($main_bg['background-size']) && ($main_bg['background-size'] != '') ){ echo 'background-size:'.$main_bg['background-size'].';'; }
		if( isset($main_bg['background-image']) && ($main_bg['background-image'] != '') ){ echo 'background-image:url('.$main_bg['background-image'].');'; }
	}
	?>	
}
		
#fwidget.color_mood_dark,
#fwidget.color_mood_light{
	<?php
	$fwidget_bg = tally_option('color_fwidget_bg');
	if(is_array($fwidget_bg) && !empty($fwidget_bg)){
		if( isset($fwidget_bg['background-color']) && ($fwidget_bg['background-color'] != '') ){ echo 'background-color:'.$fwidget_bg['background-color'].';'; }
		if( isset($fwidget_bg['background-repeat']) && ($fwidget_bg['background-repeat'] != '') ){ echo 'background-repeat:'.$fwidget_bg['background-repeat'].';'; }
		if( isset($fwidget_bg['background-attachment'])&&($fwidget_bg['background-attachment']!='')){echo'background-attachment:'.$fwidget_bg['background-attachment'].';';}
		if( isset($fwidget_bg['background-position']) && ($fwidget_bg['background-position'] != '')){echo 'background-position:'.$fwidget_bg['background-position'].';'; }
		if( isset($fwidget_bg['background-size']) && ($fwidget_bg['background-size'] != '') ){ echo 'background-size:'.$fwidget_bg['background-size'].';'; }
		if( isset($fwidget_bg['background-image']) && ($fwidget_bg['background-image'] != '') ){ echo 'background-image:url('.$fwidget_bg['background-image'].');'; }
	}
	?>	
}
		
#footer.color_mood_dark,
#footer.color_mood_light{
	<?php
	$footer_bg = tally_option('color_footer_bg');
	if(is_array($footer_bg) && !empty($footer_bg)){
		if( isset($footer_bg['background-color']) && ($footer_bg['background-color'] != '') ){ echo 'background-color:'.$footer_bg['background-color'].';'; }
		if( isset($footer_bg['background-repeat']) && ($footer_bg['background-repeat'] != '') ){ echo 'background-repeat:'.$footer_bg['background-repeat'].';'; }
		if(isset($footer_bg['background-attachment'])&&($footer_bg['background-attachment']!='')){echo'background-attachment:'.$footer_bg['background-attachment'].';';}
		if( isset($footer_bg['background-position']) && ($footer_bg['background-position'] != '')){echo 'background-position:'.$footer_bg['background-position'].';'; }
		if( isset($footer_bg['background-size']) && ($footer_bg['background-size'] != '') ){ echo 'background-size:'.$footer_bg['background-size'].';'; }
		if( isset($footer_bg['background-image']) && ($footer_bg['background-image'] != '') ){ echo 'background-image:url('.$footer_bg['background-image'].');'; }
	}
	?>	
}
	
		
/*--------------------- Menu ------------------*/
body .menu_area #nav *{ color:<?php tally_color('color_navigation_text'); ?>; border-color:<?php tally_color('color_navigation_border'); ?> !important; }
body .menu_area #nav a{ color:<?php tally_color('color_navigation_text'); ?>; background-color:<?php tally_color('color_navigation_bg'); ?> !important; }
body .menu_area #nav a:hover,
body .menu_area #nav ul > .current-menu-item > a,
body .menu_area #nav ul > .current-menu-parent > a{ 
	color:<?php tally_color('color_navigation_text_hover'); ?>;
	border-color:<?php tally_color('color_navigation_border_hover'); ?> !important;
	background-color:<?php tally_color('color_navigation_bg_hover'); ?> !important; 
}


/*--------------------- Custom Header Styling------------------*/

/*--- Main Menu ---*/
#navigation-area{ background-color:<?php tally_color('color_navigation_area_background_color'); ?>; border-color:<?php tally_color('color_navigation_border'); ?> !important; }
#navigation { color:<?php tally_color('color_navigation_text'); ?>; border-color:<?php tally_color('color_navigation_border'); ?> !important; }
#navigation a{ color:<?php tally_color('color_navigation_text'); ?>; background-color:<?php tally_color('color_navigation_bg'); ?>; border-color:<?php tally_color('color_navigation_border'); ?> !important; }
#navigation a:hover,
#navigation .current-menu-item a{ 
	color:<?php tally_color('color_navigation_text_hover'); ?>;
	border-color:<?php tally_color('color_navigation_border_hover'); ?> !important;
	background-color:<?php tally_color('color_navigation_bg_hover'); ?>; 
}
#navigation ul.sub-menu { color:<?php tally_color('color_navigation_submenu_text'); ?>; border-color:<?php tally_color('color_navigation_submenu_border'); ?> !important; }
#navigation ul.sub-menu a{ color:<?php tally_color('color_navigation_submenu_text'); ?>; background-color:<?php tally_color('color_navigation_submenu_bg'); ?>; border-color:<?php tally_color('color_navigation_submenu_border'); ?> !important; }
#navigation ul.sub-menu a:hover,
#navigation ul.sub-menu .current-menu-item a{ 
	color:<?php tally_color('color_navigation_submenu_hover_text'); ?>;
	border-color:<?php tally_color('color_navigation_submenu_hover_border'); ?> !important;
	background-color:<?php tally_color('color_navigation_submenu_hover_bg'); ?>; 
}


/*--- Menu Alt ---*/
.color_mood_dark #nav_alt { color:<?php tally_color('color_text_dark'); ?>; }
.color_mood_dark #nav_alt a{ color:<?php tally_color('color_text_dark', 0.9); ?>; }
.color_mood_dark #nav_alt a:hover,
.color_mood_dark #nav_alt .current-menu-item a{ color:<?php tally_color('color_headings_dark'); ?>;}
.color_mood_dark #nav_alt ul.sub-menu { color:<?php tally_color('color_text_dark'); ?>; border-color:<?php tally_color('color_border_dark'); ?> !important; }
.color_mood_dark #nav_alt ul.sub-menu a{ color:<?php tally_color('color_text_dark'); ?>; background-color:#fff; border-color:<?php tally_color('color_border_dark'); ?> !important; }
.color_mood_dark #nav_alt ul.sub-menu a:hover,
.color_mood_dark #nav_alt ul.sub-menu .current-menu-item a{ color:<?php tally_color('color_headings_dark'); ?>;}

.color_mood_light #nav_alt { color:<?php tally_color('color_text_light'); ?>; }
.color_mood_light #nav_alt a{ color:<?php tally_color('color_text_light', 0.9); ?>; }
.color_mood_light #nav_alt a:hover,
.color_mood_light #nav_alt .current-menu-item a{ color:<?php tally_color('color_headings_light'); ?>;}
.color_mood_light #nav_alt ul.sub-menu { color:<?php tally_color('color_text_light'); ?>; border-color:<?php tally_color('color_border_dark'); ?> !important; }
.color_mood_light #nav_alt ul.sub-menu a{ color:<?php tally_color('color_text_light'); ?>; background-color:#fff; border-color:<?php tally_color('color_border_light'); ?> !important; }
.color_mood_light #nav_alt ul.sub-menu a:hover,
.color_mood_light #nav_alt ul.sub-menu .current-menu-item a{ color:<?php tally_color('color_headings_light'); ?>;}


/*--- Social Icons ---*/
.color_mood_light .tally-social-icons.style_border_round a,
.color_mood_light .tally-social-icons.style_border_circle a,
.color_mood_light .tally-social-icons.style_border_square a{ border-color:<?php tally_color('color_headings_light'); ?> !important; }
.color_mood_light .tally-social-icons.style_border_circle a i.fa:before,
.color_mood_light .tally-social-icons.style_border_round a i.fa:before,
.color_mood_light .tally-social-icons.style_border_square a i.fa:before{ color: <?php tally_color('color_headings_light'); ?> !important; }
.color_mood_light .tally-social-icons.style_border_round a:hover,
.color_mood_light .tally-social-icons.style_border_circle a:hover,
.color_mood_light .tally-social-icons.style_border_square a:hover{ border-color:<?php tally_color('site_accent2_color'); ?> !important; }
.color_mood_light .tally-social-icons.style_border_round a:hover i.fa:before,
.color_mood_light .tally-social-icons.style_border_circle a:hover i.fa:before,
.color_mood_light .tally-social-icons.style_border_square a:hover i.fa:before{ color: <?php tally_color('site_accent2_color'); ?> !important; }

.color_mood_dark .tally-social-icons.style_border_round a,
.color_mood_dark .tally-social-icons.style_border_circle a,
.color_mood_dark .tally-social-icons.style_border_square a{ border-color:<?php tally_color('color_headings_dark'); ?> !important; }
.color_mood_dark .tally-social-icons.style_border_round a i.fa:before,
.color_mood_dark .tally-social-icons.style_border_circle a i.fa:before,
.color_mood_dark .tally-social-icons.style_border_square a i.fa:before{ color: <?php tally_color('color_headings_dark'); ?> !important; }
.color_mood_dark .tally-social-icons.style_border_round a:hover,
.color_mood_dark .tally-social-icons.style_border_circle a:hover,
.color_mood_dark .tally-social-icons.style_border_square a:hover{ border-color:<?php tally_color('site_accent2_color'); ?> !important; }
.color_mood_dark .tally-social-icons.style_border_round a:hover i.fa:before,
.color_mood_dark .tally-social-icons.style_border_circle a:hover i.fa:before,
.color_mood_dark .tally-social-icons.style_border_square a:hover i.fa:before{ color: <?php tally_color('site_accent2_color'); ?> !important; }

.color_mood_light .tally-social-icons.style_simple a i.fa:before{ color: <?php tally_color('color_headings_light'); ?> !important; }
.color_mood_dark .tally-social-icons.style_simple a i.fa:before{ color: <?php tally_color('color_headings_dark'); ?> !important; }
.color_mood_light .tally-social-icons.style_simple a:hover i.fa:before,
.color_mood_dark .tally-social-icons.style_simple a:hover i.fa:before{ color: <?php tally_color('site_accent2_color'); ?> !important; }

.color_mood_light .tally-social-icons.style_bg_circle a,
.color_mood_light .tally-social-icons.style_bg_round a,
.color_mood_light .tally-social-icons.style_bg_square a { background-color: <?php tally_color('color_headings_light'); ?> !important; }
.color_mood_light .tally-social-icons.style_bg_circle a i.fa:before,
.color_mood_light .tally-social-icons.style_bg_round a i.fa:before,
.color_mood_light .tally-social-icons.style_bg_square a i.fa:before { color: <?php tally_color('color_headings_dark'); ?> !important; }
.color_mood_dark .tally-social-icons.style_bg_circle a,
.color_mood_dark .tally-social-icons.style_bg_round a,
.color_mood_dark .tally-social-icons.style_bg_square a { background-color: <?php tally_color('color_headings_dark'); ?> !important; }
.color_mood_dark .tally-social-icons.style_bg_circle a i.fa:before,
.color_mood_dark .tally-social-icons.style_bg_round a i.fa:before,
.color_mood_dark .tally-social-icons.style_bg_square a i.fa:before { color: <?php tally_color('color_headings_light'); ?> !important; }

.color_mood_light .tally-social-icons.style_bg_circle a:hover,
.color_mood_dark .tally-social-icons.style_bg_circle a:hover,
.color_mood_light .tally-social-icons.style_bg_circle a:hover,
.color_mood_dark .tally-social-icons.style_bg_round a:hover,
.color_mood_light .tally-social-icons.style_bg_round a:hover,
.color_mood_dark .tally-social-icons.style_bg_square a:hover,
.color_mood_light .tally-social-icons.style_bg_square a:hover  { background-color: <?php tally_color('site_accent2_color'); ?> !important; }
.color_mood_light .tally-social-icons.style_bg_circle a:hover i.fa:before,
.color_mood_dark .tally-social-icons.style_bg_circle a:hover i.fa:before,
.color_mood_light .tally-social-icons.style_bg_round a:hover i.fa:before,
.color_mood_dark .tally-social-icons.style_bg_round a:hover i.fa:before,
.color_mood_light .tally-social-icons.style_bg_square a:hover i.fa:before,
.color_mood_dark .tally-social-icons.style_bg_square a:hover i.fa:before { color: <?php tally_color('color_headings_light'); ?> !important; }


/*--- Logins ---*/
.color_mood_light .header-logins-area.style_simple .header-login{ color: <?php tally_color('color_text_light'); ?> !important; }
.color_mood_light .header-logins-area.style_simple .header-register{ color: <?php tally_color('color_text_light'); ?> !important; }
.color_mood_dark .header-logins-area.style_simple .header-login{ color: <?php tally_color('color_text_dark'); ?> !important; }
.color_mood_dark .header-logins-area.style_simple .header-register{ color: <?php tally_color('color_text_dark'); ?> !important; }

.color_mood_light .header-logins-area.style_border_round .header-login,
.color_mood_light .header-logins-area.style_border_square .header-login{ 
	color: <?php tally_color('color_text_light'); ?> !important;
    border-color:<?php tally_color('color_text_light'); ?> !important; 
}
.color_mood_light .header-logins-area.style_border_round .header-register,
.color_mood_light .header-logins-area.style_border_square .header-register{ 
	color: <?php tally_color('color_text_light'); ?> !important;
    border-color:<?php tally_color('color_text_light'); ?> !important; 
}
.color_mood_dark .header-logins-area.style_border_round .header-login,
.color_mood_dark .header-logins-area.style_border_square .header-login{ 
	color: <?php tally_color('color_text_dark'); ?> !important; 
    border-color:<?php tally_color('color_text_dark'); ?> !important; 
}
.color_mood_dark .header-logins-area.style_border_round .header-register,
.color_mood_dark .header-logins-area.style_border_square .header-register{
	color: <?php tally_color('color_text_dark'); ?> !important;
    border-color:<?php tally_color('color_text_dark'); ?> !important;
}
.color_mood_light .header-logins-area.style_border_round .header-login:hover,
.color_mood_light .header-logins-area.style_border_square .header-login:hover{
	color: <?php tally_color('color_headings_light'); ?> !important;
    border-color:<?php tally_color('color_headings_light'); ?> !important;
}
.color_mood_light .header-logins-area.style_border_round .header-register:hover,
.color_mood_light .header-logins-area.style_border_square .header-register:hover{
	color: <?php tally_color('color_headings_light'); ?> !important;
	border-color:<?php tally_color('color_headings_light'); ?> !important;
}
.color_mood_dark .header-logins-area.style_border_round .header-login:hover,
.color_mood_dark .header-logins-area.style_border_square .header-login:hover{
	color: <?php tally_color('color_headings_dark'); ?> !important;
    border-color:<?php tally_color('color_headings_dark'); ?> !important;
}
.color_mood_dark .header-logins-area.style_border_round .header-register:hover,
.color_mood_dark .header-logins-area.style_border_square .header-register:hover{
	color: <?php tally_color('color_headings_dark'); ?> !important;
	border-color:<?php tally_color('color_headings_dark'); ?> !important;
}

/*--- Phone ---*/
.color_mood_light .header-phone.style_simple a,
.color_mood_light .header-phone.style_simple i.fa:before{ color: <?php tally_color('color_headings_light'); ?> !important; }
.color_mood_dark .header-phone.style_simple a,
.color_mood_dark .header-phone.style_simple i.fa:before{ color: <?php tally_color('color_headings_dark'); ?> !important; }

/*--- Email ---*/
.color_mood_light .header-email.style_simple a,
.color_mood_light .header-email.style_simple i.fa:before{ color: <?php tally_color('color_headings_light'); ?> !important; }
.color_mood_dark .header-email.style_simple a,
.color_mood_dark .header-email.style_simple i.fa:before{ color: <?php tally_color('color_headings_dark'); ?> !important; }


/*--- Woocommerce Cart ---*/
.color_mood_light .tally_woocommerce_cart i.fa{ color: <?php tally_color('color_headings_light'); ?> !important; }
.color_mood_dark .tally_woocommerce_cart i.fa{ color: <?php tally_color('color_headings_dark'); ?> !important; }


/*--- Search Bar ---*/
.color_mood_light .tally_icon_search_bar .the_search_icon i.fa{ color: <?php tally_color('color_headings_light'); ?> !important; }
.color_mood_dark .tally_icon_search_bar .the_search_icon i.fa{ color: <?php tally_color('color_headings_dark'); ?> !important; }


/*--- Sub-Header ---*/
<?php 
$subheader_text_color = get_post_meta($current_post_id, 'tally_subheader_text_color', true);
$subheader_bg = get_post_meta($current_post_id, 'tally_subheader_bg', true);
$subheader_shadow = get_post_meta($current_post_id, 'tally_subheader_text_shadow', true);
$subheader_padding = get_post_meta($current_post_id, 'tally_subheader_padding', true);
$subheader_padding_unit = 'px';
if(isset($subheader_padding['unit']) && !empty($subheader_padding['unit'])){ $subheader_padding_unit = $subheader_padding['unit']; }
if($subheader_text_color != ''){
?>
body h1.page_title,
body p.page_subtitle{ color:<?php echo $subheader_text_color; ?> !important; }
<?php } ?>

body #subheader{ 
	<?php if(isset($subheader_bg['background-color']) && !empty($subheader_bg['background-color'])){ ?>background-color:<?php echo $subheader_bg['background-color']; ?> !important;<?php } ?>
	<?php if(isset($subheader_bg['background-image']) && !empty($subheader_bg['background-image'])){ ?>background-image:url(<?php echo $subheader_bg['background-image']; ?>);<?php } ?>
	<?php if(isset($subheader_bg['background-attachment']) && !empty($subheader_bg['background-attachment'])){ ?>background-attachment:<?php echo $subheader_bg['background-attachment']; ?>;<?php } ?>
	<?php if(isset($subheader_bg['background-size']) && !empty($subheader_bg['background-size'])){ ?>background-size:<?php echo $subheader_bg['background-size']; ?>;<?php } ?>
	<?php if(isset($subheader_bg['background-repeat']) && !empty($subheader_bg['background-repeat'])){ ?>background-repeat:<?php echo $subheader_bg['background-repeat']; ?>;<?php } ?>
	<?php if(isset($subheader_bg['background-position']) && !empty($subheader_bg['background-position'])){ ?>background-position:<?php echo $subheader_bg['background-position']; ?>;<?php } ?>
}
body #subheader #subheader-inner{
<?php if(isset($subheader_padding['top']) && !empty($subheader_padding['top'])){ ?>padding-top:<?php echo $subheader_padding['top'].$subheader_padding_unit; ?>;<?php } ?>
<?php if(isset($subheader_padding['bottom']) && !empty($subheader_padding['bottom'])){ ?>padding-bottom:<?php echo $subheader_padding['bottom'].$subheader_padding_unit; ?>;<?php } ?>
}
<?php if($subheader_shadow == 'on'){ ?>
body #subheader .page_title,
body #subheader .page_subtitle{ text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.65); }
<?php } ?>

/*--- Page Background ---*/
<?php $page_bg = get_post_meta($current_post_id, 'tally_page_bg', true); ?>
body{
	<?php if(isset($page_bg['background-color']) && !empty($page_bg['background-color'])){ ?>background-color:<?php echo $page_bg['background-color']; ?> !important;<?php } ?>
	<?php if(isset($page_bg['background-image']) && !empty($page_bg['background-image'])){ ?>background-image:url(<?php echo $page_bg['background-image']; ?>);<?php } ?>
	<?php if(isset($page_bg['background-attachment']) && !empty($page_bg['background-attachment'])){ ?>background-attachment:<?php echo $page_bg['background-attachment']; ?>;<?php } ?>
	<?php if(isset($page_bg['background-size']) && !empty($page_bg['background-size'])){ ?>background-size:<?php echo $page_bg['background-size']; ?>;<?php } ?>
	<?php if(isset($page_bg['background-repeat']) && !empty($page_bg['background-repeat'])){ ?>background-repeat:<?php echo $page_bg['background-repeat']; ?>;<?php } ?>
	<?php if(isset($page_bg['background-position']) && !empty($page_bg['background-position'])){ ?>background-position:<?php echo $page_bg['background-position']; ?>;<?php } ?>
}
<?php 
do_action('tally_dynamic_css');

/*-Integration-*/
if(tally_option('custom_css')){ echo tally_option('custom_css'); }
?>