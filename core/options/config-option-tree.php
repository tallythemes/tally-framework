<?php
/**
 * Initialize the options before anything else.
 */
add_action( 'admin_init', 'tally_ot_theme_options', 1 );

/**
 * Build the custom settings & update OptionTree.
 */
function tally_ot_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array(),
    'settings' => array()
  );
  
  //print_r($custom_settings ['settings']);
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
  //print_r($custom_settings);
  
}