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
/*
|-------------------------------------------------------------------------
|command to see all routes using terminal : php artisan route:list
|-------------------------------------------------------------------------
*/



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ADMIN ROUTING WLL GO UNDER BELOW GROUP SECTION
Route::group([
	'prefix'=>'admin',
	 ],function(){
	 	
	 	//Category routing using resource laravel
	 	Route::resource('category','Admin\CategoryController');
	 	
	 	//datatable ajax for category
	 	Route::get('dt_ajax_category','Admin\CategoryController@ajax_category')->name('dt_ajax_category');

	 	//subcategory routing 
	 	Route::resource('subcategory','Admin\SubCategoryController');


 });
//END OF ADMIN ROUTING SECTION.