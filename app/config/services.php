<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => array(
		'domain' => $_ENV['MAIL_HOST'],
		'secret' => $_ENV['MAIL_SECRET'],
	),

	'mandrill' => array(
		'secret' => '',
	),

	'stripe' => array(
		'model'  => 'User',
		'secret' => '',
	),
	
	'facebook' => [
	'client_id' => getenv('FACEBOOK_APP_ID'),
	'client_secret'=> getenv('FACEBOOK_APP_SECRET'),
	'redirect' => 'http://seekcity.dev/login'
	],
	
	'disqus' => array(
	'secret key' => $_ENV['DISQUS_SECRET']
	)
	

);
