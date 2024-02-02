<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;


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

Route::get('/admin-login',[FrontController::class,'adminlogin']);
Route::get('/',[FrontController::class,'index']);
Route::get('/login',[FrontController::class,'login']);
Route::get('/applynow',[FrontController::class,'applynow']);
Route::get('/contact_us',[FrontController::class,'contactus']);
Route::get('/blog_details',[FrontController::class,'blogdetails']);
Route::get('/blogs',[FrontController::class,'blogs']);
Route::get('/thankyou',[FrontController::class,'thankyou']);
Route::get('/snag-member',[FrontController::class,'snagmember']);
Route::get('/privacy-policy',[FrontController::class,'privacypolicy']);
Route::get('/productpage',[FrontController::class,'products']);

Route::post('/signin',[UserController::class,'adminsignin']);
Route::get('/logout',[UserController::class,'logout']);

Route::middleware(['Auth'=>'admin'])->group(function () {
    Route::get('/adminindex',[AdminController::class,'index']);
    Route::get('/productcategory',[AdminController::class,'category']);
    Route::post('/createcategory',[AdminController::class,'createcategory']);
    Route::post('/deletecategory',[AdminController::class,'deleteCategory']);
    Route::get('/productstyles',[AdminController::class,'styles']);
    Route::post('/createstyles',[AdminController::class,'createstyles']);
    Route::post('/deletestyles',[AdminController::class,'deletestyles']);
    Route::get('/productbrand',[AdminController::class,'brand']);
    Route::post('/createbrand',[AdminController::class,'createbrand']);
    Route::post('/deletebrand',[AdminController::class,'deletebrands']);
    Route::get('/productcolor',[AdminController::class,'color']);
    Route::post('/createcolor',[AdminController::class,'createcolor']);
    Route::post('/deletecolor',[AdminController::class,'deletecolor']);
    Route::get('/productmaterial',[AdminController::class,'material']);
    Route::post('/creatematerial',[AdminController::class,'creatematerial']);
    Route::post('/deletematerial',[AdminController::class,'deletematerial']);
    Route::get('/product',[AdminController::class,'product']);
    Route::post('/createproduct',[AdminController::class,'createproduct']);
    Route::get('/allproducts',[AdminController::class,'allproducts']);
    Route::get('/product/{slug}',[AdminController::class,'editproduct']);
    Route::post('/updateproduct',[AdminController::class,'updateproduct']);
    Route::post('/deleteproduct',[AdminController::class,'deleteProduct']);
    Route::post('/deleteimage',[AdminController::class,'deletegalleryImage']);
});