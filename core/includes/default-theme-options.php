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
	$alt_ok = false;
	
	if(file_exists(TALLY_CHILD_DRI . '/demo/theme-options-alt.php')){
		$alt_ok = true;
		$dri = TALLY_CHILD_DRI . '/demo/theme-options-alt.php';
	}elseif(file_exists(TALLY_CHILD_DRI . '/demo/theme-options.php')){
		$dri = TALLY_CHILD_DRI . '/demo/theme-options.php';
	}elseif(file_exists(TALLY_DRI . '/demo/theme-options-alt.php')){
		$dri = TALLY_DRI . '/demo/theme-options-alt.php';
		$alt_ok = true;
	}elseif(file_exists(TALLY_DRI . '/demo/theme-options.php')){
		$dri = TALLY_DRI . '/demo/theme-options.php';
	}
		
	
	if(file_exists($dri)){
		ob_start();
			include($dri);
			$default_options_file = ob_get_contents();
		ob_end_clean();
			
			
		if($alt_ok == true){
			//$default_options_file = preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $default_options_file);
			$default_options = unserialize($default_options_file);
		}else{
			
			$default_options = unserialize( tally_decode( $default_options_file ) );
		}
		
		if(is_array($default_options)){
			$option = $default_options;
		}
	}
	
	$option['site_logo'] = TALLY_CHILD_URL.'/images/logo.png';
	$option['site_logo_retina'] = TALLY_CHILD_URL.'/images/logo@2x.png';
	
	
	return $option;	
}