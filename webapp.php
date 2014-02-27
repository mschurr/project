<?php

class MyController extends Controller
{
	public function get()
	{
		$this->document->setTitle('You have arrived!');
		$this->response->write('You have arrived!');
	}
	
	public function post()
	{
		$this->response->headers['Content-Type'] = 'text/plain';
		$this->response->write( $this->response );
	}
}

Route::any('/', 'MyController');

Route::error(404, function(Request $request, Response $response){
	return View::make('errors.404');
});

Route::error(500, function(Request $request, Response $response){
	return View::make('errors.500');
});