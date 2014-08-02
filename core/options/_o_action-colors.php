<?php
add_action('wp_head', 'tally_op_content_color_option_action');
function tally_op_content_color_option_action(){
	?>
    <style type="text/css">
		/*------------------------ DARK ------------------------*/
		.color_mood_dark *{ border-color:<?php tally_color('color_border_dark'); ?>  !important; color: <?php tally_color('color_text_dark'); ?>; }
		.color_mood_dark{ 
			background: <?php tally_color('color_bg_light'); ?>; color: <?php tally_color('color_text_dark'); ?>; border-color:<?php tally_color('color_border_dark'); ?>; 
		}
		.color_mood_dark a{ color:<?php echo tally_color('site_accent_color'); ?>; }
		.color_mood_dark a:hover{ color:<?php tally_color('site_accent2_color'); ?>; }
		.color_mood_dark input,
		.color_mood_dark textarea,
		.color_mood_dark select{ background:<?php tally_color('color_inner_bg_dark','1'); ?>; border-color:<?php tally_color('color_border_dark', '1'); ?>  !important; }
		.color_mood_dark input[type="submit"]{ 
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
		}
		
		
		
		
		/*------------------------ LIGHT ------------------------*/
		.color_mood_light *{ border-color:<?php tally_color('color_border_light'); ?> !important; color: <?php tally_color('color_text_light'); ?>; }
		.color_mood_light{ 
			background: <?php tally_color('color_bg_dark'); ?>; color: <?php tally_color('color_text_light'); ?>; border-color:<?php tally_color('color_border_light'); ?>; 
		}
		.color_mood_light a{ color:<?php echo tally_color('site_accent_color'); ?>; }
		.color_mood_light a:hover{ color:<?php tally_color('site_accent2_color'); ?>; }
		.color_mood_light input,
		.color_mood_light textarea,
		.color_mood_light select{ background:<?php tally_color('color_inner_bg_light', '1'); ?>; border-color:<?php tally_color('color_border_light', '1'); ?>  !important; }
		.color_mood_light input[type="submit"]{ 
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
		}
		
		
		/*---------------------Backgrounds--------------------*/
		#topbar.color_mood_dark,
		#topbar.color_mood_light{
			<?php
			$topbar_bg = tally_option('color_topbar_bg');
			if(is_array($topbar_bg) && !empty($topbar_bg)){
				if( isset($topbar_bg['background-color']) && ($topbar_bg['background-color'] != '') ){ echo 'background-color:'.$topbar_bg['background-color'].';'; }
				if( isset($topbar_bg['background-repeat']) && ($topbar_bg['background-repeat'] != '') ){ echo 'background-color:'.$topbar_bg['background-repeat'].';'; }
				if( isset($topbar_bg['background-attachment'])&&($topbar_bg['background-attachment'] !='')){echo'background-attachment:'.$topbar_bg['background-attachment'].';'; }
				if( isset($topbar_bg['background-position']) && ($topbar_bg['background-position'] != '') ){ echo 'background-position:'.$topbar_bg['background-position'].';'; }
				if( isset($topbar_bg['background-size']) && ($topbar_bg['background-size'] != '') ){ echo 'background-size:'.$topbar_bg['background-size'].';'; }
				if( isset($topbar_bg['background-image']) && ($topbar_bg['background-image'] != '') ){ echo 'background-image:'.$topbar_bg['background-image'].';'; }
			}
			?>	
		}
		
		#header.color_mood_dark,
		#header.color_mood_light{
			<?php
			$header_bg = tally_option('color_header_bg');
			if(is_array($header_bg) && !empty($header_bg)){
				if( isset($header_bg['background-color']) && ($header_bg['background-color'] != '') ){ echo 'background-color:'.$header_bg['background-color'].';'; }
				if( isset($header_bg['background-repeat']) && ($header_bg['background-repeat'] != '') ){ echo 'background-color:'.$header_bg['background-repeat'].';'; }
				if( isset($header_bg['background-attachment'])&&($header_bg['background-attachment'] !='')){echo'background-attachment:'.$header_bg['background-attachment'].';'; }
				if( isset($header_bg['background-position']) && ($header_bg['background-position'] != '') ){ echo 'background-position:'.$header_bg['background-position'].';'; }
				if( isset($header_bg['background-size']) && ($header_bg['background-size'] != '') ){ echo 'background-size:'.$header_bg['background-size'].';'; }
				if( isset($header_bg['background-image']) && ($header_bg['background-image'] != '') ){ echo 'background-image:'.$header_bg['background-image'].';'; }
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
				if( isset($subheader_bg['background-repeat']) && ($subheader_bg['background-repeat'] != '') ){ echo 'background-color:'.$subheader_bg['background-repeat'].';'; }
				if( isset($subheader_bg['background-attachment']) && ($subheader_bg['background-attachment'] != '') ){ echo 'background-attachment:'.$subheader_bg['background-attachment'].';'; }
				if( isset($subheader_bg['background-position']) && ($subheader_bg['background-position'] != '') ){ echo 'background-position:'.$subheader_bg['background-position'].';'; }
				if( isset($subheader_bg['background-size']) && ($subheader_bg['background-size'] != '') ){ echo 'background-size:'.$subheader_bg['background-size'].';'; }
				if( isset($subheader_bg['background-image']) && ($subheader_bg['background-image'] != '') ){ echo 'background-image:'.$subheader_bg['background-image'].';'; }
			}
			?>	
		}
		
		#main.color_mood_dark,
		#main.color_mood_light{
			<?php
			$main_bg = tally_option('color_content_bg');
			if(is_array($main_bg) && !empty($main_bg)){
				if( isset($main_bg['background-color']) && ($main_bg['background-color'] != '') ){ echo 'background-color:'.$main_bg['background-color'].';'; }
				if( isset($main_bg['background-repeat']) && ($main_bg['background-repeat'] != '') ){ echo 'background-color:'.$main_bg['background-repeat'].';'; }
				if( isset($main_bg['background-attachment'])&&($main_bg['background-attachment'] !='')){echo'background-attachment:'.$main_bg['background-attachment'].';'; }
				if( isset($main_bg['background-position']) && ($main_bg['background-position'] != '') ){ echo 'background-position:'.$main_bg['background-position'].';'; }
				if( isset($main_bg['background-size']) && ($main_bg['background-size'] != '') ){ echo 'background-size:'.$main_bg['background-size'].';'; }
				if( isset($main_bg['background-image']) && ($main_bg['background-image'] != '') ){ echo 'background-image:'.$main_bg['background-image'].';'; }
			}
			?>	
		}
		
		#fwidget.color_mood_dark,
		#fwidget.color_mood_light{
			<?php
			$fwidget_bg = tally_option('color_fwidget_bg');
			if(is_array($fwidget_bg) && !empty($fwidget_bg)){
				if( isset($fwidget_bg['background-color']) && ($fwidget_bg['background-color'] != '') ){ echo 'background-color:'.$fwidget_bg['background-color'].';'; }
				if( isset($fwidget_bg['background-repeat']) && ($fwidget_bg['background-repeat'] != '') ){ echo 'background-color:'.$fwidget_bg['background-repeat'].';'; }
				if(isset($fwidget_bg['background-attachment'])&&($fwidget_bg['background-attachment']!='')){echo'background-attachment:'.$fwidget_bg['background-attachment'].';';}
				if( isset($fwidget_bg['background-position']) && ($fwidget_bg['background-position'] != '')){echo 'background-position:'.$fwidget_bg['background-position'].';'; }
				if( isset($fwidget_bg['background-size']) && ($fwidget_bg['background-size'] != '') ){ echo 'background-size:'.$fwidget_bg['background-size'].';'; }
				if( isset($fwidget_bg['background-image']) && ($fwidget_bg['background-image'] != '') ){ echo 'background-image:'.$fwidget_bg['background-image'].';'; }
			}
			?>	
		}
		
		#footer.color_mood_dark,
		#footer.color_mood_light{
			<?php
			$footer_bg = tally_option('color_footer_bg');
			if(is_array($footer_bg) && !empty($footer_bg)){
				if( isset($footer_bg['background-color']) && ($footer_bg['background-color'] != '') ){ echo 'background-color:'.$footer_bg['background-color'].';'; }
				if( isset($footer_bg['background-repeat']) && ($footer_bg['background-repeat'] != '') ){ echo 'background-color:'.$footer_bg['background-repeat'].';'; }
				if(isset($footer_bg['background-attachment'])&&($footer_bg['background-attachment']!='')){echo'background-attachment:'.$footer_bg['background-attachment'].';';}
				if( isset($footer_bg['background-position']) && ($footer_bg['background-position'] != '')){echo 'background-position:'.$footer_bg['background-position'].';'; }
				if( isset($footer_bg['background-size']) && ($footer_bg['background-size'] != '') ){ echo 'background-size:'.$footer_bg['background-size'].';'; }
				if( isset($footer_bg['background-image']) && ($footer_bg['background-image'] != '') ){ echo 'background-image:'.$footer_bg['background-image'].';'; }
			}
			?>	
		}
		
		
		
		
		/*--------------------- Menu ------------------*/
		body .menu_area #nav *{ color:<?php tally_color('color_navigation_text'); ?>; border-color:<?php tally_color('color_navigation_border'); ?> !important; }
		body .menu_area #nav a{ color:<?php tally_color('color_navigation_text'); ?>; background-color:<?php tally_color('color_navigation_bg'); ?>; }
		body .menu_area #nav a:hover,
		body .menu_area #nav ul > .current-menu-item a{ 
			color:<?php tally_color('color_navigation_text_hover'); ?>;
			border-color:<?php tally_color('color_navigation_border_hover'); ?> !important;
			background-color:<?php tally_color('color_navigation_bg_hover'); ?>; 
		}
		body .menu_area #nav ul li ul li a{ background-color:<?php tally_color('color_navigation_submenu_bg'); ?>; border-color:<?php tally_color('color_navigation_border', '0.14'); ?> !important; }
	</style>
    <?php
}