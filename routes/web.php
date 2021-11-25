<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Users\ManagementController;
use App\Http\Controllers\Users\CompanyController;
use App\Http\Controllers\Users\UserRoleController;
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

/**
 * Authentication routes
 */
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
 * Home
 */
Route::get('/home', [HomeController::class, 'index'])->name('home');

/**
 * User Role
 */
Route::get('/roles/index', [UserRoleController::class, 'index'])->name('roles');

/**
 * User
 */
Route::get('/users/menu', [UserController::class, 'usersMenu'])->name('menuUsers');

Route::get('/users/index', [UserController::class, 'index'])->name('users');

Route::get('/users/show/{id}', [UserController::class, 'show'])->name('showUser');

Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('editUser');

Route::post('/users/update/{id}', [UserController::class, 'update'])->name('updateUser');

Route::get('/users/delete/{id}', [UserController::class, 'softDelete'])->name('deleteUser');

/**
 * User Profile
 */
Route::get('/user/profile', [UserController::class, 'profile'])->name('profile');

Route::get('/user/edit-profile/{id}', [UserController::class, 'editProfile'])->name('editProfile');

Route::post('/user/update-profile/{id}', [UserController::class, 'updateProfile'])->name('updateProfile');

/**
 * Management Menu
 */
Route::get('/management/menu', [ManagementController::class, 'managementMenu'])->name('management');

/**
 * Company Type
 */

/**
 * Company
 */
Route::get('/companies/menu', [CompanyController::class, 'companiesMenu'])->name('companiesMenu');

Route::get('/companies/edit-main-company/{id}', [CompanyController::class, 'editMain'])->name('editMainCompany');

Route::post('/companies/update-main-company/{id}', [CompanyController::class, 'updateMain'])->name('updateMainCompany');

Route::get('/companies/index', [CompanyController::class, 'index'])->name('companies');

Route::get('/companies/show/{id}', [CompanyController::class, 'show'])->name('showCompany');

Route::get('/companies/create', [CompanyController::class, 'create'])->name('createCompany');

Route::post('/companies/store', [CompanyController::class, 'store'])->name('storeCompany');

Route::get('/companies/edit/{id}', [CompanyController::class, 'edit'])->name('editCompany');

Route::post('/companies/update/{id}', [CompanyController::class, 'update'])->name('updateCompany');

Route::get('/companies/delete/{id}', [CompanyController::class, 'softDelete'])->name('deleteCompany');

/**
 * Departments
 */
