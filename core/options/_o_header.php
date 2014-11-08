<?php
add_filter('option_tree_settings_args', 'tally_header_ot_options');
function tally_header_ot_options($custom_settings){
	
	if(tally_check() == true):
		$custom_settings['sections'][] = array( 'id' => 'header','title' => 'Header');
		
		$custom_settings['settings']['enable_header_sticky'] = array(
			'id'          => 'enable_header_sticky',
			'label'       => __('Enable Header sticky', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('enable_header_sticky'),
			'type'        => 'select',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array( 
				array('value' => '', 'label' => '--','src' => ''),
				array('value' => 'yes', 'label' => 'Yes','src' => ''),
				array('value' => 'no','label' => 'No','src' => '')
			),
		);
		
		$custom_settings['settings']['header_height'] = array(
			'id'          => 'header_height',
			'label'       => __('Header height', 'tally_taxdomain'),
			'desc'        => __('This is the height of the site header <strong>Example: <code>52px</code></strong>', 'tally_taxdomain'),
			'std'         => tally_option_std('header_height'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['header_menu_top_margin'] = array(
			'id'          => 'header_menu_top_margin',
			'label'       => __('Top margin of the menu', 'tally_taxdomain'),
			'desc'        => __('This is the top margin of the header menu <strong>Example: <code>10px</code></strong>', 'tally_taxdomain'),
			'std'         => tally_option_std('header_menu_top_margin'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		$custom_settings['settings']['header_logo_top_margin'] = array(
			'id'          => 'header_logo_top_margin',
			'label'       => __('Top margin of the Logo', 'tally_taxdomain'),
			'desc'        => __('This is the top margin of the header Logo <strong>Example: <code>52px</code></strong>', 'tally_taxdomain'),
			'std'         => tally_option_std('header_logo_top_margin'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
		
		
		
	elseif( (tally_check() != true ) && ( TALLY_THEME_STORE_URL != '') ):
		$custom_settings['sections'][] = array( 'id' => 'header','title' => 'Header');
		$custom_settings['settings']['option_header_image_'] = array(
			'id'          => 'option_header_image_',
			'label'       => '',
			'desc'        => '<a href="'.TALLY_THEME_STORE_URL.'" target="_blank"><img src="'.TALLY_URL.'/core/assets/images/admin/option-header.png" /></a>',
			'std'         => '',
			'type'        => 'textblock',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
		);
	endif;
	
	if(apply_filters('tally_st_header_info', false) == true){
		$custom_settings['settings']['header_info_text'] = array(
			'id'          => 'header_info_text',
			'label'       => __('Header Info Text', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_info_text'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
	}
	if(apply_filters('tally_st_header_phone', false) == true){
		$custom_settings['settings']['header_phone_number'] = array(
			'id'          => 'header_phone_number',
			'label'       => __('Header Phone Number', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_phone_number'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
	}
	if(apply_filters('tally_st_header_email', false) == true){
		$custom_settings['settings']['header_email_address'] = array(
			'id'          => 'header_email_address',
			'label'       => __('Header Email Address', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_email_address'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
	}
	if(apply_filters('tally_st_header_social_icons', false) == true){
		$custom_settings['settings']['header_social_icons'] = array(
			'id'          => 'header_social_icons',
			'label'       => __('Active Header Social Icons', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_social_icons'),
			'type'        => 'on_off',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
	}
	if(apply_filters('tally_st_header_woocommerce_cart', false) == true){
		$custom_settings['settings']['header_woocommerce_cart'] = array(
			'id'          => 'header_woocommerce_cart',
			'label'       => __('Active Header WooCommerce Cart', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_woocommerce_cart'),
			'type'        => 'on_off',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
	}
	if(apply_filters('tally_st_header_wpml_menu', false) == true){
		$custom_settings['settings']['header_wpml_menu'] = array(
			'id'          => 'header_wpml_menu',
			'label'       => __('Active Header WPML Menu', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_wpml_menu'),
			'type'        => 'on_off',
			'section'     => 'header',
			'rows'        => '4',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
	}
	if(apply_filters('tally_st_header_advertisment', false) == true){
		$custom_settings['settings']['header_advertisment_code'] = array(
			'id'          => 'header_advertisment_code',
			'label'       => __('Header Advertisment Code', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_advertisment_code'),
			'type'        => 'textarea-simple',
			'section'     => 'header',
			'rows'        => '5',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
	}
	if(apply_filters('tally_st_header_serch', false) == true){
		$custom_settings['settings']['header_search_bar'] = array(
			'id'          => 'header_search_bar',
			'label'       => __('Active Header Search bar', 'tally_taxdomain'),
			'desc'        => '',
			'std'         => tally_option_std('header_search_bar'),
			'type'        => 'on_off',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
	}
	if(apply_filters('tally_st_header_login', false) == true){
		$custom_settings['settings']['header_register_url'] = array(
			'id'          => 'header_register_url',
			'label'       => __('Register Page URL', 'tally_taxdomain'),
			'desc'        => __('include the full URL including <code>http://</code>', 'tally_taxdomain'),
			'std'         => tally_option_std('header_register_url'),
			'type'        => 'text',
			'section'     => 'header',

			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
	}
	if(apply_filters('tally_st_header_login', false) == true){
		$custom_settings['settings']['header_login_url'] = array(
			'id'          => 'header_login_url',
			'label'       => __('Login Page URL', 'tally_taxdomain'),
			'desc'        => __('include the full URL including <code>http://</code>', 'tally_taxdomain'),
			'std'         => tally_option_std('header_login_url'),
			'type'        => 'text',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => '',
		);
	}
	
	
	if( defined('TALLY_THEME_DEV_SETTINGS') ):
		
		function tally_get_custom_header_image_url($layout){
			$file_url = '';
			
			if( file_exists(TALLY_CHILD_DRI . '/_st_header/' . $layout . '/' . 'screenshot.jpg') ){
				$file_url = TALLY_CHILD_URL . '/_st_header/' . $layout . '/screenshot.jpg';
			}elseif(file_exists(TALLY_DRI . '/_st_header/' . $layout . '/' . 'screenshot.jpg')){
				$file_url = TALLY_URL . '/_st_header/' . $layout . '/screenshot.jpg';
			}elseif(file_exists(TALLY_DRI . '/core/structure/_st_header/' . $layout . '/' . 'screenshot.jpg')){
				$file_url = TALLY_URL . '/core/structure/_st_header/' . $layout . '/screenshot.jpg';
			}
			
			return $file_url;
		}
		
		$custom_settings['settings']['header_layout'] = array(
			'id'          => 'header_layout',
			'label'       => 'Header Layout',
			'desc'        => '',
			'std'         => tally_option_std('header_layout'),
			'type'        => 'radio-image',
			'section'     => 'header',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'class'       => '',
			'choices'     => array(
				array(
					'value'       => 'header_1',
					'label'       => __( 'header_1', 'tally_taxdomain' ),
					'src'         => tally_get_custom_header_image_url('header_1')
				),
			)
		);
	endif;
	
	return $custom_settings;
}