<?php
/**
 * Configuration Values
 */
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
	 * Authentication Information
	 */
	'auth.driver' => 'db',

	/**
	 * User Service Driver
	 */
	'users.driver' => 'db',

	/**
	 * Group Service Driver
	 */
	'groups.driver' => 'db',

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


/**
 * Error Pages
 */
Route::error(404, function(Request $request, Response $response){
	return View::make('errors.404');
});

Route::error(500, function(Request $request, Response $response){
	return View::make('errors.500');
});