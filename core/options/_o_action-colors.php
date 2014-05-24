<?php
add_action('wp_head', 'tally_op_topbar_color_option_action');
function tally_op_topbar_color_option_action(){
	?>
    <style type="text/css">
		#topbar *{ border-color:<?php tally_color('color_topbar_border'); ?>; color:<?php tally_color('color_topbar_text'); ?>; }
		#topbar {background:<?php tally_color('color_topbar_bg'); ?>; border-color:<?php tally_color('color_topbar_border'); ?>; }
	</style>
    <?php
}

add_action('wp_head', 'tally_op_header_color_option_action');
function tally_op_header_color_option_action(){
	?>
    <style type="text/css">
		/*header*/
		#header *{ border-color:<?php tally_color('color_header_border'); ?>; color:<?php tally_color('color_header_text'); ?>; }
		#header {background:<?php tally_color('color_header_bg'); ?>; border-color:<?php tally_color('color_header_border'); ?>; color:<?php tally_color('color_header_text'); ?>; }
		#header .current-menu-item>a,
		#header a:hover{ color:<?php echo tally_color('site_accent_color'); ?>; }
		#header input[type="text"],
		#header input[type="email"],
		#header input[type="phone"],
		#header input[type="url"],
		#header select{ background:<?php tally_color('color_header_border'); ?>; }
		#header input[type="submit"]{ 
			background-color:<?php tally_color('color_header_border'); ?>; color:#FFF; border:solid 1px <?php tally_color('color_header_border'); ?>; 
		}
	</style>
    <?php
}


add_action('wp_head', 'tally_op_subheader_color_option_action');
function tally_op_subheader_color_option_action(){
	?>
    <style type="text/css">
		/*subheader*/
		#subheader *{ border-color:<?php tally_color('color_subheader_border'); ?> !important; color:<?php tally_color('color_subheader_text'); ?>; }
		#subheader .page_title{ color:<?php tally_color('color_subheader_heading'); ?>; }
		#subheader{ background:<?php tally_color('color_subheader_bg'); ?>; border-color:<?php tally_color('color_subheader_border'); ?>; }
	</style>
    <?php
}


add_action('wp_head', 'tally_op_nav_color_option_action');
function tally_op_nav_color_option_action(){
	?>
    <style type="text/css">
		/*Menu*/
		.menu_area #nav *{ color:<?php tally_color('color_navigation_text'); ?>; border-color:<?php tally_color('color_navigation_border'); ?>; }
		.menu_area #nav a{ color:<?php tally_color('color_navigation_text'); ?>; background-color:<?php tally_color('color_navigation_bg'); ?>; }
		.menu_area #nav a:hover,
		.menu_area #nav ul > .current-menu-item a{ color:<?php tally_color('color_navigation_text_hover'); ?>; background-color:<?php tally_color('color_navigation_bg_hover'); ?>; }
		.menu_area #nav ul li ul.sub-menu li a{ background-color:<?php tally_color('color_navigation_submenu_bg'); ?>; }
	</style>
    <?php
}


add_action('wp_head', 'tally_op_content_color_option_action');
function tally_op_content_color_option_action(){
	?>
    <style type="text/css">
		/*main*/
		#main *{ border-color:<?php tally_color('color_content_border'); ?>; color: <?php tally_color('color_content_text'); ?>; }
		#main{ background: <?php tally_color('color_content_bg'); ?>; }
		#main a{ color:<?php echo tally_color('site_accent_color'); ?>; }
		#main a:hover{ color:<?php tally_color('color_content_heading'); ?>; }
		#main input,
		#main textarea,
		#main select{ background:<?php tally_color('color_content_inner_bg'); ?>; }
		#main input[type="submit"]{ 
			background-color:<?php echo tally_color('site_accent_color'); ?>; color:#FFF; border:solid 1px <?php echo tally_color('site_accent_color'); ?>; 
		}
		#main input[type="submit"]:hover{
			background-color:<?php echo tally_color('color_content_heading'); ?>; color:#FFF; border:solid 1px <?php echo tally_color('color_content_heading'); ?>; 
		}
		
		#main #comments li.comment,
		#main .author-box,
		.form-allowed-tags{ background:<?php tally_color('color_content_inner_bg'); ?>; }
		
		#main .widget_meta ul li a,
		#main .widget_pages ul li a,
		#main .widget_nav_menu ul li a,
		#main .widget_recent_entries ul li a,
		#main .widget_archive ul li a,
		#main .widget_categories ul li a,
		#main .widget_recent_comments ul li a{ color:<?php tally_color('color_content_text'); ?>; }
		#main .widget_meta ul li a:hover,
		#main .widget_pages ul li a:hover,
		#main .widget_nav_menu ul li a:hover,
		#main .widget_recent_entries ul li a:hover,
		#main .widget_archive ul li a:hover,
		#main .widget_categories ul li a:hover,
		#main .widget_recent_comments ul li a:hover{ color:<?php echo tally_color('site_accent_color'); ?>; }
		#main .widget_calendar thead>tr>th{ color:<?php tally_color('color_content_text'); ?>; background:<?php tally_color('color_content_inner_bg'); ?>; }
		
		#main h1, #main h2, #main h3, #main h4,#main h5, #main h6{ color:<?php tally_color('color_content_heading'); ?>; }
		
		#main .blog_entry .entry-readmore a,
		#main .blog_entry.format-aside,
		#main .blog_entry.format-quote{ background-color:<?php echo tally_color('site_accent_color'); ?>; }
	</style>
    <?php
}


add_action('wp_head', 'tally_op_fwidget_color_option_action');
function tally_op_fwidget_color_option_action(){
	?>
    <style type="text/css">
		/*fwidget*/
		#fwidget *{ border-color:<?php tally_color('color_fwidget_border'); ?>; color:<?php tally_color('color_fwidget_text'); ?>; }
		#fwidget{ background: <?php tally_color('color_fwidget_bg'); ?>; }
		#fwidget a:hover{ color:<?php echo tally_color('site_accent_color'); ?>; }
		#fwidget a{ color: <?php tally_color('color_fwidget_link'); ?>; }
		#fwidget input[type="text"],
		#fwidget input[type="email"],
		#fwidget input[type="phone"],
		#fwidget input[type="url"],
		#fwidget select{ background:<?php tally_color('color_fwidget_inner_bg'); ?>; }
		#fwidget input[type="submit"]{ 
			background-color:<?php echo tally_color('site_accent_color'); ?>; color:#FFF; border:solid 1px <?php echo tally_color('site_accent_color'); ?>; 
		}
		#fwidget .widget_calendar thead>tr>th{ color:<?php tally_color('color_fwidget_heading'); ?>; background:<?php tally_color('color_fwidget_inner_bg'); ?>; }
		
		#fwidget h1, #fwidget h2, #fwidget h3, #fwidget h4,#fwidget h5, #fwidget h6{ 
			color:<?php tally_color('color_fwidget_heading'); ?>; 
		}
	</style>
    <?php
}


add_action('wp_head', 'tally_op_footer_color_option_action');
function tally_op_footer_color_option_action(){
	?>
	<style type="text/css">
		/*Footer*/
		#footer *{ border-color:<?php tally_color('color_footer_border'); ?>; color:<?php tally_color('color_footer_text'); ?>; }
		#footer{ background: <?php tally_color('color_footer_bg'); ?>; }
		#footer a{ color:<?php tally_color('color_footer_link'); ?>; }
		#footer .current-menu-item>a,
		#footer a:hover{ color:<?php echo tally_color('site_accent_color'); ?>; }
	</style>
	<?php
}