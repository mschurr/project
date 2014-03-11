<?php
/**
 * Application Routes
 */
Route::get('/', function(Request $request, Response $response){
	return View::make('home');
});

/**
 * Application Routes (requiring authentication)
 */
$filter = function(Request $request){
	if($request->session->auth->loggedIn)
		return true;
	return Redirect::to('AuthController@login');
};

Route::filter($filter, function(){
	Route::get('/account', function(Request $request, Response $response){
		$response->write(sprintf("You are logged in as user %d.", $request->session->auth->user->id));
	});
});

/**
 * Authentication Service Routes
 */
Route::get('/login', 'AuthController@login');
Route::post('/login', 'AuthController@loginAction');
Route::get('/logout', 'AuthController@logout');
