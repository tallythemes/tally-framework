<?php
add_action( 'admin_init', 'tally_blog_template_metabox_register' );
function tally_blog_template_metabox_register() {
	
	$prefix = 'tally_blog_';
		
	$settings = array();
		
	$settings[] = array(
		'id'          => $prefix.'category',
		'label'       => __('Post Cayegory', 'tally_taxdomain'),
		'desc'        => __('Select a Category to display posts in this page.', 'tally_taxdomain'),
		'std'         => '',
		'type'        => 'category-select',
		'section'     => '',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => '',
	);
	$settings[] = array(
		'id'          => $prefix.'limit',
		'label'       => __('Post Limit', 'tally_taxdomain'),
		'desc'        => __('How many post you want to display per page.', 'tally_taxdomain'),
		'std'         => '10',
		'type'        => 'text',
		'section'     => '',
		'rows'        => '',
		'post_type'   => '',
		'taxonomy'    => '',
		'class'       => '',
	);			
		
	$metabox = array(
			'id'        => 'tally_ot_blog_template_metabox',
			'title'     => 'Blog Template Settings',
			'desc'      => '',
			'pages'     => apply_filters('tally_ot_blog_template_metabox', array( 'page' )),
			'context'   => 'normal',
			'priority'  => 'high',
			'fields'    => $settings,
	);
	ot_register_meta_box( $metabox );
}