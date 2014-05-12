<?php
/*
 	Footer Widget Open Div
--------------------------------------------*/
if('digita_do_footer_widget_open_warp'):
	function digita_do_footer_widget_open_warp(){
		if(digita_footer_widget_layout_option() == 'none') return;
		
		echo '<div id="fwidget">';
			echo '<div id="fwidget-inner">';
	}
	add_action('digita_before_footer', 'digita_do_footer_widget_open_warp', 5);
endif;



/*
 	Footer Widget Closing Div
--------------------------------------------*/
if('digita_do_footer_widget_closing_warp'):
	function digita_do_footer_widget_closing_warp(){
		if(digita_footer_widget_layout_option() == 'none') return;
		
				echo '<div class="clear"></div>';
			echo '</div>';
		echo '</div>';
	}
	add_action('digita_before_footer', 'digita_do_footer_widget_closing_warp', 15);
endif;




/*
 	Footer Widget content
--------------------------------------------*/
if('digita_do_footer_widget_content'):
	function digita_do_footer_widget_content(){
		
		if(digita_footer_widget_layout_option() == 'none') return;
		
		echo '<div class="col-holder nomargin">';
			$footer_widget_layout = digita_footer_widget_layout_option();
			$widget_column = '12';
						
			if( $footer_widget_layout == '4' ){ $widget_column = '3'; }
			elseif( $footer_widget_layout == '3' ){ $widget_column = '4'; }
			elseif( $footer_widget_layout == '2' ){ $widget_column = '6'; }
			elseif( $footer_widget_layout == '1' ){ $widget_column = '12'; }
				
			echo '<div class="col col_'.$widget_column.'">'; dynamic_sidebar('footer_widget_1'); echo '</div>';
			
			if(($footer_widget_layout == '2') || ($footer_widget_layout == '3') || ($footer_widget_layout == '4')):
				echo '<div class="col col_'.$widget_column.'">'; dynamic_sidebar('footer_widget_2'); echo '</div>';
			endif;
			if(($footer_widget_layout == '3') || ($footer_widget_layout == '4')):
				echo '<div class="col col_'.$widget_column.'">'; dynamic_sidebar('footer_widget_3'); echo '</div>';
			endif;
			if($footer_widget_layout == '4'):
				echo '<div class="col col_'.$widget_column.'">'; dynamic_sidebar('footer_widget_4'); echo '</div>';
			endif;
		echo '</div>';
	}
	add_action('digita_before_footer', 'digita_do_footer_widget_content', 10);
endif;