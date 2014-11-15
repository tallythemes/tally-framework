<?php if(tally_is_topbar() != 'no'){ ?>
    <div id="topbar" class="<?php echo apply_filters('tally_topbar_class', ''); ?> border-<?php echo tally_option('header_layout_topbar_border'); ?>">
        <div id="topbar-inner">
            <?php tally_st_header_menu_alt('align-left vertical-align-center'); ?>
            <?php tally_st_header_login('align-right vertical-align-center '.tally_option('header_layout_logins_style')); ?>
            <div class="clear"></div>
        </div>
    </div>
<?php } ?>

<?php if(tally_is_header() != 'no'){ ?>
    <div id="header" class="<?php echo apply_filters('tally_header_class', ''); ?> border-<?php echo tally_option('header_layout_header_border'); ?>">
        <div id="header-inner">
            <?php tally_st_header_logo('align-left vertical-align-center'); ?>
            
            <div class="align-right vertical-align-center">
				<?php tally_st_header_phone('align-right style_simple'); ?>
                <?php tally_st_header_email('align-right style_simple'); ?>
                <div class="clear" style="height:5px;"></div>
                <?php tally_st_header_social_icons('align-right '.tally_option('header_layout_social_icon_style')); ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <div id="navigation-area" class="<?php echo apply_filters('tally_navigation_area_class', ''); ?> border-<?php echo tally_option('header_layout_menu_border'); ?>">
        <div id="navigation-area-inner">
            <?php tally_st_header_menu('align-left vertical-align-center '.tally_option('header_layout_navigation_style')); ?>
            <?php tally_st_header_woocommerce_cart('align-right vertical-align-center margin-left-10px'); ?>
            <?php tally_st_header_wpml_menu('align-right vertical-align-center margin-left-10px'); ?>
            <?php tally_st_header_serch('align-right vertical-align-center margin-left-10px'); ?>
            <div class="clear"></div>
        </div>
    </div>
<?php } ?>