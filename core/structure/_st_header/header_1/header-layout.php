<?php if(tally_is_topbar() != 'no'){ ?>
    <div id="topbar" class="<?php echo apply_filters('tally_topbar_class', ''); ?>">
        <div id="topbar-inner">
            <?php tally_st_header_menu_alt('align-left vertical-align-center'); ?>
            <?php tally_st_header_login('align-right vertical-align-center style_simple'); ?>
            <div class="clear"></div>
        </div>
    </div>
<?php } ?>

<?php if(tally_is_header() != 'no'){ ?>
    <div id="header" class="<?php echo apply_filters('tally_header_class', ''); ?>">
        <div id="header-inner">
            <?php tally_st_header_logo('align-left vertical-align-center'); ?>
            
            <div class="align-right vertical-align-center">
				<?php tally_st_header_phone('align-right style_simple'); ?>
                <?php tally_st_header_email('align-right style_simple'); ?>
                <div class="clear" style="height:5px;"></div>
                <?php tally_st_header_social_icons('align-right style_border_round'); ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <div id="navigation-area" class="<?php echo apply_filters('tally_site_nav_class', ''); ?>">
        <div id="navigation-area-inner">
            <?php tally_st_header_menu('align-left vertical-align-center border_full'); ?>
            <?php tally_st_header_woocommerce_cart('align-right vertical-align-center'); ?>
            <?php tally_st_header_wpml_menu('align-right vertical-align-center'); ?>
            <?php tally_st_header_serch('align-right vertical-align-center'); ?>
            <div class="clear"></div>
        </div>
    </div>
<?php } ?>