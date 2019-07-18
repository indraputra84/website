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

// Bagian yang dapat diakses guest/pengunjung
Route::get('/', 'ArticleController@index')->name('index');

Route::get('/search', 'ArticleController@search')->name('search');

Route::get('/contact', 'ContactController@create')->name('contact');

Route::post('/contact', 'ContactController@store')->name('createcontact');

Route::get('/request', 'RequestController@create')->name('request');

Route::post('/request', 'RequestController@store')->name('createrequest');

Route::get('/success', 'AlertController@pesan')->name('success');

Route::get('/category/{article}', 'CategoryController@show')->name('category');
// 


Auth::routes();

// Route Guest Start
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/article/{article}', 'ArticleController@article')->name('article');

Route::get('/createx', 'ArticleController@create')->name('create');
// Route Guest end

// Route Admin Start 
Route::get('/mainmenu', 'DashboardController@index')->name('admin.home');

// Crud Article Start
Route::get('/tablearticle', 'DashboardController@articletable')->name('admin.article');

Route::get('/createarticle', 'DashboardController@create')->name('admin.createarticle');

Route::post('/create', 'ArticleController@store')->name('store');

Route::get('/editarticle/{article}', 'DashboardController@edit')->name('admin.editarticle');

Route::put('/updatearticle/{article}', 'DashboardController@update')->name('admin.updatearticle');

Route::delete('/deletearticle/{article}', 'DashboardController@destroy')->name('admin.destroyarticle');
// Crud Article End

// Crud Random Pick Start

Route::get('/tablerp', 'RandomPickController@indextable')->name('admin.rp');

Route::get('/createrp', 'RandomPickController@create')->name('admin.createrp');

Route::post('/createrp', 'RandomPickController@store')->name('admin.storerp');

Route::get('/editrp/{randompick}', 'RandomPickController@edit')->name('admin.editrp');

Route::put('/updaterp/{randompick}', 'RandomPickController@update')->name('admin.updaterp');

Route::delete('/deleterp/{randompick}', 'RandomPickController@destroy')->name('admin.destroyrp');

// Crud Random Pick End

// Crud Setting Acount Start
Route::get('/setting/{id}', 'DashboardController@setting')->name('admin.setting');

Route::put('/setting/{id}', 'DashboardController@settingconfirm')->name('admin.settingupdate');
// Crud Setting Acoun End

//Read Contact Start
Route::get('/tablecontact', 'ContactController@index')->name('admin.contact');
//Read Contact End

//Read Contact Start
Route::get('/tablerequest', 'RequestController@index')->name('admin.request');
//Read Contact End

//CRUD Category Start
Route::get('/createcategory', 'CategoryController@create')->name('admin.createcategory');

Route::get('/createmultiplecategory', 'CategoryController@createmultiple')->name('admin.createmcategory');

Route::post('/createmultiplecategory', 'CategoryController@storemultiple')->name('admin.storemcategory');

Route::post('/createcategory', 'CategoryController@store')->name('admin.storecategory');

Route::get('/category', 'CategoryController@index')->name('admin.category');

Route::delete('/deletecategory/{caategory}', 'CategoryController@destroy')->name('admin.destroycategory');

Route::get('/editcategory/{category}', 'CategoryController@edit')->name('admin.editcategory');

Route::put('/updatecategory/{category}', 'CategoryController@update')->name('admin.updatecategory');
//END CRUD Category

// Route Admin End

// Route Developer

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('developer.home');

// END Route Developer
