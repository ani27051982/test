<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::group(['middleware' => ['role:admin|superadmin,delete,edit,add']], function () {
//
//        Route::get('/', function () {
//            return view('welcome');
//        });
//});

Route::get('/', 'Auth\LoginController@showLoginForm')->name('/');

Auth::routes();

Route::get('/testmail', ['as'=>'/testmail',	'uses'=>'Test\TestController@testmail']);

Route::post('doLogin', 'Auth\LoginController@doLogin')->name('doLogin');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset.confirm');

Route::group(['middleware' => ['auth:users']], function () {
   
    Route::group(['namespace' => 'Common'], function() { 
        Route::get('home',['as' => 'home', 'uses' => 'DashboardController@showDashboard']);
        Route::get('role',['as' => 'role', 'middleware' => 'role:owner', 'uses' => 'DashboardController@showDashboard']);
    });
    
});