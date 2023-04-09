<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//===================Home Route==================================== 
Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/samples',[HomeController::class,'samples'])->name('samples');
Route::get('/plugin',[HomeController::class,'plugin'])->name('plugin');
Route::get('/song',[HomeController::class,'song'])->name('song');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/account',[HomeController::class,'account'])->name('account');
Route::get('/cart',[HomeController::class,'cart'])->name('cart');



//=========================Registration Route=======================
Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
