<?php
/*
 	Header Open Div
--------------------------------------------*/
if('digita_do_header_open_warp'):
	function digita_do_header_open_warp(){
		if(digita_is_header() == 'no') return;
		
		echo '<div id="header">';
			echo '<div id="header-inner">';
	}
	add_action('digita_header', 'digita_do_header_open_warp', 5);
endif;



/*
 	Header Closing Div
--------------------------------------------*/
if('digita_do_header_closing_warp'):
	function digita_do_header_closing_warp(){
		if(digita_is_header() == 'no') return;
		
				echo '<div class="clear"></div>';
			echo '</div>';
		echo '</div>';
	}
	add_action('digita_header', 'digita_do_header_closing_warp', 15);
endif;



/*
 	Add Site Logo
--------------------------------------------*/
if('digita_do_header_logo'):
	function digita_do_header_logo(){
		if(digita_is_header() == 'no') return;
		
		?><div class="logo_area hheight"><?php digitafn_logo(digita_option('site_logo')); ?></div><?php
	}
	add_action('digita_header', 'digita_do_header_logo', 10);
endif;



/*
 	Add Main menu
--------------------------------------------*/
if('digita_do_header_menu'):
	function digita_do_header_menu(){
		if(digita_is_header() == 'no') return;
		
		?>
        <div class="menu_area hheight">
            <nav id="nav" class="main-navigation" role="navigation">
                <?php wp_nav_menu( array('theme_location'=>'main_menu') ); ?>
            </nav><!-- #site-navigation -->
        </div>
		<?php
	}
	add_action('digita_header', 'digita_do_header_menu', 10);
endif;