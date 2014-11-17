<?php
add_action( 'wp_ajax_tally_demo_import', 'tally_demo_import' );
function tally_demo_import() 
{
    global $wpdb;
	deactivate_plugins( 'wordpress-importer/wordpress-importer.php' );

    if ( !defined('WP_LOAD_IMPORTERS') ) define('WP_LOAD_IMPORTERS', true);
	
	remove_action( 'admin_init', 'wordpress_importer_init' );

    // Load Importer API
    require_once ABSPATH . 'wp-admin/includes/import.php';

    if ( ! class_exists( 'WP_Importer' ) ) {
        $class_wp_importer = ABSPATH . 'wp-admin/includes/class-wp-importer.php';
        if ( file_exists( $class_wp_importer ) )
        {
            require $class_wp_importer;
        }
    }

    if ( ! class_exists( 'WP_Import' ) ) {
        $class_wp_importer = ABSPATH ."wp-content/plugins/wordpress-importer/wordpress-importer.php";
        if ( file_exists( $class_wp_importer ) ){
            require $class_wp_importer;
		}
    }


    if ( class_exists( 'WP_Import' ) ){ 
        
		if(file_exists(TALLY_CHILD_DRI ."/demo/sample-data.xml")){
			$import_filepath = TALLY_CHILD_DRI ."/demo/sample-data.xml";
		}else{
			$import_filepath = TALLY_DRI ."/demo/sample-data.xml";
		}
		
		if(file_exists($import_filepath)){
			include_once('bootstrapguru-import.php');
	
			$wp_import = new bootstrapguru_import();
			$wp_import->fetch_attachments = false;
			$wp_import->import($import_filepath);
	
			$wp_import->check();
		}else{
			echo 'sample-data.xml file is not here.';	
		}

    }else{
		echo 'Please install "wordpress-importer" plugin';	
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