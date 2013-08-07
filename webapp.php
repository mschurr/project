<?php
Route::get('/', function($req, $res){
	$res->write("You have arrived!");
});