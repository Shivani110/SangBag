<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login',[UserController::class,'login']);
Route::get('/applynow',[UserController::class,'register']);
Route::post('/register',[UserController::class,'applynow']);
Route::get('/logout',[UserController::class,'logout']);

Route::middleware(['Auth'=>'admin'])->group(function () {
    Route::get('/index',[AdminController::class,'index']);
    Route::get('/productcategory',[AdminController::class,'category']);
    Route::post('/createcategory',[AdminController::class,'createcategory']);
    Route::post('/deletecategory',[AdminController::class,'deleteCategory']);
    Route::get('/productstyles',[AdminController::class,'styles']);
    Route::post('/createstyles',[AdminController::class,'createstyles']);
    Route::post('/deletestyles',[AdminController::class,'deletestyles']);
    Route::get('/productbrand',[AdminController::class,'brand']);
    Route::post('/createbrand',[AdminController::class,'createbrand']);
    Route::post('/deletebrand',[AdminController::class,'deletebrands']);
    Route::get('/product',[AdminController::class,'product']);
    Route::post('/createproduct',[AdminController::class,'createproduct']);
    Route::get('/allproducts',[AdminController::class,'allproducts']);
    Route::get('/product/{slug}',[AdminController::class,'editproduct']);
    Route::post('/updateproduct',[AdminController::class,'updateproduct']);
    Route::post('/deleteproduct',[AdminController::class,'deleteProduct']);
});