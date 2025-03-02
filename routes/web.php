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






// <?php

// use App\Http\Controllers\UserController;
// use Illuminate\Support\Facades\Route;

// // Public routes
// Route::view('user', 'User.userRegistration');
// Route::post('userRegistration', [UserController::class, 'userRegistration']);

// Route::view('login', 'User.userLogin')->name('login');
// Route::post('userLogin', [UserController::class, 'userLogin']);

// Route::middleware(['auth.check'])->group(function () {
//     Route::view('add', 'Product.addProduct');
//     Route::post('addProduct', [UserController::class, 'addProduct']);
//     Route::get('dataList', [UserController::class, 'dataList']);
//     Route::get('deleteProduct/{id}', [UserController::class, 'deleteProduct']);
// });





// //.........exampl practice.......
// Route::get('/name/{id}', function ($id) {
//     return view('name',['ids'=>$id]);
// })->where('id', '[0-9]+');