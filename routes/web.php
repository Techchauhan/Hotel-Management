<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AuthController::class, 'LoginPage'])->name('login.page');
Route::post('/login', [AuthController::class ,'login'])->name('login');


Route::get('/admin/register', [AdminController::class, 'create'])->name('admin.register');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

