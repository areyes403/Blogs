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

Route::get('/', function () {
    return redirect()->route('login');
});

 
Route::resource('user', 'UserController');
Route::resource('blog', 'BlogController');
Route::get('/blog/crear/{id}','BlogController@crear_blog')->name('crear.blog');
Route::get('/blog/all/{id}','BlogController@all_blogs')->name('mostrar.blogs');
Route::get('/blog/show/admin/{id}','BlogController@show_admin')->name('mostraradmin.blogs');
Route::get('/blog/show/user/{id}','BlogController@show_user')->name('mostraruser.blogs');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
