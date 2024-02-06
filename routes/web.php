<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\WebsiteController;



//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/product',[WebsiteController::class,'product'])->name('product');

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified',
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});
