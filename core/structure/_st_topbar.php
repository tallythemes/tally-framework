<?php
/*
 	topbar Open Div
--------------------------------------------*/
if('digita_do_topbar_open_warp'):
	function digita_do_topbar_open_warp(){
		if(digita_is_topbar() == 'no') return;
		
		echo '<div id="topbar">';
			echo '<div id="topbar-inner">';
	}
	add_action('digita_before_header', 'digita_do_topbar_open_warp', 5);
endif;



/*
 	topbar Closing Div
--------------------------------------------*/
if('digita_do_topbar_closing_warp'):
	function digita_do_topbar_closing_warp(){
		if(digita_is_topbar() == 'no') return;
		
				echo '<div class="clear"></div>';
			echo '</div>';
		echo '</div>';
	}
	add_action('digita_before_header', 'digita_do_topbar_closing_warp', 15);
endif;



/*
 	topbar info
--------------------------------------------*/
if('digita_do_topbar_info_text'):
	function digita_do_topbar_info_text(){
		if(digita_is_topbar() == 'no') return;
		
		echo '<div class="topbar-info-text">';
			echo apply_filters('info_phone', '<div class="topbar-phone">000 000 0000</div>');
			echo apply_filters('info_email', '<div class="topbar-email">info@yourdomain.com</div>');
		echo '</div>';
	}
	add_action('digita_before_header', 'digita_do_topbar_info_text', 10);
endif;




/*
 	topbar Social Icons
--------------------------------------------*/
if('digita_do_topbar_social_icon'):
	function digita_do_topbar_social_icon(){
		if(digita_is_topbar() == 'no') return;
		?>
        <?php if(digita_option('enable_social_icons', 'yes') == 'yes'): ?>
			<?php if(is_array(digita_option('social_icons'))): ?>
                <div class="digita-social-icons">
                    <?php foreach(digita_option('social_icons') as $social_icon): ?>
                        <a href="<?php echo $social_icon['link']; ?>" class="" title="<?php echo $social_icon['title']; ?>" rel="nofollow" target="_blank">
                            <i class="fa <?php echo $social_icon['icon']; ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php
	}
	add_action('digita_before_header', 'digita_do_topbar_social_icon', 10);
endif;