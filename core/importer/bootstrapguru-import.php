<?php
class bootstrapguru_import extends tally_WP_Import
{
    function check()
    {
    //you can add any extra custom functions after the importing of demo coment is done
    }
	
	function mp_request_timeout(){
		return 120;	
	}
}