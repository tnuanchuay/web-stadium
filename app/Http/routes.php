<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', ['middleware'=>'auth', function(){
	$user = Auth::user();
	if($user->superuser == 0){
    	return redirect()->to('booking');
	}else{
		return redirect()->to('superuser/user');
	}
}]);

Route::get('/superuser/user', ['middleware'=>'auth', 'uses'=>'SuperUserController@ViewUser']);
Route::get('/superuser/user/update/{id}', ['middleware'=>'auth', 'uses'=>'SuperUserController@UpdateUserView']);


Route::get('/booking', ['middleware'=>'auth', 'uses'=>'BookingController@View']);
Route::get('/booking/allow/{id}', ['middleware'=>'auth', 'uses'=>'BookingController@Allow']);
Route::get('/booking/notallow/{id}', ['middleware'=>'auth', 'uses'=>'BookingController@NotAllow']);

Route::get('/stadium', ['middleware'=>'auth', 'uses'=>'StadiumController@View']);
Route::post('/stadium/change', ['middleware'=>'auth', 'uses'=>'StadiumController@Change']);

Route::get('/field', ['middleware'=>'auth', 'uses'=>'FieldController@View']);
Route::get('/field/{id}', ['middleware'=>'auth', 'uses'=>'FieldController@Detail']);
Route::get('/field/{id}/delete', ['middleware'=>'auth', 'uses'=>'FieldController@Delete']);
Route::post('/field/change', ['middleware'=>'auth', 'uses'=>'FieldController@Change']);
Route::get('/field/new/{id}', ['middleware'=>'auth', 'uses'=>'FieldController@Form']);
Route::post('/field/new', ['middleware'=>'auth', 'uses'=>'FieldController@Create']);

Route::auth();

Route::get('/home', 'HomeController@index');