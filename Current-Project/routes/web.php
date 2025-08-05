<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\checkoutcontroller;
use App\Http\Controllers\PassResetController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\MustLogin;

Route::get('/',[HomeController::class,'index']);


//Login and Register Form
Route::get('/login',[UserController::class,'login'])->name('login');
Route::get('/register',[UserController::class,'register']);


// Authenticate User

Route::post('/register/authenticate',[UserController::class,'reg_user']);
Route::post('/authenticate',[UserController::class,'authenticateUser']);

Route::get('/admin/products',[AdminController::class,'index']);

// Forget-password handling

Route::get('/forget-password', [PassResetController::class, 'email_confirm'])->name('password.request');
Route::post('/forget-password', [PassResetController::class, 'reset'])->name('password.email');
Route::post('/reset-password', [PassResetController::class, 'update'])->name('password.update');



// Product Details
Route::get('/productDetail/{id}', [HomeController::class, 'product_detail'])->middleware(MustLogin::class);


//checkout

Route::get('/checkout',[checkoutcontroller::class,'checkout'])->middleware(MustLogin::class);

// Logout User

Route::get('/logout/{id}',[UserController::class,'logout'])->middleware(MustLogin::class);