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
	 * Authentication Service Driver
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
	 * Session Service Driver
	 */
	'session.driver' => 'cache',

	/**
	 * Configuration Driver
	 *  If you want to enable dynamically setting configuration values at runtime.
	 */
	'config.driver' => null,

	/**
	 * Cache Service Driver
	 */
	'cache.driver' => 'filesystem',

	/**
	 * HTTP Configuration Options
	 */

	// You should use this to indicate whether or not your application servers are behind a load balancer.
	// If you set this to true, X-Forwarded-For and X-Forwarded-Proto will be used when processing requests.
	'http.loadbalanced' => false,

	/**
	 * Mail Service Configuration
	 */
	'mailer.name' => '',
	'mailer.email' => '',
	'mailer.host' => '',
	'mailer.port' => '',
	'mailer.user' => '',
	'mailer.pass' => '',
	'mailer.crypt' => 'ssl',

	/**
	 * Development Mode
	 * 
	 * If development mode is enabled, you will be shown rich error messages. If development mode is not, you will be 
	 *  shown production errors which reveal nothing (although the errors will still be logged).
	 */
	'app.development'	=> true,

	/**
	 * A long, private key that will be used to sign and verify cookies.
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