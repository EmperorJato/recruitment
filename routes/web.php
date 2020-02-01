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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/application-form', 'Applicant\ApplicantController@index')->name('applicant.form');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/register/store', 'Auth\RegisterController@store')->name('register.user');

Route::group(['middleware' => ['auth', 'hr']], function(){
    Route::get('{path}', 'Hr\HrController@index')->where( 'path' , '([A-z\d\-\/_.]+)?' );
});