<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//User Login
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
 * Home
 */
Route::get('/home', [HomeController::class, 'index'])->name('home');

/**
 * User Role
 */

/**
 * User
 */

/**
 * User Profile
 */
Route::get('/user/profile', [UserController::class, 'profile'])->name('profile');

Route::get('/user/edit-profile/{id}', [UserController::class, 'editProfile'])->name('editProfile');

Route::post('/user/update-profile/{id}', [UserController::class, 'updateProfile'])->name('updateProfile');

/**
 * Management Menu
 */

/**
 * Company Type
 */

/**
 * Company
 */

/**
 * Departments
 */
