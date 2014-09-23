<?php
/***
	Post Header markup open and close
*-----------------------------------------------*/
function tally_entry_header_markup_open(){
	echo '<div class="entry-header">';	
}

function tally_entry_header_markup_close(){
	echo '</div>';	
}



/***
	Post Footer markup open and close
*-----------------------------------------------*/
function tally_entry_footer_markup_open(){
	echo '<div class="entry-footer">';	
}

function tally_entry_footer_markup_close(){
	echo '</div>';	
}


function tally_deafult_page_content(){
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post();
			echo '<article '; post_class(); echo '>';
				echo '<div class="entry-content">';
					the_content();
				echo '</div>';
			echo '</article>';
		endwhile;
	else :
		tally_do_noposts();
	endif;
}

add_action('tally_deafult_post_content', 'tally_deafult_post_content');
function tally_deafult_post_content(){
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post();
			echo '<article '; post_class(); echo '>';
				echo '<div class="entry-header">';
					tally_do_post_media();
					tally_do_post_title();
					tally_do_post_info();
				echo '</div>';
				echo '<div class="entry-content">';
					tally_do_post_content();
					tally_do_post_content_nav();
				echo '</div>';
				echo '<div class="entry-footer">';
				
				echo '</div>';
			echo '</article>';
		endwhile;
		tally_do_posts_nav();
	else :
		tally_do_noposts();
	endif;
}



/***
	Add post Title 
*-----------------------------------------------*/
function tally_do_post_title(){
	if(is_single()) return;
	if(get_post_format() == 'aside') return;
	if(get_post_format() == 'quote') return;
	?>
	<h2 class="entry-title">
		<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'tally_textdomain' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
	</h2>
    <?php
}



/***
	Add post info 
*-----------------------------------------------*/
function tally_do_post_info(){
	if(get_post_format() == 'aside') return;
	if(get_post_format() == 'quote') return;
	if(get_post_format() == 'link') return;
	?>
    <div class="entry-meta">
        <div class="entry-meta-item"><i class="fa-user fa"></i> <?php the_author_posts_link(); ?></div>
        <div class="entry-meta-item"><i class="fa-calendar fa"></i> <?php the_date(); ?></div>
        <div class="entry-meta-item"><i class="fa-comment fa"></i> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
    </div>
    <div class="clear"></div>
    <?php
}



/***
	Add post Content
*-----------------------------------------------*/
function tally_do_post_content(){
	if(is_search()) {
		the_excerpt();
		echo '<div class="entry-readmore"><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'tally_textdomain') . '</a></div>';
	}else{
		//$more = apply_filters('tally_content_more', __( '<div class="entry-readmore">Read More</div>', 'tally_textdomain' ));
		the_content();
	}
}

add_filter( 'the_content_more_link', 'tally_modify_read_more_link' );
function tally_modify_read_more_link() {
	$text = __('Read More', 'tally_textdomain');
	return '<div class="entry-readmore"><a class="more-link" href="' . get_permalink() . '">'.$text.'</a></div>';
}




/***
	Add wp_link_pages aftet the post content
*-----------------------------------------------*/
function tally_do_post_content_nav(){
	wp_link_pages(array('before' => '<p class="page_nav_link">' . __('Pages:', 'tally_textdomain'), 'after' => '</p>',));
}




/***
	Add Pagenation
*-----------------------------------------------*/
function tally_do_posts_nav(){
	echo tallyfn_paginate2();	
}




/***
	Add loop else content
*-----------------------------------------------*/
function tally_do_noposts(){
	?>
    <h4 class="page-title"><?php _e( 'Nothing Found', 'tally_taxdomain' ); ?></h4>
	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'tally_taxdomain' ); ?></p>
	<?php get_search_form(); ?>
    <?php
}



/***
	Add the comment template after the loop
*-----------------------------------------------*/
function tally_do_comments_template(){
	global $post;

	if ( ! post_type_supports( $post->post_type, 'comments' ) ) return;
	
	if (tally_is_comment_template() != 'yes') return;

	comments_template( '', true );
}



/***
	Add Author bio
*-----------------------------------------------*/
function tally_do_author_box_single(){
	if(!is_single()) return;
	global $authordata;
	 $context = '';
	$authordata    = is_object( $authordata ) ? $authordata : get_userdata( get_query_var( 'author' ) );
	$gravatar_size = apply_filters( 'tally_author_box_gravatar_size', 70, $context );
	$gravatar      = get_avatar( get_the_author_meta( 'email' ), $gravatar_size );
	$description   = wpautop( get_the_author_meta( 'description' ) );

	//* The author box markup, contextual

	$title = apply_filters( 'genesis_author_box_title', sprintf( '%s <span itemprop="name">%s</span>', __( 'About', 'genesis' ), get_the_author() ), $context );

	$pattern  = '<section class="author-box">';
	$pattern .= $gravatar.'<h1 class="author-box-title">'.$title.'</h1>';
	$pattern .= '<div class="author-box-content" itemprop="description">'.$description.'</div>';
	$pattern .= '<div class="clear"></div>';
	$pattern .= '</section>';
	
	echo $pattern;
}


