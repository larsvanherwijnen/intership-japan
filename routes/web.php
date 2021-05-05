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
//User routes
Route::get('/', 'App\Http\Controllers\HomeController@show')->name('home');
//auth routes
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@createUser');
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showUserForm')->name('register');
Route::get('/logout', 'App\Http\Controllers\Auth\LogoutController@logout')->name('logout');

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showUserLogin')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');

//Admin routes
Route::get('/admin', 'App\Http\Controllers\AdminController@show')->name('admin')->middleware('auth');
//Auth routes
Route::post('/admin/register', 'App\Http\Controllers\Auth\RegisterController@createAdmin');
Route::get('/admin/register', 'App\Http\Controllers\Auth\RegisterController@showAdminForm')->name('registerAdmin');
