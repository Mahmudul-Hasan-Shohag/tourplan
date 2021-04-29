<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\PlannerController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductsController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SpotController;
use App\Http\Controllers\Backend\AdminController;
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


//Frontend
Route::get('/',[HomeController::class,'website'])->name('homepage');

//User login registration
Route::get('/user/registration',[UserController::class,'userregistration'])->name('user.registration');
Route::post('/user/create/registration',[UserController::class,'createregistration'])->name('create.registration');
Route::get('/user/login',[UserController::class,'userlogin'])->name('user.login');
Route::post('/user/dologin',[UserController::class,'dologin'])->name('do-Login');
Route::get('/user/logout',[UserController::class,'userlogout'])->name('user.logout');
//Planner login registration
Route::get('/planner/registration',[PlannerController::class,'plannerregistration'])->name('planner.registration');
Route::get('/planner/login',[PlannerController::class,'plannerlogin'])->name('planner.login');


//Backend
//Admin Login
Route::get('/adminlogin',[AdminController::class,'adminlogin'])->name('admin.login');
Route::post('/postadminlogin',[AdminController::class,'postadminlogin'])->name('post.adminlogin');
Route::get('/adminlogout',[AdminController::class,'adminlogout'])->name('admin.logout');


Route::group(['prefix'=>'admin'],function(){

Route::group(['middleware'=>'admin'],function(){

//Dashboard
 Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

//Prducts
Route::get('/products/view',[ProductsController::class,'productview'])->name('product.view');
Route::get('/products/form',[ProductsController::class,'productform'])->name('product.form');
Route::post('/products/create',[ProductsController::class,'productcreate'])->name('product.create');
Route::get('products/under/categories{id}',[ProductsController::class,'productcategories'])->name('product.categories');
//Category
Route::get('/category/view',[CategoryController::class,'categoryview'])->name('category.view');
Route::get('/category/form',[CategoryController::class,'categoryform'])->name('category.form');
Route::post('/category/create',[CategoryController::class,'categorycreate'])->name('category.create');
//Spot
Route::get('/viewspot',[SpotController::class,'viewspot'])->name('spot.view');
Route::get('/spotform',[SpotController::class,'spotform'])->name('spot.form');
Route::post('/createspot',[SpotController::class,'createspot'])->name('spot.create');
Route::get('/spotdetails/{id}',[SpotController::class,'spotdetails'])->name('spot.details');

//Users list view
 Route::get('/users/list',[UserController::class,'userslist'])->name('users.list');
    });

});

