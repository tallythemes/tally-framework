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
	
	if(file_exists(TALLY_CHILD_DRI . '/demo/tconfig.php')){
		$alt_ok = true;
		$dri = TALLY_CHILD_DRI . '/demo/tconfig.php';
	}elseif(file_exists(TALLY_CHILD_DRI . '/demo/theme-options.php')){
		$dri = TALLY_CHILD_DRI . '/demo/theme-options.php';
	}elseif(file_exists(TALLY_DRI . '/demo/tconfig.php')){
		$dri = TALLY_DRI . '/demo/tconfig.php';
		$alt_ok = true;
	}elseif(file_exists(TALLY_DRI . '/demo/theme-options.php')){
		$dri = TALLY_DRI . '/demo/theme-options.php';
	}
		
	
	if(file_exists($dri)){
		
			
			
		if($alt_ok == true){
			include($dri);
			$default_options = $tally_config;
		}else{
			ob_start();
				include($dri);
				$default_options_file = ob_get_contents();
			ob_end_clean();		
			$default_options = unserialize( tally_decode( $default_options_file ) );
		}
		
		if(is_array($default_options)){
			$option = $default_options;
		}
	}
	
	//print_r($default_options);
	
	$option['site_logo'] = 'none';
	$option['site_logo_retina'] = TALLY_CHILD_URL.'/images/logo@2x.png';
	
	return $option;	
}