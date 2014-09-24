<?php
/*
 	SubHeader Open Div
--------------------------------------------*/
if('tally_do_subheader_open_warp'):
	function tally_do_subheader_open_warp(){
		if(tally_is_subheader() == 'no') return;
		
		echo '<div id="subheader" class="'.apply_filters('tally_subheader_class', '').'">';
			echo '<div id="subheader-inner">';
	}
	add_action('tally_after_header', 'tally_do_subheader_open_warp', 5);
endif;



/*
 	SubHeader Closing Div
--------------------------------------------*/
if('tally_do_subheader_closing_warp'):
	function tally_do_subheader_closing_warp(){
		if(tally_is_subheader() == 'no') return;
		
				echo '<div class="clear"></div>';
			echo '</div>';
		echo '</div>';
	}
	add_action('tally_after_header', 'tally_do_subheader_closing_warp', 15);
endif;



/*
 	Add Page Title
--------------------------------------------*/
if('tally_do_page_title'):
	function tally_do_page_title(){
		if(tally_is_subheader() == 'no') return;
		
		echo '<h1 class="page_title">';
			echo  apply_filters('tally_page_title', tallyfn_title());
		echo '</h1>';
	}
	add_action('tally_after_header', 'tally_do_page_title', 10);
endif;



/*
 	Add Page Title
--------------------------------------------*/
if('tally_do_breadcrumb'):
	function tally_do_breadcrumb(){
		if(tally_is_subheader() == 'no') return;
		
		echo '<div class="breadcrumbs">';
			echo  apply_filters('tally_breadcrumb', tally_breadcrumb2());
		echo '</div>';
	}
	add_action('tally_after_header', 'tally_do_breadcrumb', 10);
endif;