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
	if(file_exists(TALLY_CHILD_DRI . '/demo/theme-options.php')){
		$dri = TALLY_CHILD_DRI . '/demo/theme-options.php';
	}elseif(file_exists(TALLY_DRI . '/demo/theme-options.php')){
		$dri = TALLY_DRI . '/demo/theme-options.php';
	}
		
	
	if(file_exists($dri)){
		ob_start();
			include($dri);
			$default_options_file = ob_get_contents();
		ob_end_clean();
		
		$default_options = unserialize( tally_decode( $default_options_file ) );
		
		if(is_array($default_options)){
			$option = $default_options;
		}
	}
	
	$option['site_logo'] = TALLY_CHILD_URL.'/images/logo.png';
	$option['site_logo_retina'] = TALLY_CHILD_URL.'/images/logo@2x.png';
	
	
	return $option;	
}