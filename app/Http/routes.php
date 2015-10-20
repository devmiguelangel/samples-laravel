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

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', [
    'as' => 'contact',
    'uses' => 'ContactController@index'
]);

Route::get('contact/delete/{id}', [
    'as' => 'contact/delete',
    'uses' => 'ContactController@destroy'
]);

Route::get('contact/restore/{id}', [
    'as' => 'contact/restore',
    'uses' => 'ContactController@restore'
]);
