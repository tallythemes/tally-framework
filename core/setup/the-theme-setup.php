<?php
function tally_setup_admin_notice(){
	$theme = wp_get_theme();
	$title = 'You have success fully  installed "<strong>'.$theme->get( 'Name' ).'</strong>" theme.';
	$text = 'Do you want to make your site like our demo site? If yes, please click the button below.';
	$button = '<a href="'.admin_url( 'themes.php?page=tallykit_importer-demo-importer').'" class="button button-hero" >Make the Site like the Demo</a>';
	
	if(apply_filters('tally_impoter_notice_display', false) == false) return;
	
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
	.tally_setup_notic h3{ font-weight:normal; }
	.tally_setup_notic .button.button-hero{
		font-weight:bold; 
		background:#523f6d; 
		color:#fff; 
		border-color:#392752; 
		-webkit-box-shadow: inset 0 1px 0 #755B98,0 1px 0 rgba(0,0,0,.08);
    	box-shadow: inset 0 1px 0 #755B98,0 1px 0 rgba(0,0,0,.08);
	}
	.tally_setup_notic .button.button-hero:hover{
		background:#dd823b;
		border-color:#BD6B2B; 
		-webkit-box-shadow: inset 0 1px 0 #F5A261,0 1px 0 rgba(0,0,0,.08);
    	box-shadow: inset 0 1px 0 #F5A261,0 1px 0 rgba(0,0,0,.08);
	}
	.tally_setup_notic .tally-dismiss{ color:#FFF; line-height: 43px; margin-left: 15px; }
	.tally_setup_notic .tally-dismiss:hover{ color:#dd823b; }
	</style>
    <div class="tally_setup_notic">
        
        <?php 
		if(!in_array( 'tallykit/tallykit.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) || !in_array( 'option-tree/ot-loader.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )){
			$button = '<a href="'.admin_url( 'themes.php?page=tgmpa-install-plugins').'" class="button button-hero" >Make the Site like the Demo</a>';
		}
		if(isset($_GET['page']) && ($_GET['page'] == 'tgmpa-install-plugins') ){
			$title = 'One More Step.';
			$text = 'Before we import sample data we need to install & active <strong>TallyKit</strong> and <strong>Option Tree</strong> plugins. Also you will see the list of recommended plugins below. You should install all plugins to make the theme fully functional.';
			$button = '';
		}
		if(in_array( 'tallykit/tallykit.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && in_array( 'option-tree/ot-loader.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )){
			$title = 'Plugins are installed now Import Sample Data';
			$text = 'Now it is time to make the site look like the orginal demo of the theme please click on the button below and it will take you to the impoter page.';
			$button = '<a href="'.admin_url( 'themes.php?page=tallykit_importer-demo-importer').'" class="button button-hero" >Make the Site like the Demo</a>';
		}
		?>
        <script language="javascript" type="text/javascript">
			function submitDetailsForm() {
			   $("#tgmpa-plugins").submit();
			}
		</script>
        <h2><?php echo $title; ?></h2>
		<h3><?php echo $text; ?></h3>
        <?php echo $button; ?>
        <a class="tally-dismiss" href="<?php echo add_query_arg( 'tallykit_importer_dismiss_notice', 'yes' ); ?>">Dismiss This notice</a>
    </div>    
    <?php
}
add_action( 'admin_notices', 'tally_setup_admin_notice' );