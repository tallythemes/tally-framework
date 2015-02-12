<?php
$tally_subheader_layout = tally_option('adv_subheader_layout', 'default');
$tally_subheader_path = tally_get_file_dri('structure/subheader/subheader-'.$tally_subheader_layout.'.php');
if(file_exists($tally_subheader_path)){
	include($tally_subheader_path);
}else{
	include(tally_get_file_dri('structure/subheader/subheader-default.php'));
}