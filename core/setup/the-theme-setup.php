<?php
function tally_setup_admin_notice() {
	if ( isset( $_GET['tallykit_importer_dismiss_notice'] ) ) {
		update_user_meta( get_current_user_id(), 'tallykit_importer_dismiss_notice', 'yes' );
	}
	
	if((get_option('tallykit_importer_is_xml') == 'yes') 
		&& (get_option('tallykit_importer_is_widget') == 'yes') 
		&& (get_option('tallykit_importer_is_menu') == 'yes') 
		&& (get_option('tallykit_importer_is_home') == 'yes')) return;
	if( !current_user_can( 'install_plugins') ) return;
	if ( get_user_meta( get_current_user_id(), 'tallykit_importer_dismiss_notice', true ) == 'yes' ) return;
	if( isset($_GET['page']) && ($_GET['page'] == 'tallykit_importer-demo-importer') ) return;
	echo get_user_meta( get_current_user_id(), 'tallykit_importer_dismiss_notice', true );
	$theme = wp_get_theme();
    ?>
    <style type="text/css">
	.tally_setup_notic{
		background:#060; 
		color:#FFF; 
		padding:10px 20px; 
		border-radius: 5px; 
		border: 1px solid #043A04;
		margin: 40px 20px 0 2px;
	}
	.tally_setup_notic h2, .tally_setup_notic h3{ color:#FFF; }
	.tally_setup_notic .button.button-hero{
		font-weight:bold; 
		background:#523f6d; 
		color:#fff; 
		border-color:#392752; 
		-webkit-box-shadow: inset 0 1px 0 #755B98,0 1px 0 rgba(0,0,0,.08);
    	box-shadow: inset 0 1px 0 #755B98,0 1px 0 rgba(0,0,0,.08);
	}
	</style>
    <div class="tally_setup_notic">
		<h2>You have success fully  installed "<strong><?php echo $theme->get( 'Name' ); ?></strong>" theme.</h2>
		<h3>Do you want to make your site like our demo site? If yes, please click the button below.</h3>
		<a href="<?php echo admin_url( 'themes.php?page=tallykit_importer-demo-importer'); ?>" class="button button-hero" >Make the Site like the Demo</a>
        <a href="<?php echo add_query_arg( 'tallykit_importer_dismiss_notice', 'yes' ); ?>">Dismiss This notice</a>
    </div>
    <?php
}
add_action( 'admin_notices', 'tally_setup_admin_notice' );