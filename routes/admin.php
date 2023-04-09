<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::group(['namespace' => 'admin', 'middleware' => ['auth'],], function () {
    Route::get('/', 'AdminController@index')->name('admin-home');

    // Components
    Route::get('/list', 'AdminController@list')->name('admin-list');
    Route::get('/editor', 'AdminController@editor')->name('admin-editor');
    Route::get('/inputs', 'AdminController@inputs')->name('admin-inputs');

    //------------------------ Categories ------------------------
    // -> GET 
    Route::get('/categories', 'AdminController@categories')->name('admin-categories');
    Route::get('/categories/create', 'AdminController@category_create')->name('admin-categories-create');
    Route::get('/categories/edit/{id}', 'AdminController@category_edit')->name('admin-categories-edit');
    Route::get('/categories/delete/{id}', 'AdminController@category_delete')->name('admin-categories-delete');
    // -> POST

    Route::post('/categories/post/create', 'AdminController@category_post_create')->name('admin-categories-post-create');
    Route::post('/categories/post/edit/{id}', 'AdminController@category_post_edit')->name('admin-categories-post-edit');
});


Route::group(['namespace' => 'admin'], function () {
    // Auth
    Route::get('/login', 'AdminController@login')->name('admin-login');
    Route::post('/register', 'AdminController@register')->name('admin-register');
    Route::post('/login-submit', 'AdminController@loginSubmit')->name('admin-login-submit');

    Route::get('/logout', 'AdminController@logout')->name('admin-logout');
});
