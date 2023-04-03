<?php

use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\Ad;
use App\Http\Controllers\API\CompanyController;
use App\Http\Controllers\API\DirectionController;
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


Route::group(['prefix' => '/admin/direction', 'middleware' => ['auth:api', 'admin']], function () {
    Route::get('/',[DirectionController::class, 'getAllDirections'])->name('get.directions');
    Route::post('/', [DirectionController::class, 'createDirection'])->name('create.direction');
    Route::put('/{id}', [DirectionController::class, 'updateDirection'])->name('update.direction');
    Route::delete('/{id}', [DirectionController::class, 'deleteDirection'])->name('delete.direction');
});
Route::group(['prefix' => '/admin/company', 'middleware' => ['auth:api', 'admin']], function () {
    Route::get('/',[CompanyController::class, 'getAllCompanies'])->name('get.companies');
    Route::post('/', [CompanyController::class, 'createCompany'])->name('create.company');
    Route::put('/{id}', [CompanyController::class, 'updateCompany'])->name('update.company');
    Route::delete('/{id}', [CompanyController::class, 'deleteCompany'])->name('delete.company');
});


//AuthController endpoints
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');
//facebook Auth
Route::get('/redirectFacebook', [AuthController::class, 'redirectFacebook']);
Route::get('/callback', [AuthController::class, 'callbackFacebook']);
//Google Auth
Route::get('/redirectGoogle', [AuthController::class, 'redirectGoogle']);
Route::get('/callbackGoogle', [AuthController::class, 'callbackGoogle']);



