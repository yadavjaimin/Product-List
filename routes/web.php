<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::view('user','User.userRegistration');
Route::post('userRegistration',[UserController::class,'userRegistration']);

Route::view('login','User.userLogin');
Route::post('userLogin',[UserController::class,'userLogin']);

//add product
Route::view('add','Product.addProduct');
Route::post('addProduct',[UserController::class,'addProduct']);

Route::get('dataList',[UserController::class,'dataList']);

 Route::view('display','displayProduct');