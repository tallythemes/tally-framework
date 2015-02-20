<?php

class mshkit_block_banner{
	public $contents;
	public $view;
	public $settings;
	
	
	function __construct($args = array('view' => '', 'settings' => array(), 'contents' => array())) {
		$this->view = $args['view'];
		$this->settings= $args['settings'];
		$this->contents = $args['contents'];
		
		$this->view();
	}
	
	
	function settings(){
		$the_settings = '';
		
		if($this->view == 'accordion'){ $the_settings = mshkit_view_accordion_settings($this->settings); }
		elseif($this->view == 'css_grid'){ $the_settings = mshkit_view_css_grid_settings($this->settings); }
		elseif($this->view == 'flexslider'){ $the_settings = mshkit_view_flexslider_settings($this->settings); }
		elseif($this->view == 'isotope'){ $the_settings = mshkit_view_isotope_settings($this->settings); }
		elseif($this->view == 'masonry'){ $the_settings = mshkit_view_masonry_settings($this->settings); }
		elseif($this->view == 'owlcarousel'){ $the_settings = mshkit_view_owlcarousel_settings($this->settings); }
		elseif($this->view == 'tab'){ $the_settings = mshkit_view_tab_settings($this->settings); }
		elseif($this->view == 'toggle'){ $the_settings = mshkit_view_toggle_settings($this->settings); }
		
		return $the_settings;
	}
	

	function html($content){		
		if( $this->view == 'none' ){ $content = $this->contents; }
		
		
		
	}
	
	
	function view(){
		if($this->view == 'accordion'){ $this->view_accordion(); }
		elseif($this->view == 'css_grid'){ $this->view_css_grid(); }
		elseif($this->view == 'flexslider'){ $this->view_flexslider(); }
		elseif($this->view == 'isotope'){ $this->view_isotope(); }
		elseif($this->view == 'masonry'){ $this->view_masonry(); }
		elseif($this->view == 'owlcarousel'){ $this->view_owlcarousel(); }
		elseif($this->view == 'tab'){ $this->view_tab(); }
		elseif($this->view == 'toggle'){ $this->view_toggle(); }
		else{ $this->html(); }
	}
	
	
	
	function view_accordion(){
		
	}
	
	
	
	function view_css_grid(){
		
	}
	
	
	
	function view_flexslider(){
		
	}
	
	
	
	function view_isotope(){
		
	}
	
	
	
	
	function view_masonry(){
		
	}
	
	
	
	
	function view_owlcarousel(){
		
	}
	
	
	
	function view_tab(){
		
	}
	
	
	
	function view_toggle(){
		
	}
	
}