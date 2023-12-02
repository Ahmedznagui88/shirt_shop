<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TshirtController;

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

Route::get('/', [PublicController::class , 'home'])->name('home');
Route::get('/profile', [PublicController::class , 'profile'])->name('profile');
Route::delete('/user/destroy' , [PublicController::class , 'destroy'])->name('destroy');


Route::get('/tshirt/create', [TshirtController::class, 'create'])->name('tshirt.create');
Route::post('/tshirt/store', [TshirtController::class, 'store'])->name('tshirt.store');
Route::get('/tshirt/index', [TshirtController::class, 'index'])->name('tshirt.index');
Route::get('/tshirt/show/{tshirt}', [TshirtController::class, 'show'])->name('tshirt.show');
Route::get('/tshirt/edit/{tshirt}', [TshirtController::class, 'edit'])->name('tshirt.edit');
Route::put('/tshirt/update/{tshirt}', [TshirtController::class, 'update'])->name('tshirt.update');
Route::delete('/tshirt/destroy/{tshirt}', [TshirtController::class, 'destroy'])->name('tshirt.destroy');


