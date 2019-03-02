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

Route::get('favorites/gradients', 'FavoriteGradientController@index')->middleware('auth');
Route::post('favorites/gradients', 'FavoriteGradientController@store')->name('storeFavGradient');

/*ADMIN*/
//CREATE
Route::get('/gradients/admin/create', function () {
    return view('pages.gradients.admin.create');
})->middleware('checkrole');
Route::post('gradients/new', 'GradientController@newGradients')->middleware('checkrole');
//SHOW
Route::get('/gradients/admin/show', function () {
    return view('pages.gradients.admin.show');
});
//EDIT
Route::get('/gradients/admin/edit/{gradient}', 'GradientController@showEdit')->middleware('checkrole');
Route::post('gradients/edit', 'GradientController@editGradients')->middleware('checkrole');
//DELETE
Route::get('admin/delete/{gradients}', 'GradientController@showDelete')->middleware('checkrole');
Route::post('gradients/delete', 'GradientController@deleteGradients');
/*PANEL*/
Route::get('/gradients/admin/panel', 'GradientController@userGradients')->middleware('checkrole');
//GENERATOR
Route::get('/generator/gradients', 'GradientController@generatorGradients');
Route::get('/generator/mgradients', 'GradientController@generatorMGradients');

//------------------------------------------------------------------------------------------------

//PALETTE ROUTES

Route::get('palettes/catalog', 'PaletteController@catalogPalettes');
Route::get('palettes/{palette}', 'PaletteController@showPalettes');

Route::get('favorites/palettes', 'FavoritePaletteController@index')->middleware('auth');
Route::post('favorites/palettes', 'FavoritePaletteController@store')->name('storeFavPalette');

/*ADMIN*/
//CREATE
Route::get('/palettes/admin/create', function () {
    return view('pages.palette.admin.create');
})->middleware('checkrole');

Route::post('palettes/new', 'PaletteController@newPalettes')->middleware('checkrole');
//SHOW
Route::get('/palettes/admin/show', function () {
    return view('pages.palette.admin.show');
});
//EDIT
Route::get('/palettes/admin/edit/{palette}', 'PaletteController@showEdit')->middleware('checkrole');
Route::post('palettes/edit', 'PaletteController@editPalettes')->middleware('checkrole');
//DELETE
Route::get('admin/delete/{palettes}', 'PaletteController@showDelete')->middleware('checkrole');
Route::post('palettes/delete', 'PaletteController@deletePalettes');
/*PANEL*/
Route::get('/palettes/admin/panel', 'PaletteController@userPalettes')->middleware('checkrole');

// PAYING FORM
Route::get('/account/pay', function() {
    return 'holi';
});

//GENERAL ROUTES
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
