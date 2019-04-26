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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
   return view('pages.home');
});

Route::resource('/project', 'ProjectController');

//Route::resource('/project/task', 'TaskController');

Route::post('/projects/{project}/tasks', 'TaskController@store');

Auth::routes();

//CHANGE TO DASHBOARD INSTEAD OF HOME
Route::get('/home', 'HomeController@index')->name('home');
