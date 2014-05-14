<?php
add_action('wp_head', 'tally_op_option_action');
function tally_op_option_action(){
	if(tally_option('favicon')){echo '<link rel="shortcut icon" href="'.tally_option('favicon').'" type="image/x-icon">';}
	if(tally_option('enable_google_fonts') == 'yes'){
		echo tally_option('headings_google_font_link');
		echo tally_option('body_google_font_link');
	}
	echo '<style type="text/css">';
		
		/*Branding*/
		if(tally_option('site_layout') == 'box'){
			echo '#wrapper{max-width: 1100px; margin: 30px auto; 
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
		if(tally_option('header_height')){echo '#header .hheaight{ height:'.tally_option('header_height').'; }';}
		if(tally_option('header_logo_top_margin')){echo '#header #logo{margin-top:'.tally_option('header_logo_top_margin').'; }';}
		if(tally_option('header_menu_top_margin')){echo '#header #nav{margin-top:'.tally_option('header_menu_top_margin').'; }';}
		if(tally_option('header_menu_top_margin')){echo 'ul.tally-wpml-language-switcher{margin-top:'.tally_option('header_menu_top_margin').'; }';}
		
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
		
		/*-Integration-*/
		if(tally_option('custom_css')){ echo tally_option('custom_css'); }
	echo '</style>';
	
	if(tally_option('google_analytics')){ echo tally_option('google_analytics'); }
}

add_action('wp_footer', 'tally_ot_footer_action');
function tally_ot_footer_action(){
	echo '<script type="text/javascript">';
		if(tally_option('custom_js')){ echo tally_option('custom_js'); }
	echo '</script>';
}