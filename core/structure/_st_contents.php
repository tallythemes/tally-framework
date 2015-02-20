<?php
add_action('tally_loop', 'tally_do_content_404');
function tally_do_content_404(){
	if(is_404()){
		tally_file_dri('contents/_c_404.php');
	}
}



add_action('tally_loop', 'tally_do_is_archive_content');
function tally_do_is_archive_content(){
	if(is_archive()){
		tally_file_dri('contents/_c_archive.php');
	}
}



add_action('tally_loop', 'tally_do_home_content');
function tally_do_home_content(){
	if(is_home()){
		tally_file_dri('contents/_c_home.php');
	}
}




add_action('tally_loop', 'tally_do_page_content');
function tally_do_page_content(){
	if(is_page()){
		tally_file_dri('contents/_c_page.php');
	}
}



add_action('tally_loop', 'tally_do_is_search_content');
function tally_do_is_search_content(){
	if(is_search()){
		tally_file_dri('contents/_c_search.php');
	}
}



add_action('tally_loop', 'tally_do_single_content');
function tally_do_single_content(){
	if(is_single()){
		tally_file_dri('contents/_c_single.php');
	}
}




add_action('tally_loop', 'tally_do_blog_page_template_content');
function tally_do_blog_page_template_content(){
	
	if(is_page_template( 'template-blog.php' )){
		global $wp_query, $more;
		$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
		$args = array(
			'paged' => $paged,
			'post_type' => 'post',
			'posts_per_page' => get_post_meta(get_the_ID(), 'tally_blog_limit', true),
		);
		if(get_post_meta(get_the_ID(), 'tally_blog_category', true) != ''){
			$query_args['cat'] = get_post_meta(get_the_ID(), 'tally_blog_category', true);
		}
		$wp_query = new WP_Query( $args );
		$more = is_singular() ? $more : 0;//* Only set $more to 0 if we're on an archive
		
		do_action('tally_deafult_post_content');
		
		wp_reset_query();
	}
}





/*Stting for tally framework*/
add_filter('tally_main_class', 'tally_full_width_template_main_class_filter',20);
function tally_full_width_template_main_class_filter($class){
	if(is_page_template('template-full-width.php')){ $class = '';}
	return $class;	
}


add_filter('tally_sitebar_layout_option', 'tally_full_width_template_sitebar_layout_option', 12);
function tally_full_width_template_sitebar_layout_option($layout){
	if(is_page_template('template-full-width.php')){ $layout = 'full-width-content';}
	return $layout;	
}

//add_filter('tally_is_subheader', 'tally_full_width_template_is_subheader', 12);
function tally_full_width_template_is_subheader($layout){
	if(is_page_template('template-full-width.php')){
		$layout = 'no';
	}
	return $layout;	
}

add_filter('tally_is_comment_template', 'tally_full_width_template_is_comment_template', 12);
function tally_full_width_template_is_comment_template($layout){
	if(is_page_template('template-full-width.php')){
		$layout = 'no';
	}
	return $layout;	
}