<?php
add_action( 'wp_ajax_tally_demo_import', 'tally_demo_import' );
function tally_demo_import(){

 	/*
		1. XML importer
	------------------------------------------------------------------*/
	if($_REQUEST['target'] == 'xml_import'):
		if ( !defined('WP_LOAD_IMPORTERS') ) define('WP_LOAD_IMPORTERS', true);
	
		// Load Importer API
		require_once ('inc/wordpress-importer.php');	
	
		if ( class_exists( 'WP_Importer' ) ){ 
			
			if(file_exists(TALLY_CHILD_DRI ."/demo/sample-data.xml")){
				$import_filepath = TALLY_CHILD_DRI ."/demo/sample-data.xml";
			}else{
				$import_filepath = TALLY_DRI ."/demo/sample-data.xml";
			}
			
			if(file_exists($import_filepath)){
				include_once('bootstrapguru-import.php');
	
				$wp_import = new bootstrapguru_import();
				$wp_import->fetch_attachments = false;
				
				set_time_limit(0);
				ob_start();
				$wp_import->import($import_filepath);
				$log = ob_get_contents();
						ob_end_clean();
		
				$wp_import->check();
				echo 'Sample contents are imported.';
			}else{
				echo 'sample-data.xml file is not here.';	
			}
	
		}else{
			echo 'Please install "wordpress-importer" plugin';	
		}
	endif;
	
	
	/*
		2. Widget importer
	------------------------------------------------------------------*/
	if($_REQUEST['target'] == 'widget_import'):
		if ( !function_exists( 'tally_import_widget_data' ) ){ 
			require_once ('inc/widgets-importer.php');	
		}
		
		if(function_exists( 'tally_import_widget_data' )){
			if(file_exists(TALLY_CHILD_DRI ."/demo/sample-widgets.wie")){
				$wie_filepath = TALLY_CHILD_DRI ."/demo/sample-widgets.wie";
			}else{
				$wie_filepath = TALLY_DRI ."/demo/sample-widgets.wie";
			}
			
			if(file_exists($wie_filepath)){
				tally_process_import_widget_file( $wie_filepath );
				echo 'Sample Widgets are imported.';
			}else{
				echo 'sample-widgets.wie file is not here.';	
			}
		}
	endif;
	
	
	/*
		3. Setup Home page as front page
	------------------------------------------------------------------*/
	if($_REQUEST['target'] == 'setup_home'):
		$home_page_data = get_page_by_title( 'Home' );
		update_option( 'page_on_front', $home_page_data->ID );
		update_option( 'show_on_front', 'page' );
		echo 'Set home page as Front page.';
	endif;
	
	
	/*
		4. Setup the menu
	------------------------------------------------------------------*/
	if($_REQUEST['target'] == 'setup_menu'):
		$menu_term_id = '';
		$get_all_menu = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
		if(!empty($get_all_menu) && ! is_wp_error( $get_all_menu )){
			foreach($get_all_menu as $the_menu){
				if($the_menu->slug == 'primary'){
					$menu_term_id = $the_menu->term_id;
				}
			}
		}
		$locations = get_theme_mod('nav_menu_locations');
		$locations['main_menu'] = $menu_term_id;  //$foo is term_id of menu
		set_theme_mod('nav_menu_locations', $locations);
		echo 'Set primary menu as site menu.';
	endif;
   
   die(); // this is required to return a proper result
}



add_action('admin_enqueue_scripts', 'tally_importer_admin_script_loader');
function tally_importer_admin_script_loader(){
	wp_enqueue_script('tally-importer', TALLY_URL.'/core/importer/bootstrapguru-import.js', array('jquery'), '', true);
}


add_action('admin_menu', 'tally_importer_admin_page');
function tally_importer_admin_page() {
	add_theme_page('Sample Data', 'Sample Data', 'manage_options', 'tally-demo-importer', 'tally_importer_admin_page_html');
}
function tally_importer_admin_page_html(){
	?>
    <div class="wrap">
    	 <div class="tally_import_message" style="margin-bottom:40px;"></div>
        <div class="tally_import_message1" style="margin-bottom:20px; display:none;"><img src="<?php echo TALLY_URL; ?>./core/assets/images/admin/loader.gif" /> Importing Sample Data</div>
        <div class="tally_import_message2" style="margin-bottom:20px; display:none;"><img src="<?php echo TALLY_URL; ?>./core/assets/images/admin/loader.gif" /> Importing Widgets</div>
        <div class="tally_import_message3" style="margin-bottom:20px; display:none;"><img src="<?php echo TALLY_URL; ?>./core/assets/images/admin/loader.gif" />Setting Up Home Page</div>
        <div class="tally_import_message4" style="margin-bottom:40px; display:none;"><img src="<?php echo TALLY_URL; ?>./core/assets/images/admin/loader.gif" />Setting Up Site Menu</div>
        <a href="#" class="tally_bootstrapguru_import button button-primary">Import Sample Data</a>
    </div>
    <?php
}