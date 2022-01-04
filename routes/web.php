<?php

use App\Http\Controllers\HomeController;
//Users Controllers
use App\Http\Controllers\Users\AuthUserController;
use App\Http\Controllers\Users\UserRoleController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Users\DepartmentController;
use App\Http\Controllers\Users\ManagementController;
//Company Controllers
use App\Http\Controllers\Companies\CompanyController;
use App\Http\Controllers\Companies\CompanyTypeController;
//Nonconformity Controllers
use App\Http\Controllers\Nonconformities\OccurrenceController;
use Illuminate\Support\Facades\App;
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

//Locale configuration
Route::get('/language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

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
 * Users
 */
Route::get('/users/menu', [UserController::class, 'usersMenu'])->name('menuUsers');

Route::get('/users/index', [UserController::class, 'index'])->name('users');

Route::get('/users/show/{id}', [UserController::class, 'show'])->name('showUser');

Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('editUser');

Route::post('/users/update/{id}', [UserController::class, 'update'])->name('updateUser');

Route::get('/users/delete/{id}', [UserController::class, 'softDelete'])->name('deleteUser');

/**
 * Management Menu
 */
Route::get('/management/menu', [ManagementController::class, 'managementMenu'])->name('management');

/**
 * Company Type
 */
Route::get('/company-types/index', [CompanyTypeController::class, 'index'])->name('types');

Route::get('/company-types/create', [CompanyTypeController::class, 'create'])->name('createType');

Route::post('/company-types/store', [CompanyTypeController::class, 'store'])->name('storeType');

Route::get('/company-types/edit/{id}', [CompanyTypeController::class, 'edit'])->name('editType');

Route::post('/company-type/update/{id}', [CompanyTypeController::class, 'update'])->name('updateType');

Route::get('/company-types/delete/{id}', [CompanyTypeController::class, 'softDelete'])->name('deleteType');

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
Route::get('/departments/index', [DepartmentController::class, 'index'])->name('departments');

Route::get('/departments/create', [DepartmentController::class, 'create'])->name('createDepartment');

Route::post('/departments/store', [DepartmentController::class, 'store'])->name('storeDepartment');

Route::get('/departments/edit/{id}', [DepartmentController::class, 'edit'])->name('editDepartment');

Route::post('/departments/update/{id}', [DepartmentController::class, 'update'])->name('updateDepartment');

Route::get('/departments/delete/{id}', [DepartmentController::class, 'softDelete'])->name('deleteDepartment');

/**
 * Occurrences
 */
Route::get('/occurrences/index', [OccurrenceController::class, 'index'])->name('occurrences');

Route::get('/occurrences/show/{id}', [OccurrenceController::class, 'show'])->name('showOcurrence');

Route::get('/occurrences/create', [OccurrenceController::class, 'create'])->name('createOccurrence');

Route::post('/occurrences/create', [OccurrenceController::class, 'store'])->name('storeOccurrence');

Route::get('/occurrences/edit/{id}', [OccurrenceController::class, 'edit'])->name('editOccurrence');

Route::post('/occurrences/update/{id}', [OccurrenceController::class, 'update'])->name('updateOccurrence');

Route::get('/occurrences/delete/{id}', [OccurrenceController::class, 'softDelete'])->name('deleteOccurrence');

/**
 * Authenticated User
 */
Route::get('/user/index', [AuthUserController::class, 'index'])->name('usersDepartment');

Route::get('/user/occurrence-menu', [AuthUserController::class, 'occurrenceMenu'])->name('menuOccurrences');

Route::get('/user/profile', [AuthUserController::class, 'profile'])->name('profile');

Route::get('/user/edit-profile-pic/{id}', [AuthUserController::class, 'editProfilePic'])->name('editProfilePic');

Route::post('/user/update-profile-pic/{id}', [AuthUserController::class, 'updateProfilePic'])->name('updateProfilePic');

Route::get('/user/edit-profile/{id}', [AuthUserController::class, 'editProfile'])->name('editProfile');

Route::post('/user/update-profile/{id}', [AuthUserController::class, 'updateProfile'])->name('updateProfile');

