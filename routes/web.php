<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//Registration

Route::view('user','User.userRegistration');
Route::post('userRegistration',[UserController::class,'userRegistration']);

//login
Route::view('login','User.userLogin');
Route::post('userLogin',[UserController::class,'userLogin']);

//add product
Route::view('add','Product.addProduct');
Route::post('addProduct',[UserController::class,'addProduct']);

//list
Route::get('dataList',[UserController::class,'dataList']);

Route::view('displayProduct','Product.displayProduct');

//delete product

Route::get('deleteProduct/{id}',[UserController::class,'deleteProduct']);