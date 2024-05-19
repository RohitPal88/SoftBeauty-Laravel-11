<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::Get('/' , [HomeController::class , 'index'])->name('home');
Route::Get('cart' , [HomeController::class , 'cart'])->name('cart');
Route::Get('checkout' , [HomeController::class , 'checkout'])->name('checkout');
Route::Get('contact' , [HomeController::class , 'contact'])->name('contact');
Route::Get('shop' , [HomeController::class , 'shop'])->name('shop');
Route::Get('shop-details' , [HomeController::class , 'shopDetails'])->name('shop-details');
