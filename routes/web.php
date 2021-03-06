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

/*Route::get('/', function () {
    return view('welcome');
});*/
// list all tasks
Route::get('/',function(){
	return view('home');
});
Route::get('/tasks', 'TaskController@index');

//creating a new task
Route::post('/tasks','TaskController@store');

//deleting a task
Route::delete('/tasks/{task}', 'TaskController@destroy');

//updating a task
Route::get('/tasks/{id}', 'TaskController@show');
