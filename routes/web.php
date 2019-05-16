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




Route::post('/home/add','Tasks@add');

Route::get('/complete/{id}','Tasks@complete');
Auth::routes();

Route::get('/home',function () {
    $tasks = App\Task::where('user', Auth::id())->get();
    return view('home',['tasks' => $tasks]);
})->middleware('auth');
