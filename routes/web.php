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
Route::get('pages','PageController@show');
Route::post('pagesadd','PageController@add');
Route::get('pages/{page}/delete','PageController@delete');
Route::get('pages/{page}','PageController@onePage');
Route::post('pages/{page}/notesadd','NoteController@add_note');

