<?php defined('IN_APP') or die('Get out of here');

/**
 *	Scaffold v0.1
 *	by the Codin' Co.
 *
 *	Coming soon.
 */
 
//  Set our session configuration
$config['session'] = array(
	// You want cookies?
	'cookies' => true,
	
	// Expires in a month
	'expires' => 60 * 60 * 24 * 30,
	
	// Want it secure brah?
	'encoded' => false,
	
	//  The session that user information gets stored in
	'user' => 'dime_user'
);