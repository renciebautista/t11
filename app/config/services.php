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
		'domain' => '',
		'secret' => '',
	),

	'mandrill' => array(
		'secret' => '',
	),

	'stripe' => array(
		'model'  => 'User',
		'secret' => '',
	),

	'twilio' => array(
		'default' => 'twilio',
		'connections' => array(
			'twilio' => array(
			/*
			|--------------------------------------------------------------------------
			| SID
			|--------------------------------------------------------------------------
			|
			| Your Twilio Account SID #
			|
			*/
			'sid' => 'AC9f6e210ba74153b8338e2eeab15d3f07',
			/*
			|--------------------------------------------------------------------------
			| Access Token
			|--------------------------------------------------------------------------
			|
			| Access token that can be found in your Twilio dashboard
			|
			*/
			'token' => '5e8c6af862408dc416f0eb69dd37c98b',
			/*
			|--------------------------------------------------------------------------
			| From Number
			|--------------------------------------------------------------------------
			|
			| The Phone number registered with Twilio that your SMS & Calls will come from
			|
			*/
			'from' => '+12013748242',
			/*
			|--------------------------------------------------------------------------
			| Verify Twilio's SSL Certificates
			|--------------------------------------------------------------------------
			|
			| Allows the client to bypass verifiying Twilio's SSL certificates.
			| It is STRONGLY advised to leave this set to true for production environments.
			|
			*/
			// 'ssl_verify' => true,
			),
		),
	),

);
