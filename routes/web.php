<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'App\Http\Controllers\Post'], function(){
    Route::get('/posts', 'IndexController')->name('post.index');

    Route::get('posts/create', 'CreateController')->name('post.create');
    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('post.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Post', 'middleware' => 'admin'], function(){
    Route::get('admin/post', 'IndexController')->name('admin.post.index');
});
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home'); // Route::get('/', 'IndexController')->name('post.index');

Route::get('posts/update', 'App\Http\Controllers\PostController@update');
Route::get('posts/delete', 'App\Http\Controllers\PostController@delete');
Route::get('/first_or_create', 'App\Http\Controllers\PostController@firstOrCreate');
Route::get('/update_or_create', 'App\Http\Controllers\PostController@updateOrCreate');
Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about.index');
Route::get('/contacts', 'App\Http\Controllers\ContactController@index')->name('contact.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
