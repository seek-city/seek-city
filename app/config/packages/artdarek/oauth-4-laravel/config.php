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
        'Google' => array(
            'client_id'     => $_ENV['GOOGLE_CLIENT_ID'],
            'client_secret' => $_ENV['GOOGLE_CLIENT_SECRET'],
            'scope'         => array('userinfo_email', 'userinfo_profile'),
),  
	)

);
