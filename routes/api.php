<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BlogController;
use App\Http\Controllers\API\ContentController;
use App\Http\Controllers\API\OpenAIController;
use App\Http\Controllers\API\PartnersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api');

//AuthController endpoints
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('register', [AuthController::class, 'index'])->name('register.index');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'login'])->name('login.index');

Route::group(['middleware' => ['auth:api', 'admin']], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::post('open-ai', [OpenAIController::class, 'index']);
Route::get('blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('contents', [ContentController::class, 'index'])->name('contents');
Route::get('partners', [PartnersController::class, 'index'])->name('partners');


