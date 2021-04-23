<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
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
Route::get('/',[HomeController::class,'website']);



//Backend
//Admin Login
Route::get('/adminlogin',[AdminController::class,'adminlogin'])->name('admin.login');
Route::post('/postadminlogin',[AdminController::class,'postadminlogin'])->name('post.adminlogin');
Route::get('/adminlogout',[AdminController::class,'adminlogout'])->name('admin.logout');
// // Route::get('/', function () {
// //     return view('backend.login');

// });
Route::group(['prefix'=>'admin'],function(){

    Route::group(['middleware'=>'auth'],function(){

        //Dashboard
        Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    });

});

