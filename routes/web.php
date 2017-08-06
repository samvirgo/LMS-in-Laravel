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
Route::get('searchresult', 'BookController@searchBook')->name('searchresult');




Route::resource('monograph','MonographController');
Route::get('searchresult', 'MonographController@searchMonograph')->name('searchresult');








Route::get('/searchbook', function () {
    return view('searchbook');
});



Route::get('book/book', function () {
    return view('book.book');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('student/create', function () {
    return view('student.create');
});
Route::get('student/student', function () {
    return view('student.student');
});
Route::get('/searchmonograph', function () {
    return view('searchmono');
});

Route::get('monograph/monograph', function () {
    return view('monograph.monograph');
});
Route::get('/issuebook', function () {
    return view('issue.issue');
});
Route::get('/issue/history', function () {
    return view('issue.issuehistory');
});
Route::get('/returnbook', function () {
    return view('issue.return');
});
Route::get('/issue', function () {
    return view('admin2.issue');
});
Route::get('/return', function () {
    return view('admin2.return');
});
Route::get('/issuebook/history', function () {
    return view('admin2.issuehistory');
});




Route::get('/admin/dashboard', function(){
    return view('admin');
})->name('admin');

Route::get('/student', function(){
    return view('home');
})->name('home')->middleware('Authenticated');
Route::get('/dashboard', function(){
    return view('admin2');
})->name('admin2')->middleware('Authenticated');
