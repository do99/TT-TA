<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
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

Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class,'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});
Route::get('/home', function(){
    return redirect('/admin');

});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/projectmanager', [AdminController::class, 'admin'])->middleware('userAkses:Project Manager');
    Route::get('/admin/employee', [AdminController::class, 'employee'])->middleware('userAkses:Employee');
    Route::get('/admin/marketing', [AdminController::class, 'marketing'])->middleware('userAkses:Marketing');
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/client', [AdminController::class, 'client']);


    // Route::get('/');
    Route::get('/logout', [SesiController::class, 'logout']);
});
