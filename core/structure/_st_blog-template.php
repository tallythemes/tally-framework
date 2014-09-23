<?php
add_action('tally_loop', 'tally_do_blog_page_template_content');
function tally_do_blog_page_template_content(){
	
	if(is_page_template( 'page-blog.php' )){
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
