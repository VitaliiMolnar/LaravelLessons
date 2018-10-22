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

Route::any('/', 'IndexController@about');

Route::get('/news/{slug}.{id2}', 'IndexController@getNews')
    ->where([
        'id' => '[0-9]+',
        'slug' => '[a-zA-Z0-9-_]+'
    ]);

Route::get('/about', 'IndexController@about');

/*
 /admin/user
 /admin/user/add
 /admin/user/edit
 /admin/user/delete/
 */

Route::group(['prefix' => '/admin/user', 'middleware' => 'admin'], function() {
    Route::get('/', 'UserController@index')
        ->name('admin.user.index');

    Route::post('/add', 'UserController@add')
        ->name('admin.user.add');

    Route::post('/edit/{id}', 'UserController@edit')
        ->where('id', '[0-9]')
        ->name('admin.user.edit');

    Route::get('/delete/{id}', 'UserController@delete')
        ->where('id', '[0-9]')
        ->name('admin.user.delete');
});