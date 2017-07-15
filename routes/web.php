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
 Route::get('/',function(){
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/create',function(){
// 	return view('Student.create');
// })->name('create');

//  Route::get('/index',function(){
// 	return view('Student.index');
// })->name('index');

Route::resource('student','StudentController');
Route::get('search', 'StudentController@searchStudent')->name('search');

//  Route::get('/createb',function(){
// 	return view('book.createb');
// })->name('createb');

//  Route::get('/indexb',function(){
// 	return view('book.indexb');
// })->name('indexb');


Route::resource('book','BookController');
Route::get('searchbook', 'BookController@searchBook')->name('searchbook');



