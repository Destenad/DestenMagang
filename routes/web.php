<?php

use App\Http\Controllers\DepartementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/employees', [EmployeesController::class, 'index'])->middleware(['auth', 'verified'])->name('employees');

Route::get('/departement', [DepartementController::class, 'index'])->middleware(['auth', 'verified'])->name('departement');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/departement/tambah', [DepartementController::class, 'tambah'])->name('departement.tambah');
    Route::post('/departement/proses', [DepartementController::class, 'proses'])->name('departement.proses');
    Route::get('/departement/edit/{id}', [DepartementController::class, 'edit'])->name('departement.edit');
    Route::get('/departement/update/{id}', [DepartementController::class, 'update'])->name('departement.update');
    Route::get('/departement/hapus/{id}', [DepartementController::class, 'hapus'])->name('departement.hapus');
});

Route::middleware('auth')->group(function () {
Route::get('/employees/tambah', [EmployeesController::class, 'tambah'])->name('employees.tambah');
Route::post('/employees/proses', [EmployeesController::class, 'proses'])->name('employees.proses');
Route::get('/employees/edit/{id}', [EmployeesController::class, 'edit'])->name('employees.edit');
Route::put('/employees/update/{id}', [EmployeesController::class, 'update'])->name('employees.update');
Route::delete('/employees/delete/{id}', [EmployeesController::class, 'destroy'])->name('employees.destroy');
});


require __DIR__ . '/auth.php';
