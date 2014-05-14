<?php
/*
 	topbar Open Div
--------------------------------------------*/
if('tally_do_topbar_open_warp'):
	function tally_do_topbar_open_warp(){
		if(tally_is_topbar() == 'no') return;
		
		echo '<div id="topbar">';
			echo '<div id="topbar-inner">';
	}
	add_action('tally_before_header', 'tally_do_topbar_open_warp', 5);
endif;



/*
 	topbar Closing Div
--------------------------------------------*/
if('tally_do_topbar_closing_warp'):
	function tally_do_topbar_closing_warp(){
		if(tally_is_topbar() == 'no') return;
		
				echo '<div class="clear"></div>';
			echo '</div>';
		echo '</div>';
	}
	add_action('tally_before_header', 'tally_do_topbar_closing_warp', 15);
endif;



/*
 	topbar info
--------------------------------------------*/
if('tally_do_topbar_info_text'):
	function tally_do_topbar_info_text(){
		if(tally_is_topbar() == 'no') return;
		
		echo '<div class="topbar-info-text">';
			echo apply_filters('info_phone', '<div class="topbar-phone">000 000 0000</div>');
			echo apply_filters('info_email', '<div class="topbar-email">info@yourdomain.com</div>');
		echo '</div>';
	}
	add_action('tally_before_header', 'tally_do_topbar_info_text', 10);
endif;




/*
 	topbar Social Icons
--------------------------------------------*/
if('tally_do_topbar_social_icon'):
	function tally_do_topbar_social_icon(){
		if(tally_is_topbar() == 'no') return;
		?>
        <?php if(tally_option('enable_social_icons', 'yes') == 'yes'): ?>
			<?php if(is_array(tally_option('social_icons'))): ?>
                <div class="tally-social-icons">
                    <?php foreach(tally_option('social_icons') as $social_icon): ?>
                        <a href="<?php echo $social_icon['link']; ?>" class="" title="<?php echo $social_icon['title']; ?>" rel="nofollow" target="_blank">
                            <i class="fa <?php echo $social_icon['icon']; ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php
	}
	add_action('tally_before_header', 'tally_do_topbar_social_icon', 10);
endif;