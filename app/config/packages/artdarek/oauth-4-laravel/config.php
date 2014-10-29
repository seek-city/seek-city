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
            'client_id'     => '1570407479849865',
            'client_secret' => 'd945aa7e0454c1e4e7c54b57d8405841',
            'scope'         => array('email','read_friendlists','user_online_presence'),
        ),		

	)

);
