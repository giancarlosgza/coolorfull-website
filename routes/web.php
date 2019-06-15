<?php

Route::get('/', 'GradientController@indexGradients');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
//------------------------------------------------------------------------------------------------
// ADM ROUTES -
//------------------------------------------------------------------------------------------------
Route::middleware(['auth', 'checkrole'])->group(function () {
    Route::get('gradients/admin/create', function() { return view('pages.gradients.admin.create'); });
    Route::get('gradients/admin/show', function () {return view('pages.gradients.admin.show');});
    Route::get('gradients/admin/edit/{gradient}', 'GradientController@showEdit');
    Route::get('admin/delete/{gradients}', 'GradientController@showDelete');
    Route::get('gradients/admin/panel', 'GradientController@userGradients');
    Route::post('gradients/new', 'GradientController@newGradients');
    Route::post('gradients/edit', 'GradientController@editGradients');
    Route::post('gradients/delete', 'GradientController@deleteGradients');

    Route::get('palettes/admin/create', function(){return view('pages.palette.admin.create');});
    Route::get('palettes/admin/show', function(){return view('pages.palette.admin.show');});
    Route::get('palettes/admin/edit/{palette}', 'PaletteController@showEdit');
    Route::get('admin/delete/{palettes}', 'PaletteController@showDelete');
    Route::get('palettes/admin/panel', 'PaletteController@userPalettes');
    Route::post('palettes/new', 'PaletteController@newPalettes');
    Route::post('palettes/edit', 'PaletteController@editPalettes');
    Route::post('palettes/delete', 'PaletteController@deletePalettes');

});
//------------------------------------------------------------------------------------------------
// GENERAL ROUTES
//------------------------------------------------------------------------------------------------
Route::get('gradients/catalog', 'GradientController@catalogGradients')->name('gradientsCatalog');
Route::get('gradients/{gradient}', 'GradientController@showGradients');

Route::get('palettes/catalog', 'PaletteController@catalogPalettes')->name('palettesCatalog');
Route::get('palettes/{palette}', 'PaletteController@showPalettes');

Route::get('generator/gradients', 'GradientController@generatorGradients');
Route::get('generator/mgradients', 'GradientController@generatorMGradients');

Route::get('pricing', function(){return view('more.pricing');});
Route::get('team', function () {return view('more.team');});
Route::get('whatsnew', function () {return view('more.whatsnew');});
Route::get('privacy', function(){return view('more.privacy');});

Route::get('random/color', function () {return view('pages.colors.random');});
Route::get('image/color', function () {return view('pages.colors.imagecolors');});

Route::get('design/system', function () {return view('pages.design.designsystem');});
Route::get('design/system/docs', function () {return view('pages.design.docs');});

//------------------------------------------------------------------------------------------------
// TEMPLATES ROUTES
//------------------------------------------------------------------------------------------------
Route::get('templates/themes', function () {return view('templates.templates');});
Route::get('templates/dashboard-v2/index', function () {return view('templates.dashboard-v2.index');});
Route::get('templates/dashboard-v2/components', function () {return view('templates.dashboard-v2.components.components');});
Route::get('templates/dashboard-v2/utilities', function () {return view('templates.dashboard-v2.utilities.utilities');});
Route::get('templates/dashboard-v2/pages/login', function () {return view('templates.dashboard-v2.pages.login');});
Route::get('templates/dashboard-v2/pages/register', function () {return view('templates.dashboard-v2.pages.register');});

Route::get('templates/coming-soon/index', function () {return view('templates.coming_soon.index');});
Route::get('templates/landing-page/landing', function () {return view('templates.landing-page.landing');});
Route::get('templates/download-now/index', function () {return view('templates.download-now.index');});
Route::get('templates/landing-page-demo/index', function () {return view('templates.landing-page-demo.index');});
Route::get('templates/photo-portafolio/index', function () {return view('templates.photo-portafolio.index');});

//Route::get('code/editor', 'GradientController@gradientsEditor');
//------------------------------------------------------------------------------------------------
// SUBSCRIPTION ROUTES
//------------------------------------------------------------------------------------------------
Route::post('register', 'PaymentController@create')->name('register');
Route::get('renew', 'PaymentController@index')->name('payingForm')->middleware('auth');
Route::post('renew', 'PaymentController@renew')->name('renewSub')->middleware('auth');

Route::middleware(['auth', 'checkpaid'])->group(function () {
    Route::get('favorites/gradients', 'FavoriteGradientController@index');
    Route::post('favorites/gradients', 'FavoriteGradientController@store')->name('storeFavGradient');
    Route::post('gradients', 'ProGradientController@create')->name('saveGradient');

    Route::get('favorites/palettes', 'FavoritePaletteController@index');
    Route::post('favorites/palettes', 'FavoritePaletteController@store')->name('storeFavPalette');

    Route::get('saved/gradients', 'ProGradientController@index');
});
