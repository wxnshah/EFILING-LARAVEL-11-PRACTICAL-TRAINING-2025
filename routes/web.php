<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;

Route::get('/', [AuthController::class, 'LoginPage'])->name('login');
Route::post('/LoginAuth', [AuthController::class, 'LoginAuthenticate'])->name('LoginAuthenticate');

Route::get('/Register', [AuthController::class, 'RegisterPage'])->name('RegisterPage');
Route::post('/PostRegister', [AuthController::class, 'PostRegister'])->name('PostRegister');

Route::middleware(['admin'])->group(function () {

    Route::get('/Admin/Dashboard', [AdminController::class, 'AdminDashboard'])->name('AdminDashboard');

    // [Admin] Tambah Maklumat
    Route::get('/Admin/AddInformation', [AdminController::class, 'AdminAddInformation'])->name('AdminAddInformation');
    Route::post('/Admin/PostAddInformation', [AdminController::class, 'AdminPostAddInformation'])->name('AdminPostAddInformation');

    // [Admin] Senarai Maklumat
    Route::get('/Admin/ListInformation', [AdminController::class, 'AdminListInformation'])->name('AdminListInformation');

    // [Admin] Kemaskini Maklumat
    Route::get('/Admin/UpdateInformation/{id_info}', [AdminController::class, 'AdminUpdateInformation'])->name('AdminUpdateInformation');
    Route::put('/Admin/UpdateInformation/{id_info}', [AdminController::class, 'AdminPostUpdateInformation'])->name('AdminPostUpdateInformation');

    // [Admin] Padam Maklumat
    Route::get('/Admin/DeleteInformation/{id_info}', [AdminController::class, 'AdminDeleteInformation'])->name('AdminDeleteInformation');

    // [Admin] Senarai Pengguna
    Route::get('/Admin/ListUsers', [AdminController::class, 'AdminListUsers'])->name('AdminListUsers');

    // [Admin] Kemaskini Senarai Pengguna
    Route::get('/Admin/UpdateUsersInformation/{id_user}', [AdminController::class, 'AdminUpdateUsersInformation'])->name('AdminUpdateUsersInformation');
    Route::put('/Admin/PostAdminUpdateUsersInformation/{id_user}', [AdminController::class, 'PostAdminUpdateUsersInformation'])->name('PostAdminUpdateUsersInformation');

    // [Admin] Padam Senarai Pengguna
    Route::get('/Admin/DeleteUsersInformation/{id_user}', [AdminController::class, 'AdminDeleteUsersInformation'])->name('AdminDeleteUsersInformation');

    // [Admin] Maklumat Peribadi
    Route::get('/Admin/PersonalInformation/{id_user}', [AdminController::class, 'AdminPersonalInformation'])->name('AdminPersonalInformation');
    Route::put('/Admin/UpdatePersonalInformation/{id_user}', [AdminController::class, 'UpdateAdminPersonalInformation'])->name('UpdateAdminPersonalInformation');

});

Route::middleware(['staff'])->group(function () {

    Route::get('/Dashboard', [StaffController::class, 'Dashboard'])->name('Dashboard');

    // [Staff] Tambah Maklumat
    Route::get('/AddInformation', [StaffController::class, 'AddInformation'])->name('AddInformation');
    Route::post('/PostAddInformation', [StaffController::class, 'PostAddInformation'])->name('PostAddInformation');

    // [Staff] Senarai Maklumat
    Route::get('/ListInformation', [StaffController::class, 'ListInformation'])->name('ListInformation');

    // [Staff] Kemaskini Maklumat
    Route::get('/UpdateInformation/{id_info}', [StaffController::class, 'UpdateInformation'])->name('UpdateInformation');
    Route::put('/PostUpdateInformation/{id_info}', [StaffController::class, 'PostUpdateInformation'])->name('PostUpdateInformation');

    // [Staff] Padam Maklumat
    Route::get('/DeleteInformation/{id_info}', [StaffController::class, 'DeleteInformation'])->name('DeleteInformation');

    // [Staff] Maklumat Peribadi
    Route::get('/PersonalInformation/{id_user}', [StaffController::class, 'PersonalInformation'])->name('PersonalInformation');
    Route::put('/UpdatePersonalInformation/{id_user}', [StaffController::class, 'UpdatePersonalInformation'])->name('UpdatePersonalInformation');

});

Route::get('/Logout', [AuthController::class, 'Logout'])->name('Logout');