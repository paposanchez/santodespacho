<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/departament', 'FireDepartamentController@index')->name('firedepa');
Route::get('/admin/departament/create', 'FireDepartamentController@create')->name('firedepacreate');
Route::get('/admin/departament/{id}', 'FireDepartamentController@view')->name('firedepaview');
Route::post('/admin/departament/store', 'FireDepartamentController@store')->name('firedepastore');
Route::get('/admin/station', 'StationController@index')->name('station');
Route::get('/admin/station/create', 'StationController@create')->name('stationcreate');
Route::get('/admin/station/{id}', 'StationController@view')->name('stationview');
Route::get('/admin/station/{id}/update', 'StationController@edit')->name('stationupdate');
Route::post('/admin/station/store', 'StationController@store')->name('stationstore');
Route::resource('/admin/code', 'EmergencyCodeController');
Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');
