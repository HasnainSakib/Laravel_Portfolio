<?php

use Illuminate\Support\Facades\Route;
use App\Models\Certification;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\DatabaseManagerController;

// Public Frontend
Route::get('/', function () {
    $certifications = Certification::orderBy('sort_order', 'asc')->orderBy('id', 'desc')->get();
    return view('portfolio', compact('certifications'));
});

// Admin Auth Routes
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Web Database Manager (GUI for viewing/editing SQLite Database)
Route::get('/db', [DatabaseManagerController::class, 'index'])->name('db.index');
Route::post('/db/query', [DatabaseManagerController::class, 'runQuery'])->name('db.query');
Route::delete('/db/delete/{table}/{id}', [DatabaseManagerController::class, 'deleteRow'])->name('db.delete');

// Protected Admin Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [CertificationController::class, 'dashboard'])->name('dashboard');
    Route::get('/certifications', [CertificationController::class, 'index'])->name('certifications.index');
    Route::post('/certifications', [CertificationController::class, 'store'])->name('certifications.store');
    Route::put('/certifications/{certification}', [CertificationController::class, 'update'])->name('certifications.update');
    Route::delete('/certifications/{certification}', [CertificationController::class, 'destroy'])->name('certifications.destroy');
});
