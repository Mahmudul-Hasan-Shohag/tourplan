<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\PlannerController;
use App\Http\Controllers\Frontend\FrontendproductController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductsController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\TravellerController;
use App\Http\Controllers\Backend\SpotController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ReportController;
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
//Products
Route::get('/products',[FrontendproductController::class,'products'])->name('frontend.products');
Route::get('frontend/product/categories{id}',[FrontendproductController::class,'frontendproductcategories'])->name('frontend.product.categories');
Route::post('/products/search',[FrontendproductController::class,'productsearch'])->name('product.search');

//Cart
Route::get('/add-to-cart{id}',[OrderController::class,'addToCart'])->name('cart.add');
Route::get('/cart/view',[OrderController::class,'cartview'])->name('cart.view');
Route::get('remove/cart{rowId}',[ OrderController::class,'removecart'])->name('cart.remove');
Route::post('update/cart{rowId}',[ OrderController::class,'updatecart'])->name('cart.update');
Route::post('order/confirm',[ OrderController::class,'orderconfirm'])->name('order.confirm');

//Payment
Route::get('/payment/form',[PaymentController::class,'paymentform'])->name('payment.form');
Route::post('/payment/create',[PaymentController::class,'paymentcreate'])->name('payment.create');

//Planner spot
Route::get('/planner/spot',[PlannerController::class,'plannerspot'])->name('planner.spot');

Route::group(['prefix'=>'planner'],function(){
    Route::group(['middleware'=>'auth'],function(){
        Route::get('/planner/spot/form',[PlannerController::class,'plannerspotform'])->name('planner.spot.form');
        Route::post('/planner/spot/create',[PlannerController::class,'spotcreate'])->name('planner.spot.create');
        Route::get('/planner/spot/details{id}',[PlannerController::class,'spotdetails'])->name('planner.spot.details');
        Route::post('/planner/travellers/join',[PlannerController::class,'plannerTravellersjoin'])->name('planner.travellers.join');
        Route::get('/planner/travellers',[PlannerController::class,'plannerTravellers'])->name('planner.travellers');
        Route::post('/planner/travellers/search',[PlannerController::class,'travellersearch'])->name('traveller.search');
        Route::get('/spotdetails/{id}',[SpotController::class,'spotdetails'])->name('spot.details');
    }); 
});

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

//Travellers
Route::get('travellers/list',[TravellerController::class,'travellerlist'])->name('traveller.list');
Route::get('travellers/select/id{id}',[TravellerController::class,'selectid'])->name('select.id');
Route::get('travellers/planner',[TravellerController::class,'plannertraveller'])->name('traveller.planner');
//Spot
Route::get('/viewspot',[SpotController::class,'viewspot'])->name('spot.view');
Route::get('/spotform',[SpotController::class,'spotform'])->name('spot.form');
Route::post('/createspot',[SpotController::class,'createspot'])->name('spot.create');

Route::post('/joinspot',[SpotController::class,'joinspot'])->name('spot.join');
Route::get('/plannerspot',[SpotController::class,'plannerspot'])->name('spot.planner');
//Users list view
 Route::get('/users/list',[UserController::class,'userslist'])->name('users.list');
 //Orders
 Route::get('orders/show',[OrderController::class,'ordershow'])->name('order.show');
 Route::get('orders/view{id}',[OrderController::class,'orderview'])->name('order.view');
 Route::get('orders/details',[OrderController::class,'orderdetails'])->name('order.details');
 Route::get('orders/deliver{id}',[OrderController::class,'orderdeliver'])->name('order.deliver');
 //invoice
 Route::get('invoice{id}',[OrderController::class,'invoice'])->name('invoice');
 //Payment view
 Route::get('/payment/view',[PaymentController::class,'paymentview'])->name('payment.view');
 //Reports
Route::get('reports/orders',[ReportController::class,'orderreport'])->name('order.report');
Route::get('reports/spots',[ReportController::class,'spotreport'])->name('spot.report');
Route::get('reports/plannerspots',[ReportController::class,'plannerspotreport'])->name('planner.spot.report');
 
    });

});

