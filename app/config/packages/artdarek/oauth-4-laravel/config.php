<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '1505198499717997',
            'client_secret' => 'bb00158f4dda662fba733805e3bec5d1',
            'scope'         => array('email','read_friendlists','user_online_presence'),
        ),		

	)

);