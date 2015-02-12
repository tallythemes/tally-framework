<?php
if('tally_do_subheader_layout_one'):
	function tally_do_subheader_layout_one(){
		if(tally_is_subheader() == 'no') return;
		$color_mood = tally_option('color_footer_mood');
		if( get_post_meta(get_the_ID(), 'tally_subheader_color_mood', true) != '' ){ $color_mood = get_post_meta(get_the_ID(), 'tally_subheader_color_mood', true); }
		
		if(get_post_meta(get_the_ID(), 'tally_subheader_custom', true) != ''):
			echo do_shortcode(get_post_meta(get_the_ID(), 'tally_subheader_custom', true));
		else:
			echo '<div id="subheader" class="color_mood_'.$color_mood.'">';
				echo '<div id="subheader-inner">';
					
					tally_page_title();
					
					tally_page_subtitle();
					
					tally_theme_breadcrumbs();
					
					echo '<div class="clear"></div>';
				echo '</div>';
			echo '</div>';
		endif;
	}
	add_action('tally_after_header', 'tally_do_subheader_layout_one');
endif;