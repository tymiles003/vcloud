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
})->name('wel');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login/custom', [
    "uses" => 'LoginController@login',
    'as' => 'login.custom'
]);



Route::get('/staff', [
    "uses" => 'LoggedController@staff',
    'as' => 'Logged.staff',
    'middleware' => 'auth'
]);
Route::get('/lab_as', [
    "uses" => 'LoggedController@lab_as',
    'as' => 'Logged.lab_as',
    'middleware' => 'auth'
]);
Route::get('/dept_off', [
    "uses" => 'LoggedController@dept_off',
    'as' => 'Logged.dept_off',
    'middleware' => 'auth'
]);
Route::get('/hod', [
    "uses" => 'LoggedController@hod',
    'as' => 'Logged.hod',
    'middleware' => 'auth'
]);
Route::get('/princi', [
    "uses" => 'LoggedController@princi',
    'as' => 'Logged.princi',
    'middleware' => 'auth'
    
]);
Route::get('/store_manager', [
    "uses" => 'LoggedController@store_manager',
    'as' => 'Logged.store_manager',
    'middleware' => 'auth'
]);
Route::get('/admin', [
    "uses" => 'AdminController@index',
    'as' => 'Logged.admin',
]);