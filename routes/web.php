<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\DashboardPetugasController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UpdateLokerController;
use App\Http\Controllers\UpdatePencakerController;


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

Route::middleware(['guest'])->group(function(){
    Route::get('/', [LoginUserController::class, 'index']);
    Route::post('/', [LoginUserController::class, 'authenticate']);
});

Route::middleware(['auth'])->group(function(){   
    Route::get('/dashboardpetugas', [DashboardPetugasController::class, 'index']);
    // Route::post('/dashboardpetugas', [DashboardPetugasController::class, 'index']);

    

    Route::get('/detail/{id}', [ViewController::class, 'index']);
    Route::delete('/deleteLoker/{id}', [DashboardPetugasController::class, 'destroy']);
    Route::get('/edit/{id}', [UpdateLokerController::class, 'edit']);
    Route::put('/edit/{id}', [UpdateLokerController::class, 'update']);
    Route::get('/updatepencaker/{id}', [UpdatePencakerController::class, 'edit']);
    Route::put('/updatepencaker/{id}', [UpdatePencakerController::class, 'update']);

    Route::get('/add', [UpdateLokerController::class, 'display']);
    Route::post('/add', [UpdateLokerController::class, 'store'])->name('loker.store');
    Route::get('/logout', [LoginUserController::class, 'logout'])->name('logout');
});

