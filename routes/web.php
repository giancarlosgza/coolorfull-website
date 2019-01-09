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

/*CATALOG*/
Route::get('/', 'GradientController@indexGradients');
Route::get('gradients/catalog', 'GradientController@catalogGradients');
Route::get('gradients/{gradient}', 'GradientController@showGradients');

/*ADMIN*/
Route::post('gradients/new', 'GradientController@newGradients')->middleware('auth');

/*CREATE AND SHOW*/
Route::get('/gradients/admin/create', function () {
    return view('pages.gradients.admin.create');
})->middleware('auth');

Route::get('/gradients/admin/show', function () {
    return view('pages.gradients.admin.show');
});

Route::get('/gradients/admin/edit/{gradients}', 'GradientController@showEdit')->middleware('auth');
Route::post('gradients/edit', 'GradientController@editGradients')->middleware('auth');

Route::get('admin/delete/{gradients}', 'GradientController@showDelete')->middleware('auth');
Route::post('gradients/delete', 'GradientController@deleteGradients');

/*PANEL*/
Route::get('/gradients/admin/panel', 'GradientController@userGradients')->middleware('auth');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
