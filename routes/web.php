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
Route::get('/', 'App\Http\Controllers\user\HomeController@show')->name('home');
//auth routes
Route::get('/register', 'App\Http\Controllers\auth\RegisterController@showUserForm')->name('register');
Route::post('/register', 'App\Http\Controllers\auth\RegisterController@createUserRole');
Route::get('/logout', 'App\Http\Controllers\auth\LogoutController@logout')->name('logout');

//profile
Route::post('/user/{id}/profile', 'App\Http\Controllers\user\ProfileController@profileShow')->name('profile');

Route::get('/login', 'App\Http\Controllers\auth\LoginController@showUserLogin')->name('login');
Route::post('/login', 'App\Http\Controllers\auth\LoginController@login');

//Admin routes
Route::group(['middleware' => ['auth','admin']], function (){
    Route::get('/admin', 'App\Http\Controllers\admin\AdminController@show')->name('admin');
    Route::get('/admin/interns', 'App\Http\Controllers\admin\InternController@show')->name('adminInterns');
    Route::get('/admin/companies', 'App\Http\Controllers\admin\CompaniesController@show')->name('adminCompanies');
    Route::get('/admin/educators', 'App\Http\Controllers\admin\EducatorController@show')->name('adminEducators');
    Route::get('/admin/approvals', 'App\Http\Controllers\admin\ApprovalController@show')->name('adminApprovals');
    Route::post('/admin/approve/{id}', 'App\Http\Controllers\admin\ApprovalController@update')->name('approve');
});



//Auth routes
Route::get('/admin/register', 'App\Http\Controllers\auth\RegisterController@showAdminForm')->name('registerAdmin');
Route::post('/admin/register', 'App\Http\Controllers\auth\RegisterController@createAdmin');
