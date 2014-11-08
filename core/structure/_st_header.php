<?php
function tally_st_header_menu(){
	?>
	<div class="menu_area hheight">
		<nav id="nav" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array('theme_location'=>'main_menu') ); ?>
		</nav><!-- #site-navigation -->
	</div>
	<?php
}

function tally_st_header_menu_alt(){
	?>
	<div class="menu_alt_area hheight">
		<nav id="nav_alt" role="navigation">
			<?php wp_nav_menu( array('theme_location'=>'main_menu_alt') ); ?>
		</nav><!-- #site-navigation -->
	</div>
	<?php
}

function tally_st_header_info(){
	
}

function tally_st_header_phone(){
	
}

function tally_st_header_email(){
	
}

function tally_st_header_logo(){
	?>
    <div class="logo_area hheight"><?php tallyfn_logo(tally_option('site_logo')); ?></div>
    <?php
}

function tally_st_header_social_icons(){
	tally_social_icons($class = '');
}

function tally_st_header_woocommerce_cart(){
	
}

function tally_st_header_wpml_menu(){
	tally_wpml_language_switcher( $class = '' );
}

function tally_st_header_advertisment(){
	
}

function tally_st_header_serch(){
	tally_icon_search_bar($class = '');
}

function tally_st_header_login(){
	
}

$header_layout = tally_option('header_layout');
if($header_layout != ''){
	add_filter('tally_st_header_info', '__return_false');
	add_filter('tally_st_header_menu_alt', '__return_false');
	add_filter('tally_st_header_phone', '__return_false');
	add_filter('tally_st_header_email', '__return_false');
	add_filter('tally_st_header_social_icons', '__return_false');
	add_filter('tally_st_header_woocommerce_cart', '__return_false');
	add_filter('tally_st_header_wpml_menu', '__return_false');
	add_filter('tally_st_header_advertisment', '__return_false');
	add_filter('tally_st_header_serch', '__return_false');
	add_filter('tally_st_header_login', '__return_false');
	
	$header_file_url = '';
	
	if( file_exists(TALLY_CHILD_DRI . '/_st_header/' . $header_layout . '/' . $header_layout . '.php') ){
		$header_file_url = TALLY_CHILD_DRI . '/_st_header/' . $header_layout . '/';
	}elseif(file_exists(TALLY_DRI . '/_st_header/' . $header_layout . '/' . $header_layout . '.php')){
		$header_file_url = TALLY_DRI . '/_st_header/' . $header_layout . '/';
	}elseif(file_exists(TALLY_DRI . '/core/structure/_st_header/' . $header_layout . '/' . $header_layout . '.php')){
		$header_file_url = TALLY_DRI . '/core/structure/_st_header/' . $header_layout . '/';
	}
	
	if(file_exists( $header_file_url )){
		include($header_file_url.'options-filters.php');
		add_action('tally_header', 'tally_st_custom_header_do');
		function tally_st_custom_header_do(){
			include($header_file_url.'header-layout.php');
		}
	}
	
}else{
	/*
		Header Open Div
	--------------------------------------------*/
	if('tally_do_header_open_warp'):
		function tally_do_header_open_warp(){
			if(tally_is_header() == 'no') return;
			
			echo '<div id="header" class="'.apply_filters('tally_header_class', '').'">';
				echo '<div id="header-inner">';
		}
		add_action('tally_header', 'tally_do_header_open_warp', 5);
	endif;
	
	
	
	/*
		Header Closing Div
	--------------------------------------------*/
	if('tally_do_header_closing_warp'):
		function tally_do_header_closing_warp(){
			if(tally_is_header() == 'no') return;
			
					echo '<div class="clear"></div>';
				echo '</div>';
			echo '</div>';
		}
		add_action('tally_header', 'tally_do_header_closing_warp', 15);
	endif;
	
	
	
	/*
		Add Site Logo
	--------------------------------------------*/
	if('tally_do_header_logo'):
		function tally_do_header_logo(){
			if(tally_is_header() == 'no') return;
			
			?><div class="logo_area hheight"><?php tallyfn_logo(tally_option('site_logo')); ?></div><?php
		}
		add_action('tally_header', 'tally_do_header_logo', 10);
	endif;
	
	
	
	/*
		Add Main menu
	--------------------------------------------*/
	if('tally_do_header_menu'):
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
	endif;
}