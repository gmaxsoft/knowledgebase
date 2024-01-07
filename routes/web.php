<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\PageController;
use Auth;
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

Route::get('/documentation', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('documentation');
Route::resource('pages',PageController::class)->middleware(['auth', 'verified']); 
Route::resource('navs',NavController::class)->middleware(['auth', 'verified']);
Route::post('/navs/order_change', [NavController::class, 'order_change'])->name('navs.order_change');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('profile.index');
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->middleware(['auth', 'verified'])->name('user.profile.store');
Auth::routes();
