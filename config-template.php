<?php

Config::set(array(
	/**
	 * Database Driver Information
	 */
	'database.driver' => 'mysql',
	'database.user' => 'httpd',
	'database.pass' => '',
	'database.host' => 'localhost',
	'database.port' => '3306',
	'database.name' => '',

	/**
	 * Development Mode
	 * 
	 * If development mode is enabled, you will be shown rich error messages. If development mode is not, you will be 
	 *  shown production errors which reveal nothing (although the errors will still be logged).
	 */
	'app.development'	=> true,

	/**
	 * A long, secret key that will be used to verify the integrity of cookies.
	 */
	'cookies.secretKey' => '',
));