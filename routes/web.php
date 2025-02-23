<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/register', [AdminController::class, 'create'])->name('admin.register');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

