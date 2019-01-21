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
//GRADIENTS ROUTES
/*CATALOG*/
Route::get('/', 'GradientController@indexGradients');

Route::get('gradients/catalog', 'GradientController@catalogGradients');
Route::get('gradients/{gradient}', 'GradientController@showGradients');
/*ADMIN*/
//CREATE
Route::get('/gradients/admin/create', function () {
    return view('pages.gradients.admin.create');
})->middleware('auth');
Route::post('gradients/new', 'GradientController@newGradients')->middleware('auth');
//SHOW
Route::get('/gradients/admin/show', function () {
    return view('pages.gradients.admin.show');
});
//EDIT
Route::get('/gradients/admin/edit/{gradient}', 'GradientController@showEdit')->middleware('auth');
Route::post('gradients/edit', 'GradientController@editGradients')->middleware('auth');
//DELETE
Route::get('admin/delete/{gradients}', 'GradientController@showDelete')->middleware('auth');
Route::post('gradients/delete', 'GradientController@deleteGradients');
/*PANEL*/
Route::get('/gradients/admin/panel', 'GradientController@userGradients')->middleware('auth');

//------------------------------------------------------------------------------------------------

//PALETTE ROUTES

Route::get('palettes/catalog', 'PaletteController@catalogPalettes');
Route::get('palettes/{palette}', 'PaletteController@showPalettes');
/*ADMIN*/
//CREATE
Route::get('/palettes/admin/create', function () {
    return view('pages.palette.admin.create');
})->middleware('auth');

Route::post('palettes/new', 'PaletteController@newPalettes')->middleware('auth');
//SHOW
Route::get('/palettes/admin/show', function () {
    return view('pages.palette.admin.show');
});
//EDIT
Route::get('/palettes/admin/edit/{palette}', 'PaletteController@showEdit')->middleware('auth');
Route::post('palettes/edit', 'PaletteController@editPalettes')->middleware('auth');
//DELETE
Route::get('admin/delete/{palettes}', 'PaletteController@showDelete')->middleware('auth');
Route::post('palettes/delete', 'PaletteController@deletePalettes');
/*PANEL*/
Route::get('/palettes/admin/panel', 'PaletteController@userPalettes')->middleware('auth');



//GENERAL ROUTES
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
