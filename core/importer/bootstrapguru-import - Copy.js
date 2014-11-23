(function($) {
	"use strict";
	$('.tally_bootstrapguru_import').click(function(){
		var $import_true = confirm('are you sure to import dummy content ? it will overwrite the existing data');
        if($import_true == false) return;

		$('.tally_import_message').html(' Data is being imported please be patient, while the awesomeness is being created :)  <i class="fa fa-spinner fa-3x fa-spin">');
        var data = {
			'action': 'tally_demo_import'       
        };

       // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
        $.post(ajaxurl, data, function(response) {
            $('.tally_import_message').html('<div class="import_message_success">'+ response +'</div>');
        });
    });
})(jQuery);