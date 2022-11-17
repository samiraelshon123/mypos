<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\Client\OrderController;
use App\Http\Controllers\Dashboard\ClientController;
use App\Http\Controllers\Dashboard\WelcomeController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\UserController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::get('/', function () {
    return redirect()->route('dashboard.welcome');
});
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::group(['prefix' => '','middleware' => ['auth']], function() {
            Route::prefix('dashboard')->name('dashboard.')->group(function(){

                Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
                Route::resource('products',ProductController::class)->except('show');
                Route::resource('categories',CategoryController::class)->except('show');
                Route::resource('users',UserController::class)->except('show');
                Route::resource('clients',ClientController::class)->except('show');
                Route::resource('clients.orders',OrderController::class)->except('show');
            });
        });

    });



Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginUser', [AuthController::class, 'loginUser']);


Route::get('/logout', [AuthController::class, 'logout']);






