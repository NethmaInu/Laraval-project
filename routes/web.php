<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TOdoController;

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
Route::get('/', [HomeController::class, "index"])->name('dashboard');


Route::prefix('/student')->group(function(){
    Route::get('/', [TOdoController::class,"index"])->name ('todo');
    Route::post('/store', [TOdoController::class,"store"])->name ('todo.store');
    Route::post('/list', [TOdoController::class,"list"])->name ('todo.list');
    Route::get('/{id}/delete', [TOdoController::class,"delete"])->name ('todo.delete');
    Route::post('/update', [TOdoController::class,"update"])->name ('todo.update');

});
Route::prefix('/image')->group(function(){
    Route::get('/', [TOdoController::class,"index"])->name ('image');
    Route::post('/store', [TOdoController::class,"store"])->name ('todo.store');
    Route::get('/{id}/delete', [TOdoController::class,"delete"])->name ('todo.delete');
    Route::post('/update', [TOdoController::class,"update"])->name ('todo.update');

});
require __DIR__.'/auth.php';
