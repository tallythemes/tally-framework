<?php
function tally_setup_admin_help_notice(){
	if(apply_filters('tally_help_notice_display', true) == false) return;
	if(TALLY_THEME_STORE_URL == '') return;
	if(isset($_GET['page']) && ($_GET['page'] == 'ot-theme-options')){
    ?>
    <style type="text/css">
	.tally_setup_help_notic{
		background:#f9f9f9; 
		padding:20px; 
		border-radius: 5px; 
		border: 3px solid #f1f1f1;
		margin: 40px 20px 0 2px;
	}
	.tally_setup_help_notic .button{ margin-right:15px; }
	</style>
    <div class="tally_setup_help_notic">
    	<?php if(TALLY_THEME_STORE_URL != ''): ?>
        	<a href="<?php echo TALLY_THEME_STORE_URL; ?>" target="_blank" class="button button-primary button-large">Visit <?php echo TALLY_THEME_NAME; ?> PRO</a>
        <?php endif; ?>
        <?php if(TALLY_THEME_DOC_URL != ''): ?>
            <a href="<?php echo TALLY_THEME_DOC_URL; ?>" target="_blank" class="button button-primary button-large">Documentation</a>
        <?php endif; ?>
        <?php if(TALLY_THEME_SUPPORT_URL != ''): ?>
            <a href="<?php echo TALLY_THEME_SUPPORT_URL; ?>" target="_blank" class="button button-primary button-large">Support</a>
        <?php endif; ?>
        <?php if(TALLY_THEME_MORE_URL != ''): ?>
            <a href="<?php echo TALLY_THEME_MORE_URL; ?>" target="_blank" class="button button-primary button-large">More Themes</a>
        <?php endif; ?>
        <?php if(TALLY_THEME_DEMO_URL != ''): ?>
            <a href="<?php echo TALLY_THEME_DEMO_URL; ?>" target="_blank" class="button button-primary button-large">Demo</a>
        <?php endif; ?>
    </div>    
    <?php
	}
}
add_action( 'admin_notices', 'tally_setup_admin_help_notice' );