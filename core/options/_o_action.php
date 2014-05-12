<?php
add_action('wp_head', 'digita_op_option_action');
function digita_op_option_action(){
	if(digita_option('favicon')){echo '<link rel="shortcut icon" href="'.digita_option('favicon').'" type="image/x-icon">';}
	if(digita_option('enable_google_fonts') == 'yes'){
		echo digita_option('headings_google_font_link');
		echo digita_option('body_google_font_link');
	}
	echo '<style type="text/css">';
		
		/*Branding*/
		if(digita_option('site_layout') == 'box'){
			echo '#wrapper{max-width: 1100px; margin: 30px auto; 
			-webkit-box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.40);
			-moz-box-shadow:    0px 0px 12px rgba(0, 0, 0, 0.40);
			box-shadow:         0px 0px 12px rgba(0, 0, 0, 0.40);}';
		}
		if(is_array(digita_option('site_background'))){
			$site_background = digita_option('site_background');
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
		if(digita_option('header_height')){echo '#header .hheaight{ height:'.digita_option('header_height').'; }';}
		if(digita_option('header_logo_top_margin')){echo '#header #logo{margin-top:'.digita_option('header_logo_top_margin').'; }';}
		if(digita_option('header_menu_top_margin')){echo '#header #nav{margin-top:'.digita_option('header_menu_top_margin').'; }';}
		if(digita_option('header_menu_top_margin')){echo 'ul.digita-wpml-language-switcher{margin-top:'.digita_option('header_menu_top_margin').'; }';}
		
		/*subHeader*/
		if(digita_option('subheader_bottom_padding')){echo '#subheader{ padding-bottom:'.digita_option('subheader_bottom_padding').'; }';}
		if(digita_option('subheader_top_padding')){echo '#subheader{padding-top:'.digita_option('subheader_top_padding').'; }';}
		
		
		/*-Typography-*/
		if(digita_option('enable_google_fonts') == 'yes'){
			if(digita_option('headings_google_font_family')){
				echo '#wrapper h1, #wrapper h2, #wrapper h3, #wrapper h4, #wrapper h5, #wrapper h6{ '.digita_option('headings_google_font_family').'}';
			}
			if(digita_option('body_google_font_family')){
				echo 'body{ '.digita_option('body_google_font_family').'}';
			}
		}
		if(digita_option('h1_font_size')){ echo 'h1{ font-size:'.digita_option('h1_font_size').'; }'; }
		if(digita_option('h2_font_size')){ echo 'h2{ font-size:'.digita_option('h2_font_size').'; }'; }
		if(digita_option('h3_font_size')){ echo 'h3{ font-size:'.digita_option('h3_font_size').'; }'; }
		if(digita_option('h4_font_size')){ echo 'h4{ font-size:'.digita_option('h4_font_size').'; }'; }
		if(digita_option('h5_font_size')){ echo 'h5{ font-size:'.digita_option('h5_font_size').'; }'; }
		if(digita_option('h6_font_size')){ echo 'h6{ font-size:'.digita_option('h6_font_size').'; }'; }
		if(digita_option('body_font_size')){ echo 'body{ font-size:'.digita_option('body_font_size').'; }'; }
		
		/*-Integration-*/
		if(digita_option('custom_css')){ echo digita_option('custom_css'); }
	echo '</style>';
	
	if(digita_option('google_analytics')){ echo digita_option('google_analytics'); }
}

add_action('wp_footer', 'digita_ot_footer_action');
function digita_ot_footer_action(){
	echo '<script type="text/javascript">';
		if(digita_option('custom_js')){ echo digita_option('custom_js'); }
	echo '</script>';
}