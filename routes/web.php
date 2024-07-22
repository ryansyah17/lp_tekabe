<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/services', [HomeController::class, 'services'])->name('services');


Route::prefix('admin')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.proses');

    Route::middleware(['auth'])->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // user route
    Route::controller(UserController::class)
        ->prefix('users')
        ->group(function () {
            Route::get('/', 'index')->name('users.index');
            Route::get('/create', 'create')->name('users.create');
            Route::post('/create', 'store')->name('users.store');
            Route::get('/{user}/delete', 'destroy')->name('users.destroy');
        });

    // service route
    Route::controller(ServiceController::class)
        ->prefix('service')
        ->group(function () {
            Route::get('/', 'index')->name('service.index');
            Route::get('/create', 'create')->name('service.create');
            Route::post('/create', 'store')->name('service.store');
            Route::get('/{service}/edit', 'edit')->name('service.edit');
            Route::post('/{service}/edit', 'update')->name('service.update');
            Route::get('/{service}/delete', 'destroy')->name('service.destroy');
        });
    });
    
});
