<?php
add_action('wp_head', 'tally_do_reset_404');
function tally_do_reset_404(){
	if(is_404()){
		remove_action('tally_loop', 'tally_do_loop_content');
		add_action('tally_loop', 'tally_do_content_404');
	}
}
function tally_do_content_404(){
	?>
    <center>
        <font style="font-size:100px; line-height:100px;">404</font>
        <h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'tally_taxdomain' ); ?></h2>
        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'tally_taxdomain' ); ?></p>
        <?php get_search_form(); ?>
    </center>
    <?php
}