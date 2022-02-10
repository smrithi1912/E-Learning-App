<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HelperTestController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/xmlTest', function () {
    return view('xmlTest');
});


Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("/detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']); 
Route::get("removecart/{id}",[ProductController::class,'removeCart']); 
Route::get("ordernow",[ProductController::class,'orderNow']); 
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
Route::post("add_rating",[ProductController::class,'myRatings']);
Route::get("/category",[ProductController::class,'category']);

Route::get('/sample', function () { //password strength
    return view('sample');
});

Route::get("/admin",[AdminController::class,'admin']);

Route::get("/add_new_products",[AdminController::class,'addProduct']);

// Route::get('/add_new_products', function () {
//     return view('add_new_products');
// });


Route::get("test-helper",[HelperTestController::class,'checkHelper']);