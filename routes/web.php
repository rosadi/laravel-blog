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


#  route untuk mengembalikan ke halaman home
Route::get('/', 'BlogController@index')->name('home');

# route untuk menampilkan data detail halaman
Route::get('/blog/{slug}', [
            'uses' => 'BlogController@show',
            'as' => 'blog.show'
            ]);

Auth::routes();

// Route::get('/edit_post/{id}', 'Backend/BlogController@edit_dua');
Route::get('/edit_post/{id}', [
            'uses' => 'Backend\BlogController@edit_dua',
            'as' => 'backend.blog.edit_dua'
            ]);

Route::put('/update_post/{id}', [
            'uses' => 'Backend\BlogController@update_dua',
            'as' => 'backend.blog.update_dua'
            ]);

Route::delete('/destroy_dua/{id}', [
            'uses' => 'Backend\BlogController@destroy_dua',
            'as' => 'backend.blog.destroy_dua'
            ]);

Route::get('/home', 'Backend\HomeController@index')->name('home');

Route::resource('/backend/blog', 'Backend\BlogController', [
    'as' => 'backend'
]);