<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PracticalTrainingController;

Route::get('/', [AuthController::class, 'LoginPage'])->name('login');
Route::post('/LoginAuth', [AuthController::class, 'LoginAuthenticate'])->name('LoginAuthenticate');

Route::get('/Register', [AuthController::class, 'RegisterPage'])->name('RegisterPage');
Route::post('/PostRegister', [AuthController::class, 'PostRegister'])->name('PostRegister');

Route::middleware(['auth'])->group(function () {

    Route::get('/Dashboard', [PracticalTrainingController::class, 'Dashboard'])->name('Dashboard');
    
    Route::get('/AddInformation', [PracticalTrainingController::class, 'AddInformation'])->name('AddInformation');
    Route::post('/PostAddInformation', [PracticalTrainingController::class, 'PostAddInformation'])->name('PostAddInformation');
    
    Route::get('/ListInformation', [PracticalTrainingController::class, 'ListInformation'])->name('ListInformation');

    Route::get('/UpdateInformation/{id_info}', [PracticalTrainingController::class, 'UpdateInformation'])->name('UpdateInformation');
    Route::put('/PostUpdateInformation/{id_info}', [PracticalTrainingController::class, 'PostUpdateInformation'])->name('PostUpdateInformation');
    
    Route::get('/DeleteInformation/{id_info}', [PracticalTrainingController::class, 'DeleteInformation'])->name('DeleteInformation');

});

Route::get('/Logout', [AuthController::class, 'Logout'])->name('Logout');