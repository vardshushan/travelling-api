<?php

use App\Http\Controllers\API\AuthController;
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
Route::get('/redirectFacebook', [AuthController::class, 'redirectFacebook']);
Route::get('/callback', [AuthController::class, 'callbackFacebook']);
//Google Auth
Route::get('/redirectGoogle', [AuthController::class, 'redirectGoogle']);
Route::get('/callbackGoogle', [AuthController::class, 'callbackGoogle']);