/***
	Post Meta
*-----------------------------------------------*/
function tally_do_post_meta(){
	if(!is_single()) return;
	?>
    <div class="entry-single-meta">
        <div class="tagmeta"><strong><?php _e('Categories:', 'tally_taxdomain'); ?>&nbsp;</strong><?php the_category(', '); ?></div>
        <div class="tagmeta"><strong><?php _e('Tags:', 'tally_taxdomain'); ?>&nbsp;</strong><?php the_tags('',', '); ?></div>
    </div>
	<?php
}




/***
	Post Meta
*-----------------------------------------------*/
function tally_do_post_media(){
	
	//video
	if(get_post_format() == 'video'){
		$thumb_data = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); // Get post by ID
		$video_mp4 = get_post_meta(get_the_ID(), 'tally_postformat_video_mp4', true);
		$video_ogv = get_post_meta(get_the_ID(), 'tally_postformat_video_ogv', true);
		$video_mov = get_post_meta(get_the_ID(), 'tally_postformat_video_mov', true);
		$video_poster = $thumb_data[0];
		$embed = get_post_meta(get_the_ID(), 'tally_postformat_video_embed', true);
		if($embed){
			echo '<div class="entry-video-om entry-media">';
				echo wp_oembed_get($embed);
			echo '</div>';
		}else{
			echo '<div class="entry-video entry-media">';
				echo do_shortcode('[video mp4="'.$video_mp4.'" ogv="'.$video_ogv.'" mov="'.$video_mov.'" poster="'.$video_poster.'"]');
			echo '</div>';
		}
	}
	
	//audio
	if(get_post_format() == 'audio'){
		$ogg_url = get_post_meta(get_the_ID(), 'tally_postformat_audio_ogg', true);
		$m4a_url = get_post_meta(get_the_ID(), 'tally_postformat_audio_m4a', true);
		$embed = (string)get_post_meta(get_the_ID(), 'tally_postformat_audio_embed', true);
		if($embed){
			echo '<div class="audio-embed entry-media">';
				echo wp_oembed_get($embed);
			echo '</div>';
		}else{
			echo '<div class="audio-hosted entry-media">';
				$thumb_data = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); // Get post by ID
				echo '<img src="'.tally_image_size($thumb_data[0], TALLY_BLOG_IMG_W, TALLY_BLOG_IMG_H).'" class="audio-poster-image" alt="'.get_the_title().'">';
				echo do_shortcode('[audio mp3="'.$m4a_url.'" ogg="'.$ogg_url.'"]');
			echo '</div>';
		}
	}
	
	//Gallery
	if(get_post_format() == 'gallery'){
		echo '<div class="entry-gallery flexslider-gallery  entry-media" id="slidersingle_'.get_the_ID().'">';
			echo '<ul class="slides" >';
				$attachments = explode(",", get_post_meta(get_the_ID(), 'tally_postformat_gallery', true));
				if ( $attachments ) {
					foreach ( $attachments as $attachment ) {
						$image = wp_get_attachment_image_src($attachment, 'full');						
						echo '<li>';
							echo '<a href="'.$image[0].'" rel="prettyPhoto[g_'.get_the_ID().']"><img src="' . tally_image_size($image[0], TALLY_BLOG_G_IMG_W, TALLY_BLOG_G_IMG_H) . '" alt="'.get_the_title().'" /></a>';
						echo '</li>';
					}
				}
			echo '</ul>';
		echo '</div>';
		?>
        <script type="text/javascript">
			jQuery(window).load(function() {
				jQuery("#slidersingle_<?php echo get_the_ID(); ?>").flexslider({
					animation: "fade",
					smoothHeight: false,
					reverse: true,
					controlNav: true,
					pauseOnHover: true
				});
			});
		</script>
        <?php
	}
	
	//image
	if(get_post_format() == 'image'){
		echo '<div class="entry-image entry-media">';
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
			echo '<a href="'.$large_image_url[0].'" rel="prettyPhoto">';
				$thumb_data = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); // Get post by ID
				echo '<img src="'.tally_image_size($thumb_data[0], TALLY_BLOG_IMG_W, TALLY_BLOG_IMG_H).'" class="audio-poster-image" alt="'.get_the_title().'">';
			echo '</a>';
		echo '</div>';
	}
}


/***
	Post format quote
*-----------------------------------------------*/
function tally_do_post_format_quote(){
	if(get_post_format() == 'quote'){
		$author_name = get_the_title();
		$author_url = get_post_meta(get_the_ID(), 'tally_postformat_quote_source_url', true);
		?>
		<a target="_blank" href="<?php echo $author_url; ?>"  title="Source" class="entry-source">&mdash; <?php echo $author_name; ?></a>
		<?php	
	}
}


/***
	Post format link
*-----------------------------------------------*/
function tally_do_post_format_link(){
	if(get_post_format() == 'link'){
		$link = get_post_meta(get_the_ID(), 'tally_postformat_link_url', true);
		?>
		<div class="entry-link">
        	Link - 
        	<a class="link_s" href="<?php echo $link; ?>" target="_blank" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'tally_textdomain' ), $link ) ); ?>">
			<?php echo $link; ?>
        	</a>
        </div>
		<?php
	}
}