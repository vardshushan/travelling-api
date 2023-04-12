<?php

//use App\Http\Controllers\Admin\BlogController;
//use App\Http\Controllers\Admin\HomeController;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Route;
//
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider and all of them will
//| be assigned to the "web" middleware group. Make something great!
//|
//*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
////Route::prefix('admin')->group(function () {
////    Route::get('/home', [HomeController::class, 'index'])->name('home');
//////    Route::prefix('/blog')->group(function () {
//////        Route::get('/', [BlogController::class, 'createPage'])->name('create.page');
//////        Route::post('/', [BlogController::class, 'create'])->name('blog.create');
//////        Route::get('/blogGet', [BlogController::class, 'blogGet'])->name('blog.get');
//////    });
////    Route::prefix('blog')
////        ->as('blog.')
////        ->controller(BlogController::class)
////        ->group(function () {
////            Route::get('/', 'index')->name('open');
////            Route::get('/create', 'indexCreate')->name('open.create');
////            Route::post('create', 'create')->name('create');
////            Route::put('{id}', 'update')->name('update');
////            Route::delete('{id}', 'delete')->name('delete');
////        });
////
//    Auth::routes([
//        'register' => false, // Registration Routes...
////        'reset' => false, // Password Reset Routes...
//        'verify' => false, // Email Verification Routes...
//    ]);
//});


use App\Http\Controllers\Admin\AboutProjectController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BenefitController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CompanyInfoController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExpertiseController;
use App\Http\Controllers\Admin\OurValueController;
use App\Http\Controllers\Admin\RecognizedBy;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\ReferralController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TechnologyController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\WorkingWithUsController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\VacancyApplicationController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\ContactFormsController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ReferralController as SiteReferralController;
use App\Http\Controllers\Site\ServiceController as SiteServiceController;
use App\Http\Controllers\Site\WorkController as SiteWorkController;
use App\Http\Controllers\Site\TeamController as SiteTeamController;
use App\Http\Controllers\Site\CareerController as SiteCareerController;
use App\Http\Controllers\Site\BlogController as SiteBlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Site Routes
 */
Route::prefix('admin')->as('admin.')->group(function () {
    Route::match(['get', 'post'], 'login', [AuthController::class, 'login'])->middleware('guest')->name('login');

    Route::middleware('auth')->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::prefix('blog')
            ->as('blog.')
            ->controller(BlogController::class)
            ->group(function () {
                Route::get('/', 'index')->name('open');
                Route::post('create', 'create')->name('create');
                Route::put('{id}', 'update')->name('update');
                Route::delete('{id}', 'delete')->name('delete');
            });

    });
});
