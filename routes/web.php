<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PagesController;

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

// Route::get('/', function () {
//     return view('_layout.app');
// });
Route::get('/', 'App\Http\Controllers\PagesController@index');
//Testing
Route::get('/about', 'App\Http\Controllers\PagesController@about');

Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/search', function () {
    return view('pages.search');
});
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
    // Route::get('posts', 'App\Http\Controllers\PostController@trashed');
    Route::put('restore-posts/{post}', 'App\Http\Controllers\PostController@restore')->name('restore-posts');
});