<?php
/*
 	SubHeader Open Div
--------------------------------------------*/
if('digita_do_subheader_open_warp'):
	function digita_do_subheader_open_warp(){
		if(digita_is_subheader() == 'no') return;
		
		echo '<div id="subheader">';
			echo '<div id="subheader-inner">';
	}
	add_action('digita_after_header', 'digita_do_subheader_open_warp', 5);
endif;



/*
 	SubHeader Closing Div
--------------------------------------------*/
if('digita_do_subheader_closing_warp'):
	function digita_do_subheader_closing_warp(){
		if(digita_is_subheader() == 'no') return;
		
				echo '<div class="clear"></div>';
			echo '</div>';
		echo '</div>';
	}
	add_action('digita_after_header', 'digita_do_subheader_closing_warp', 15);
endif;



/*
 	Add Page Title
--------------------------------------------*/
if('digita_do_page_title'):
	function digita_do_page_title(){
		if(digita_is_subheader() == 'no') return;
		
		echo '<h1 class="page_title">';
			echo  apply_filters('digita_page_title', digitafn_title());
		echo '</h1>';
	}
	add_action('digita_after_header', 'digita_do_page_title', 10);
endif;



/*
 	Add Page Title
--------------------------------------------*/
if('digita_do_breadcrumb'):
	function digita_do_breadcrumb(){
		if(digita_is_subheader() == 'no') return;
		
		echo '<span class="breadcrumbs">';
			echo  apply_filters('digita_breadcrumb', digita_breadcrumb2());
		echo '</span>';
	}
	add_action('digita_after_header', 'digita_do_breadcrumb', 10);
endif;