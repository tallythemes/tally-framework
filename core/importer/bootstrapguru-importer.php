<?php
add_action( 'wp_ajax_tally_demo_import', 'tally_demo_import' );
function tally_demo_import(){

 	/*
		1. XML importer
	------------------------------------------------------------------*/
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
			$wp_import->fetch_attachments = true;
			
			set_time_limit(0);
			$wp_import->import($import_filepath);
	
			$wp_import->check();
		}else{
			echo 'sample-data.xml file is not here.';	
		}

    }else{
		echo 'Please install "wordpress-importer" plugin';	
	}
	
	
	/*
		2. Widget importer
	------------------------------------------------------------------*/
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
		}else{
			echo 'sample-widgets.wie file is not here.';	
		}
	}
   
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
        <a href="#" class="tally_bootstrapguru_import button button-primary">Import Sample Data</a>
    </div>
    <?php
}