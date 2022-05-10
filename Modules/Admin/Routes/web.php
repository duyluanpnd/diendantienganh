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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index');
});

Route::prefix('authenticate')->group(function (){
    Route::get('/login', 'AdminAuthController@getLogin')->name('admin.login');
    Route::post('/login', 'AdminAuthController@postLogin');
    Route::get('/logout', 'AdminAuthController@getLogoutAdmin')->name('admin.logout');
});

Route::prefix('admin')->middleware('CheckLoginAdmin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');

    Route::group(['prefix' => 'category'], function (){

        Route::get('/', 'AdminCategoryController@index')->name('admin.get.list.category');
        Route::get('/create', 'AdminCategoryController@create')->name('admin.get.create.category');
        Route::get('/check_slug', 'AdminCategoryController@checkSlug')->name('admin.checkSlug.category');
        Route::post('/create', 'AdminCategoryController@store')->name('admin.store.category');
        Route::get('/update/{id}', 'AdminCategoryController@edit')->name('admin.get.edit.category');
        Route::post('/update/{id}', 'AdminCategoryController@update');
        Route::get('/{action}/{id}', 'AdminCategoryController@action')->name('admin.get.action.category');

    });

    Route::group(['prefix' => 'product'], function (){

        Route::get('/', 'AdminProductController@index')->name('admin.get.list.product');
        Route::get('/create', 'AdminProductController@create')->name('admin.get.create.product');
        Route::post('/create', 'AdminProductController@store');
        Route::get('/update/{id}', 'AdminProductController@edit')->name('admin.get.edit.product');
        Route::post('/update/{id}', 'AdminProductController@update');
        Route::get('/{action}/{id}', 'AdminProductController@action')->name('admin.get.action.product');

    });

    Route::group(['prefix' => 'user'], function (){

        Route::get('/', 'AdminUserController@index')->name('admin.get.list.user');
    });

    Route::group(['prefix' => 'contact'], function (){

        Route::get('/', 'AdminContactController@index')->name('admin.get.list.contact');
        Route::get('/{action}/{id}', 'AdminContactController@action')->name('admin.get.action.contact');
    });

    Route::group(['prefix' => 'system'], function (){
        Route::get('/', 'SystemAdminControlerController@index')->name('admin.get.system');
        Route::post('/', 'SystemAdminControlerController@updateSystems');
    });

    Route::group(['prefix' => 'slides'], function (){
        Route::get('/', 'SlideAdminController@index')->name('admin.get.list.slide');
        Route::get('/create', 'SlideAdminController@create')->name('admin.create.list.slide');
        Route::post('/create', 'SlideAdminController@store')->name('admin.post.list.slide');
        Route::get('/{action}/{id}', 'SlideAdminController@action')->name('admin.get.action.slide');
    });
});
