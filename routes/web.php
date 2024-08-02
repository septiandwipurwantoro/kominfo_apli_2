<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\LogPenyesuaianBarangController;

Route::get('/', function () {
    return redirect()->route('dashboard');;
});

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'create']);
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    // Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile/{id}', [UserController::class, 'edit'])->name('profile');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    // Route::get('master-admin', [AdminController::class, 'index'])->name('master-admin');
    // Route::get('master-user', [UserController::class, 'index'])->name('master-user');
    Route::get('master-user', [UserController::class, 'index'])->name('master-user');
    Route::get('create-user', [UserController::class, 'create'])->name('create-user');
    Route::post('store-user', [UserController::class, 'store'])->name('store-user');
    Route::get('edit-user/{id}', [UserController::class, 'edit'])->name('edit-user');
    Route::put('update-user/{id}', [UserController::class, 'update'])->name('update-user');
    Route::get('delete-user/{id}', [UserController::class, 'delete'])->name('delete-user');
    // Route::get('aset', [AsetController::class, 'index'])->name('aset');
    // Route::get('confirm-aset', [AsetController::class, 'show_confirm_aset'])->name('confirm-aset');
    // Route::get('buat-aset', [AsetController::class, 'create'])->name('buat-aset');
    // Route::post('simpan-aset', [AsetController::class, 'store'])->name('simpan-aset');
    // Route::get('edit-aset/{id}', [AsetController::class, 'edit'])->name('edit-aset');
    // Route::put('update-aset/{id}', [AsetController::class, 'update'])->name('update-aset');
    // Route::get('delete-aset/{id}', [AsetController::class, 'delete'])->name('delete-aset');
    // Route::get('confirming-aset/{id}', [AsetController::class, 'update_aset_status'])->name('confirming-aset');
    Route::get('asset', [AsetController::class, 'index'])->name('asset');
    Route::get('asset-bidang', [AsetController::class, 'show_asset_bidang'])->name('asset-bidang');
    Route::get('asset-pending', [AsetController::class, 'show_asset_pending'])->name('asset-pending');
    Route::get('asset-pending-user/{id}', [AsetController::class, 'show_asset_pending_user'])->name('asset-pending-user');
    Route::get('asset-removed', [AsetController::class, 'show_asset_removed'])->name('asset-removed');
    Route::get('create-asset', [AsetController::class, 'create'])->name('create-asset');
    Route::post('store-asset', [AsetController::class, 'store'])->name('store-asset');
    Route::get('edit-asset/{id}', [AsetController::class, 'edit'])->name('edit-asset');
    Route::put('update-asset/{id}', [AsetController::class, 'update'])->name('update-asset');
    Route::get('aset-status/{id}', [AsetController::class, 'show_req_status'])->name('aset-status');
    Route::get('delete-asset/{id}', [AsetController::class, 'delete'])->name('delete-asset');
    Route::post('restore-asset', [AsetController::class, 'restore'])->name('restore-asset');
    Route::post('adjust-asset', [AsetController::class, 'adjust'])->name('adjust-asset');
    Route::post('confirm-asset', [AsetController::class, 'update_asset_status_confirm'])->name('confirm-asset');
    Route::post('reject-asset', [AsetController::class, 'update_asset_status_reject'])->name('reject-asset');
    // Route::get('log-list', [LogController::class, 'index'])->name('log-list');
    Route::get('log', [LogController::class, 'index'])->name('log');
    Route::get('log-adjestment', [LogPenyesuaianBarangController::class, 'index'])->name('log-adjestment');

    Route::get('/data-record.json', [AsetController::class, 'get_data_record']);
});