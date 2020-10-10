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

Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/register', function () {
    return view('pages.register');
});
Route::get('/contact', function () {
    return view('pages.contact');
});