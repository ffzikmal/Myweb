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

Route::get('/', 'PageController@welcome');
Route::get('/profile', 'PageController@profile');
Route::get('/edu', 'PageController@edu');
Route::get('/qual', 'PageController@qual');
Route::get('/interest', 'PageController@interest');
Route::get('/activity', 'PageController@activity');
Route::get('/work', 'PageController@work');

Route::get('/adminpro', 'HomeController@adminpro')->name('adminpro');
Route::get('/addpro', 'HomeController@addpro')->name('pro.add');
Route::post('/proadd', 'HomeController@proadd')->name('p.add');
Route::get('/editpro/{profile}', 'HomeController@editpro')->name('pro.edit');
Route::patch('/editpro/{profile}', 'HomeController@proedit')->name('p.edit');
Route::delete('/deletepro/{profile}', 'HomeController@prodelete')->name('p.delete');

Route::get('/adminedu', 'HomeController@adminedu')->name('adminedu');
Route::get('/formedu', 'HomeController@formedu')->name('form.edu');
Route::post('/eduadd', 'HomeController@eduadd')->name('e.add');
Route::get('/editedu/{education}', 'HomeController@editedu')->name('edit.edu');
Route::patch('/eduedit/{education}', 'HomeController@eduedit')->name('e.edit');
Route::delete('/deleteedu/{education}', 'HomeController@edudelete')->name('edu.delete');

Route::get('/adminqual', 'HomeController@adminqual')->name('adminqual');
Route::get('/formqual', 'HomeController@formqual')->name('formqual');
Route::post('/qualadd', 'HomeController@qualadd')->name('q.add');
Route::get('/qualedit/{qualification}', 'HomeController@qualedit')->name('q.edit');
Route::patch('/editqual/{qualification}', 'HomeController@editqual')->name('edit.qual');
Route::delete('/deletequal/{qualification}', 'HomeController@deletequal')->name('q.delete');

Route::get('/adminint', 'HomeController@adminint')->name('adminint');
Route::get('/formint', 'HomeController@formint')->name('formint');
Route::post('/intadd', 'HomeController@intadd')->name('i.add');
Route::get('/intedit/{interest}', 'HomeController@intedit')->name('i.edit');
Route::patch('/editint/{interest}', 'HomeController@editint')->name('edit.int');
Route::delete('/deleteint/{interest}', 'HomeController@deleteint')->name('i.delete');

Route::get('/adminact', 'HomeController@adminact')->name('adminact');
Route::get('/formact', 'HomeController@formact')->name('formact');
Route::post('/actadd', 'HomeController@actadd')->name('a.add');
Route::get('/actedit/{activity}', 'HomeController@actedit')->name('actedit');
Route::patch('/editact/{activity}', 'HomeController@editact')->name('edit.act');
Route::delete('/deleteact/{activity}', 'HomeController@deleteact')->name('a.delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
