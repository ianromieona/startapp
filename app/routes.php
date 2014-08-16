<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@home');
Route::get('/login',array('as'=>'login','uses'=> 'HomeController@login'));
Route::get('/logout',array('as'=>'logout','uses'=> 'HomeController@logout'));
Route::post('/login',function(){
	$credentials  =  Input::only('username','password');
	$rules = array('username'=>'required','password'=>'required');
	$validator = Validator::make($credentials,$rules);
	if(!$validator->fails()){
		if(Auth::attempt($credentials)){
			return Redirect::to('/');
		}
	}
	return Redirect::to('/login')->withErrors($validator);;

});
Route::post('/register',function(){
	$rules = array('username'=>'required','password'=>'required');
	$validator = Validator::make(Input::only('username','password'),$rules);
	if(!$validator->fails()){
		$credentials = Input::except('_token');
		$credentials['password'] = Hash::make(Input::get('password'));
		if(User::add($credentials)){
			$loginCredentials = Input::only('username','password');
			if(Auth::attempt($loginCredentials)){
				return Redirect::to('/');
			}
		}
	}
	return Redirect::to('login')->withErrors($validator);
});

Route::get('users', 'UserController@getIndex');