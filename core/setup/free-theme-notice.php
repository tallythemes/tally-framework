<?php
function tally_setup_admin_free_notice(){
	if(apply_filters('tally_free_notice_display', true) == false) return;
    ?>
    <style type="text/css">
	.tally_setup_free_notic{
		background:#640AFF; 
		color:#FFF; 
		padding:10px 30px; 
		border-radius: 5px; 
		border: 3px solid #0202AD;
		margin: 40px 20px 0 2px;
	}
	.tally_setup_free_notic p{ font-size:18px; }
	.tally_setup_free_notic a{
		color:#F9FF00;
		font-weight:bold;
		font-size:20px;
	}
	</style>
    <div class="tally_setup_free_notic">
    	<p>A Theme is an effort of many sleepless nights of the Developers. If you like this FREEE Theme You can consider for a 5 star rating and honest review. Your review will inspire us.</p>
        <p>Need More Features and Options including <strong>Advance layout</strong>, <strong>Color</strong>, <strong>Google Font</strong>, <strong>Typography</strong>, <strong>Custom CSS</strong> and 100+ Advanced Features and Controls? Try <a href="<?php echo TALLY_THEME_STORE_URL; ?>" target="_blank"><?php echo TALLY_THEME_NAME; ?> PRO</a></p>
        <p><a href="<?php echo TALLY_THEME_STORE_URL; ?>" target="_blank" class="button button-primary button-large">Visit <?php echo TALLY_THEME_NAME; ?> PRO</a></p>
    </div>    
    <?php
}
add_action( 'admin_notices', 'tally_setup_admin_free_notice' );