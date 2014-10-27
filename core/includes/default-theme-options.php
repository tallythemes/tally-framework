<?php
/**
     * Default Theme Options loader
     *
     * @return    void
     *
     * @access    public
     * @since     0.8.6
-------------------------------------------------------*/
add_filter('tally_option_std', 'tally_option_std_filter');
function tally_option_std_filter($option){
	$dri = '';
	if(file_exists(TALLY_CHILD_DRI . '/demo/theme-options.txt')){
		$dri = TALLY_CHILD_DRI . '/demo/theme-options.txt';
	}elseif(file_exists(TALLY_DRI . '/demo/theme-options.txt')){
		$dri = TALLY_DRI . '/demo/theme-options.txt';
	}
		
	
	if(file_exists($dri)){
		$default_options_file = file_get_contents( $dri);
		$default_options = unserialize( tally_decode( $default_options_file ) );
		
		if(is_array($default_options)){
			$option = $default_options;
		}
	}
	
	$option['site_logo'] = TALLY_CHILD_URL.'/images/logo.png';
	$option['site_logo_retina'] = TALLY_CHILD_URL.'/images/logo@2x.png';
	
	
	return $option;	
}