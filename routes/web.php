<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/picsart', ['App\Http\Controllers\FilterController', 'picsartform'])->name('picsart.form');
Route::post('/picsart1', ['App\Http\Controllers\FilterController', 'getPicsartImage'])->name('get.picsart.image');

Route::get('/admin/add-labor', ['App\Http\Controllers\FilterController', 'addlaborForm'])->name('add.labor.form');



//Admin route
Route::get('/admin-login', [AdminController::class, 'loginPage'])->name('admin.login');
Route::post('/admin/loginprocess', [AdminController::class, 'loginProcess'])->name('admin.loginprocess');
Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');

Route::group(['middleware' => ['auth:admin']], function () {
    //admin
    Route::post('/admin/logout', [AdminController::class, 'staffLogout'])->name('admin.logout');
    Route::get('/admin/index', [AdminController::class, 'adminIndexPage'])->name('admin.index');
    Route::post('/admin/add', [AdminController::class, 'indexpage'])->name('admin.add');
    Route::post('/admin/edit', [AdminController::class, 'indexpage'])->name('admin.edit');
    //user
    Route::get('/admin/user-index', [AdminController::class, 'userIndexPage'])->name('admin.user_index');
    Route::post('/admin/add-user', [AdminController::class, 'indexpage'])->name('admin.add_user');
    Route::post('/admin/edit-user', [AdminController::class, 'indexpage'])->name('admin.edit_user');
    //staff
    Route::get('/admin/staff-index', [AdminController::class, 'staffIndexPage'])->name('admin.staff_index');
    Route::get('/admin/add-staff', [AdminController::class, 'addStaffPage'])->name('admin.add_staff');
    Route::post('/admin/edit-staff', [AdminController::class, 'indexpage'])->name('admin.edit_staff');
    //category
    Route::get('/admin/category-index', [AdminController::class, 'categoryIndexPage'])->name('category.user_index');
    Route::post('/admin/add-user', [AdminController::class, 'indexpage'])->name('admin.add_user');
    Route::post('/admin/edit-user', [AdminController::class, 'indexpage'])->name('admin.edit_user');
    //state
    Route::get('/admin/state-index', [AdminController::class, 'stateIndexPage'])->name('admin.state_index');
    Route::post('/admin/add-user', [AdminController::class, 'indexpage'])->name('admin.add_user');
    Route::post('/admin/edit-user', [AdminController::class, 'indexpage'])->name('admin.edit_user');
    //district
    Route::get('/admin/district-index', [AdminController::class, 'districtIndexPage'])->name('admin.district_index');
    Route::post('/admin/add-staff', [AdminController::class, 'indexpage'])->name('admin.add_staff');
    Route::post('/admin/edit-staff', [AdminController::class, 'indexpage'])->name('admin.edit_staff');

});




//staff route
Route::get('/staff-login', [StaffController::class, 'loginPage'])->name('staff.login');
Route::post('/staff/loginprocess', [StaffController::class, 'loginProcess'])->name('staff.loginprocess');
Route::get('/staff/dashboard', [StaffController::class, 'staffDashboard'])->name('staff.dashboard');

Route::group(['middleware' => ['auth:staff']], function () {

    Route::post('/staff/logout', [StaffController::class, 'staffLogout'])->name('staff.logout');

});


//user route
Route::get('/staff-login', [StaffController::class, 'loginPage'])->name('staff.login');
Route::post('/staff/loginprocess', [StaffController::class, 'loginProcess'])->name('staff.loginprocess');
Route::get('/staff/dashboard', [StaffController::class, 'staffDashboard'])->name('staff.dashboard');

Route::group(['middleware' => ['auth:staff']], function () {

    Route::post('/staff/logout', [StaffController::class, 'staffLogout'])->name('staff.logout');
    Route::post('/staff/logout', [StaffController::class, 'staffLogout'])->name('staff.logout');

});

