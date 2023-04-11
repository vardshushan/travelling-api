<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('register', [AuthController::class, 'index'])->name('register.index');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'loginIndex'])->name('login.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/dashboard', function () {
            return view('adminDashboard');
        })->name('admin.dashboard');
    });
});

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
