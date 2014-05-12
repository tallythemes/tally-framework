<?php
add_action( 'admin_init', 'digita_postformat_metabox_register' );
function digita_postformat_metabox_register() {
	$prefix = 'digita_postformat_';
	
	//audio
	$settings = array();
	$settings[] = array(
		'id'          => $prefix.'audio_ogg',
        'label'       => __('OGG URL', 'digita_textdomain'),
        'desc'        => '',
        'std'         => '',
		'rows'         => '3',
        'type'        => 'upload',
        'class'       => '',
        'choices'     => array()
	);
	$settings[] = array(
		'id'          =>  $prefix.'audio_m4a',
        'label'       => __('MP3 URL', 'digita_textdomain'),
        'desc'        => '',
        'std'         => '',
		'rows'         => '3',
        'type'        => 'upload',
        'class'       => '',
        'choices'     => array()
	);
	$settings[] = array(
		'id'          =>  $prefix.'audio_embed',
        'label'       => __('AUDIO URL (OEMBED) OR EMBED CODE', 'digita_textdomain'),
        'desc'        => '',
        'std'         => '',
		'rows'         => '3',
        'type'        => 'textarea-simple',
        'class'       => '',
        'choices'     => array()
	);
	$metabox = array(
		'id'        => 'digita_ot_postFormat_audio_metabox',
		'title'     => 'Audio: Post Format',
		'desc'      => '',
		'pages'     => array( 'post' ),
		'context'   => 'normal',
		'priority'  => 'high',
		'fields'    => $settings,
	);
	ot_register_meta_box( $metabox );
	
	//video
	$settings = array();
	$settings[] = array(
		'id'          =>  $prefix.'video_embed',
        'label'       => __('Video URL (OEMBED) OR EMBED CODE', 'digita_textdomain'),
        'desc'        => '',
        'std'         => '',
		'rows'         => '3',
        'type'        => 'textarea-simple',
        'class'       => '',
        'choices'     => array()
	);
	$settings[] = array(
		'id'          => $prefix.'video_mp4',
        'label'       => __('Full URL of <strong>MP4</strong> video', 'digita_textdomain'),
        'desc'        => __('This is for hosted HTML5 video.', 'digita_textdomain'),
        'std'         => '',
		'rows'         => '3',
        'type'        => 'upload',
        'class'       => '',
        'choices'     => array()
	);
	$settings[] = array(
		'id'          => $prefix.'video_ogv',
        'label'       => __('Full URL of <strong>OGV</strong> video', 'digita_textdomain'),
        'desc'        => __('This is for hosted HTML5 video.', 'digita_textdomain'),
        'std'         => '',
		'rows'         => '3',
        'type'        => 'upload',
        'class'       => '',
        'choices'     => array()
	);
	$settings[] = array(
		'id'          => $prefix.'video_mov',
        'label'       => __('Full URL of <strong>MOV</strong> video', 'digita_textdomain'),
        'desc'        => __('This is for hosted HTML5 video.', 'digita_textdomain'),
        'std'         => '',
		'rows'         => '3',
        'type'        => 'upload',
        'class'       => '',
        'choices'     => array()
	);
	$settings[] = array(
		'id'          => $prefix.'video_poster',
        'label'       => __('Upload a Poster', 'digita_textdomain'),
        'desc'        => __('This is for hosted HTML5 video.', 'digita_textdomain'),
        'std'         => '',
		'rows'         => '3',
        'type'        => 'upload',
        'class'       => '',
        'choices'     => array()
	);
	$metabox = array(
		'id'        => 'digita_ot_postFormat_video_metabox',
		'title'     => 'Video: Post Format',
		'desc'      => '',
		'pages'     => array( 'post' ),
		'context'   => 'normal',
		'priority'  => 'high',
		'fields'    => $settings,
	);
	ot_register_meta_box( $metabox );
	
	//quote
	$settings = array();
	$settings[] = array(
		'id'          =>  $prefix.'quote_source_url',
        'label'       => __('Source URL', 'digita_textdomain'),
        'desc'        => '',
        'std'         => '',
		'rows'         => '3',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
	);
	$settings[] = array(
		'id'          =>  $prefix.'quote_source_name',
        'label'       => __('Source Name', 'digita_textdomain'),
        'desc'        => '',
        'std'         => '',
		'rows'         => '3',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
	);
	$metabox = array(
		'id'        => 'digita_ot_postFormat_quote_metabox',
		'title'     => 'Quote: Post Format',
		'desc'      => '',
		'pages'     => array( 'post' ),
		'context'   => 'normal',
		'priority'  => 'high',
		'fields'    => $settings,
	);
	ot_register_meta_box( $metabox );
	
	
	//link
	$settings = array();
	$settings[] = array(
		'id'          =>  $prefix.'link_url',
        'label'       => __('Source URL', 'digita_textdomain'),
        'desc'        => '',
        'std'         => '',
		'rows'         => '3',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array()
	);
	$metabox = array(
		'id'        => 'digita_ot_postFormat_link_metabox',
		'title'     => 'Link: Post Format',
		'desc'      => '',
		'pages'     => array( 'post' ),
		'context'   => 'normal',
		'priority'  => 'high',
		'fields'    => $settings,
	);
	ot_register_meta_box( $metabox );
	
	
	//gallery
	$settings = array();
	$settings[] = array(
		'id'          => $prefix.'gallery',
        'label'       => __('Gallery', 'digita_textdomain'),
        'desc'        => __('Upload some image via Media uploder of this post', 'digita_textdomain'),
        'std'         => '',
		'rows'         => '3',
        'type'        => 'gallery',
        'class'       => '',
        'choices'     => array()
	);
	$metabox = array(
		'id'        => 'digita_ot_postFormat_gallery_metabox',
		'title'     => 'Gallery: Post Format',
		'desc'      => '',
		'pages'     => array( 'post' ),
		'context'   => 'normal',
		'priority'  => 'high',
		'fields'    => $settings,
	);
	ot_register_meta_box( $metabox );
	
	//Image
	$settings = array();
	$settings[] = array(
		'id'          => $prefix.'image',
        'label'       => __('Image', 'digita_textdomain'),
        'desc'        => __('Set an Image as Featured Image', 'digita_textdomain'),
        'std'         => '',
		'rows'         => '3',
        'type'        => 'textblock',
        'class'       => '',
        'choices'     => array()
	);
	$metabox = array(
		'id'        => 'digita_ot_postFormat_image_metabox',
		'title'     => 'Image: Post Format',
		'desc'      => '',
		'pages'     => array( 'post' ),
		'context'   => 'normal',
		'priority'  => 'high',
		'fields'    => $settings,
	);
	ot_register_meta_box( $metabox );
	
	//status
	$settings = array();
	$settings[] = array(
		'id'          => $prefix.'status',
        'label'       => __('Status URL (OEMBED) OR EMBED CODE', 'digita_textdomain'),
        'desc'        => '',
        'std'         => '',
		'rows'         => '3',
        'type'        => 'textarea-simple',
        'class'       => '',
        'choices'     => array()
	);
	$metabox = array(
		'id'        => 'digita_ot_postFormat_status_metabox',
		'title'     => 'Status: Post Format',
		'desc'      => '',
		'pages'     => array( 'post' ),
		'context'   => 'normal',
		'priority'  => 'high',
		'fields'    => $settings,
	);
	ot_register_meta_box( $metabox );
}