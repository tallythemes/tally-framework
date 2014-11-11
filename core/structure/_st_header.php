<?php
function tally_st_header_menu($class = ''){
	?>
	<nav id="navigation" class="<?php echo $class; ?>" role="navigation">
		<?php wp_nav_menu( array('theme_location'=>'main_menu') ); ?>
	</nav><!-- #site-navigation -->
	<?php
}

function tally_st_header_menu_alt($class = ''){
	?>
	<div class="nav_alt-area <?php echo $class; ?>">
		<nav id="nav_alt" role="navigation">
			<?php wp_nav_menu( array('theme_location'=>'alt_menu') ); ?>
		</nav><!-- #site-navigation -->
	</div>
	<?php
}

function tally_st_header_info($class = ''){
	if(tally_option('header_info_text') != ''){
		?>
		<div class="header-info <?php echo $class; ?>">
			<div class="header-info-inner">
				<?php echo tally_option('header_info_text'); ?>
			</div>
		</div>
		<?php
	}
}

function tally_st_header_phone($class = '', $icon = '<i class="fa fa-phone"></i>'){
	if(tally_option('header_phone_number') != ''){
		?>
		<div class="header-phone <?php echo $class; ?>">
			<div class="header-phone-inner">
				<?php echo $icon; ?>
			 <a href="tel:<?php tally_option('header_phone_number'); ?>"><?php echo tally_option('header_phone_number'); ?></a>
			</div>
		</div>
		<?php
	}
}

function tally_st_header_email($class = '', $icon = '<i class="fa fa-envelope"></i>'){
	if(tally_option('header_email_address') != ''){
		?>
		<div class="header-email <?php echo $class; ?>">
			<div class="header-email-inner">
				<?php echo $icon; ?>
				<a href="mailto:<?php tally_option('header_email_address'); ?>"><?php echo tally_option('header_email_address'); ?></a>
			</div>
		</div>
		<?php
	}
}

function tally_st_header_logo($class = ''){
	?>
    <div class="logo_area <?php echo $class; ?>"><?php tallyfn_logo(tally_option('site_logo')); ?></div>
    <?php
}

function tally_st_header_social_icons($class = ''){
	if(tally_option('header_social_icons') == 'on'){
		tally_social_icons($class);
	}
}

function tally_st_header_woocommerce_cart($class = ''){
	if(tally_option('header_woocommerce_cart') == 'on'){
		tally_woocommerce_cart($class);
	}
}

function tally_st_header_wpml_menu($class = ''){
	if(tally_option('header_wpml_menu') == 'on'){
		tally_wpml_language_switcher( $class);
	}
}

function tally_st_header_advertisment($class = ''){
	if(tally_option('header_advertisment_code') != ''){
		echo tally_option('header_advertisment_code');
	}
}

function tally_st_header_serch($class = ''){
	if(tally_option('header_search_bar') == 'on'){
		tally_icon_search_bar($class);
	}
}

function tally_st_header_login($class = '', $login = '<i class="fa fa-lock"></i> Login', $register = '<i class="fa fa-plus-square"></i> Register'){
	?>
    <div class="header-logins-area <?php echo $class; ?>">
    	<div class="header-logins-inner">
        	<?php if($login != ''){ ?><a class="header-login" href="<?php echo tally_option('header_login_url'); ?>"><?php echo $login; ?></a> <?php } ?>
        	<?php if($register != ''){ ?><a class="header-register" href="<?php echo tally_option('header_register_url'); ?>"><?php echo $register; ?></a> <?php } ?>
        </div>
    </div>
    <?php
}

function tally_get_custom_header_dri(){
	$file_url = '';
	$layout = tally_option('header_layout');
	
	if( file_exists(TALLY_CHILD_DRI . '/_st_header/' . $layout . '/' . 'header-layout.php') ){
		$file_url = TALLY_CHILD_DRI . '/_st_header/' . $layout . '/';
	}elseif(file_exists(TALLY_DRI . '/_st_header/' . $layout . '/' . 'header-layout.php')){
		$file_url = TALLY_DRI . '/_st_header/' . $layout . '/';
	}elseif(file_exists(TALLY_DRI . '/core/structure/_st_header/' . $layout . '/' . 'header-layout.php')){
		$file_url = TALLY_DRI . '/core/structure/_st_header/' . $layout . '/';
	}
	
	return $file_url;
}

$tally_header_layout = tally_option('header_layout');
if($tally_header_layout != ''){
	add_filter('tally_st_header_info', '__return_false');
	add_filter('tally_st_header_phone', '__return_false');
	add_filter('tally_st_header_email', '__return_false');
	add_filter('tally_st_header_alt_menu', '__return_false');
	add_filter('tally_st_header_social_icons', '__return_false');
	add_filter('tally_st_header_woocommerce_cart', '__return_false');
	add_filter('tally_st_header_wpml_menu', '__return_false');
	add_filter('tally_st_header_advertisment', '__return_false');
	add_filter('tally_st_header_serch', '__return_false');
	add_filter('tally_st_header_login', '__return_false');	
	
	add_action('tally_header', 'tally_st_custom_header_do');
	function tally_st_custom_header_do(){
		if(file_exists( tally_get_custom_header_dri() . 'header-layout.php')){
			include(tally_get_custom_header_dri() . 'header-layout.php');
		}
	}
		
	if(file_exists( tally_get_custom_header_dri() . 'options-filters.php' )){
		include(tally_get_custom_header_dri().'options-filters.php');
	}
	
	
}else{
	/*
		Header Open Div
	--------------------------------------------*/
	if('tally_do_header_open_warp'){
		function tally_do_header_open_warp(){
			if(tally_is_header() == 'no') return;
			
			echo '<div id="header" class="'.apply_filters('tally_header_class', '').'">';
				echo '<div id="header-inner">';
		}
		add_action('tally_header', 'tally_do_header_open_warp', 5);
	}
	
	
	
	/*
		Header Closing Div
	--------------------------------------------*/
	if('tally_do_header_closing_warp'){
		function tally_do_header_closing_warp(){
			if(tally_is_header() == 'no') return;
			
					echo '<div class="clear"></div>';
				echo '</div>';
			echo '</div>';
		}
		add_action('tally_header', 'tally_do_header_closing_warp', 15);
	}
	
	
	
	/*
		Add Site Logo
	--------------------------------------------*/
	if('tally_do_header_logo'){
		function tally_do_header_logo(){
			if(tally_is_header() == 'no') return;
			
			?><div class="logo_area hheight"><?php tallyfn_logo(tally_option('site_logo')); ?></div><?php
		}
		add_action('tally_header', 'tally_do_header_logo', 10);
	}
	
	
	
	/*
		Add Main menu
	--------------------------------------------*/
	if('tally_do_header_menu'){
		function tally_do_header_menu(){
			if(tally_is_header() == 'no') return;
			
			?>
			<div class="menu_area hheight">
				<nav id="nav" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array('theme_location'=>'main_menu') ); ?>
				</nav><!-- #site-navigation -->
			</div>
			<?php
		}
		add_action('tally_header', 'tally_do_header_menu', 10);
	}
}