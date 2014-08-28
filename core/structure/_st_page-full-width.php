<?php
/*Stting for tally framework*/
add_filter('tally_main_class', 'tally_full_width_template_main_class_filter',20);
function tally_full_width_template_main_class_filter($class){
	if(is_page_template('page-full-width.php')){ $class = '';}
	return $class;	
}


add_filter('tally_sitebar_layout_option', 'tally_full_width_template_sitebar_layout_option', 12);
function tally_full_width_template_sitebar_layout_option($layout){
	if(is_page_template('page-full-width.php')){ $layout = 'full-width-content';}
	return $layout;	
}

//add_filter('tally_is_subheader', 'tally_full_width_template_is_subheader', 12);
function tally_full_width_template_is_subheader($layout){
	if(is_page_template('page-full-width.php')){
		$layout = 'no';
	}
	return $layout;	
}

add_filter('tally_is_comment_template', 'tally_full_width_template_is_comment_template', 12);
function tally_full_width_template_is_comment_template($layout){
	if(is_page_template('page-full-width.php')){
		$layout = 'no';
	}
	return $layout;	
}