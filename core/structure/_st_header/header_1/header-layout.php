<?php if(tally_is_topbar() != 'no'){ ?>
    <div id="topbar" class="<?php echo apply_filters('tally_topbar_class', ''); ?>">
        <div id="topbar-inner">
            <?php tally_st_header_menu_alt(); ?>
            <?php tally_st_header_login(); ?>
        </div>
    </div>
<?php } ?>

<?php if(tally_is_header() != 'no'){ ?>
    <div id="header" class="<?php echo apply_filters('tally_header_class', ''); ?>">
        <div id="header-inner">
            <?php tally_st_header_logo(); ?>
            <?php tally_st_header_phone(); ?>
            <?php tally_st_header_email(); ?>
            <div class="clear"></div>
            <?php tally_st_header_social_icons(); ?>
            <div class="clear"></div>
        </div>
    </div>
    
    <div id="site-nav" class="<?php echo apply_filters('tally_site_nav_class', ''); ?>">
        <div id="site-nav-inner">
            <?php tally_st_header_menu(); ?>
            <?php tally_st_header_woocommerce_cart(); ?>
            <?php tally_st_header_wpml_menu(); ?>
            <?php tally_st_header_serch(); ?>
        </div>
    </div>
<?php } ?>