<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Blog\PostsController;
use App\Http\Controllers\ContactUsFormController;

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

Route::get('/', 'App\Http\Controllers\WelcomeController@index');

Route::get('blog/posts/{post}', [App\Http\Controllers\Blog\PostsController::class, 'show'])->name('blog.show');

//contact form
Route::get('/contact', [
    'uses' => 'App\Http\Controllers\ContactUsFormController@createForm'
]);
// Post contact form data
Route::post('/contact', [
    'uses' => 'App\Http\Controllers\ContactUsFormController@contactUsForm',
    'as' => 'contact.store'
]);

Route::get('/account', function () {
    return view('dashboard.account.index');
});
Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('Dashboard');
    // categories
    Route::resource('categories', 'App\Http\Controllers\CategoryController');
    Route::resource('posts', 'App\Http\Controllers\PostController');
    Route::resource('tags', 'App\Http\Controllers\TagsController');
    Route::resource('abouts', 'App\Http\Controllers\AboutsController');
});

//users route
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('users/profile', 'App\Http\Controllers\UsersController@edit')->name('users.edit-profile');
    Route::put('users/profile', 'App\Http\Controllers\UsersController@update')->name('users.update-profile');
    Route::get('users', 'App\Http\Controllers\UsersController@index');
    Route::post('users/{user}/make-admin', 'App\Http\Controllers\UsersController@makeAdmin')->name('users.make-admin');
});

// Home Page carousel
Route::resource('carousel', 'App\Http\Controllers\CarouselController');
//show categories
Route::get('category/{id}', 'App\Http\Controllers\PagesController@showCategories');
