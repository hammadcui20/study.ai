<?php

use Illuminate\Support\Facades\Route;

// use App\Facades\Auth;
use App\Http\Controllers\Admin\frontendController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\frontend\FrontController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\frontend\contactComplains;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\support\Facades\Mail;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChartJSController;
use App\Mail\WelcomeMail;
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
//Routes for 2FA


Route::get('/', [FrontController::class ,  'mainpage']);
Route::get('/category',[FrontController::class ,  'category']);
Route::get('view-category/{slug}',[FrontController::class ,  'viewCategory']);
Route::get('view-productsan',[FrontController::class ,  'allSanitary']);
Route::get('view-productselec',[FrontController::class ,  'allElec']);
Route::get('view-productshar',[FrontController::class ,  'allHardware']);
Route::get('view-category/{cate_slug}/{prod_slug}',[FrontController::class ,  'productView']);
Route::get('view-product/{prod_slug}',[FrontController::class ,  'eachProdView']);

Auth::routes(['verify' => true]);

Route::get('/email', function(){
    Mail::to('email@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();
});


Route::post('add-to-cart',[CartController::class,'addProduct']);
Route::post('delete-cart-item',[CartController::class,'deleteProduct']);
Route::post('update-cart',[CartController::class,'updateCart']);
Route::post('searchProduct',[FrontController::class , 'searchProducts']);

Route::get('contact',[contactComplains::class ,  'index']);
Route::post('sendMessage',[contactComplains::class ,  'submitForm']);
Route::view('about' , 'frontend.About');
Route::view('plumber' , 'frontend.plumber');
Route::view('electrician' , 'frontend.electrician');
Route::view('hardware' , 'frontend.hardware');




Route::middleware(['auth' ])->group(function () {
    Route::get('cart',[CartController::class , 'viewCart']);
    Route::get('checkout', [CheckoutController::class , 'index']);
    Route::post('place-order',[CheckoutController::class , 'placeOrder']);
    Route::get('my-order',[UserController::class , 'index']);
    Route::get('view-order/{id}',[UserController::class , 'viewOrder']);
});



// Admin DashBoard Routes
// Route::middleware(['auth','isAdmin'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('Admin.dashboard');
//      });
//     //  Route::get('/dashboard', [ChartJSController::class, 'index'])->name('chart');
//     // Route::get('chart', [ChartJSController::class, 'index']);
// });

// Tailor Routes
// Route::middleware(['auth'])->group(function () {
//     Route::get('/tdash','App\Http\Controllers\Admin\frontendController@tailorindex');
//     Route::get('/tdash', [ChartJSController::class, 'tailor'])->name('chart');

//     Route::get('/products','App\Http\Controllers\Admin\ProductController@indext');
//     Route::get('/addproduct','App\Http\Controllers\Admin\ProductController@addt');
//     Route::post('insertproduct' , 'App\Http\Controllers\Admin\ProductController@insertt');

//     Route::get('edit-product/{id}',[ProductController::class, 'editt']);
//     Route::put('update-product/{id}',[ProductController::class , 'update']);
//     Route::get('delete-product/{id}',[ProductController::class , 'delete']);


//     Route::get('orders',[OrderController::class, 'indext']);
//     Route::get('admin/view-order/{id}',[OrderController::class, 'viewt']);
//     Route::put('update-order/{id}',[OrderController::class , 'updateOrdert']);
//     Route::get('order-history',[OrderController::class , 'orderHistoryt']);
// });

// Tailor Routes
Route::get('/tdash','App\Http\Controllers\Admin\frontendController@tailorindex');
Route::get('/tdash', [ChartJSController::class, 'tailor'])->name('chart2');

Route::get('/productss','App\Http\Controllers\Admin\ProductController@indext');
Route::get('/addproduct','App\Http\Controllers\Admin\ProductController@addt');
Route::post('insertproduct' , 'App\Http\Controllers\Admin\ProductController@insert');

Route::get('edit-product/{id}',[ProductController::class, 'editt']);
Route::put('update-product/{id}',[ProductController::class , 'update']);
Route::get('delete-product/{id}',[ProductController::class , 'delete']);


Route::get('orderss',[OrderController::class, 'indext']);
Route::get('orderss2',[OrderController::class, 'indext2']);
Route::get('orderss3',[OrderController::class, 'indext3']);
Route::get('orderss4',[OrderController::class, 'indext4']);
Route::get('orderss5',[OrderController::class, 'indext5']);
Route::get('view-orders/{id}',[OrderController::class, 'viewt']);
Route::put('update-orders/{id}',[OrderController::class , 'updateOrdert']);
Route::get('order-historys',[OrderController::class , 'orderHistoryt']);







// Till this
// Route::middleware(['isAdmin'])->group(function () {
//     Route::get('/dashboard','App\Http\Controllers\Admin\frontendController@index');
//     Route::get('/dashboard', [ChartJSController::class, 'index'])->name('chart');

//     // Categories Routes

//     Route::get('/categories','App\Http\Controllers\Admin\CategoriesController@index');
//     Route::get('/add-category','App\Http\Controllers\Admin\CategoriesController@add');
//     Route::post('insert-category' , 'App\Http\Controllers\Admin\CategoriesController@insert');
//     Route::get('edit-category/{id}',[CategoriesController::class , 'edit']);
//     Route::put('update-category/{id}',[CategoriesController::class , 'update']);
//     Route::get('delete-category/{id}',[CategoriesController::class , 'delete']);


//     // Product Routes
//     Route::get('/products','App\Http\Controllers\Admin\ProductController@index');
//     Route::get('/add-product','App\Http\Controllers\Admin\ProductController@add');
//     Route::post('insert-product' , 'App\Http\Controllers\Admin\ProductController@insert');
//     Route::get('edit-product/{id}',[ProductController::class, 'edit']);
//     Route::put('update-product/{id}',[ProductController::class , 'update']);
//     Route::get('delete-product/{id}',[ProductController::class , 'delete']);
//     Route::put('update-order/{id}',[UserController::class , 'updateOrder']);


//     Route::get('orders',[OrderController::class, 'index']);
//     Route::get('admin/view-order/{id}',[OrderController::class, 'view']);
//     Route::put('update-order/{id}',[OrderController::class , 'updateOrder']);
//     Route::get('order-history',[OrderController::class , 'orderHistory']);

//     Route::get('users',[DashboardController::class, 'users']);
//     Route::get('view-user/{id}',[DashboardController::class, 'viewUser']);

//     Route::get('message',[contactComplains::class, 'viewcomplains']);


// });

//  Admin ROutes
Route::get('/dashboard','App\Http\Controllers\Admin\frontendController@index');
Route::get('/dashboard', [ChartJSController::class, 'index'])->name('chart');

// Categories Routes

Route::get('/categories','App\Http\Controllers\Admin\CategoriesController@index');
Route::get('/add-category','App\Http\Controllers\Admin\CategoriesController@add');
Route::post('insert-category' , 'App\Http\Controllers\Admin\CategoriesController@insert');
Route::get('edit-category/{id}',[CategoriesController::class , 'edit']);
Route::put('update-category/{id}',[CategoriesController::class , 'update']);
Route::get('delete-category/{id}',[CategoriesController::class , 'delete']);


// Product Routes
Route::get('/products','App\Http\Controllers\Admin\ProductController@index');
// Route::get('/add-product','App\Http\Controllers\Admin\ProductController@add');
// Route::post('insert-product' , 'App\Http\Controllers\Admin\ProductController@insert');
// Route::get('edit-product/{id}',[ProductController::class, 'edit']);
// Route::put('update-product/{id}',[ProductController::class , 'update']);
// Route::get('delete-product/{id}',[ProductController::class , 'delete']);
// Route::put('update-order/{id}',[UserController::class , 'updateOrder']);


Route::get('orders',[OrderController::class, 'index']);
Route::get('admin/view-order/{id}',[OrderController::class, 'view']);
Route::put('update-order/{id}',[OrderController::class , 'updateOrder']);
Route::get('order-history',[OrderController::class , 'orderHistory']);

Route::get('users',[DashboardController::class, 'users']);
Route::get('view-user/{id}',[DashboardController::class, 'viewUser']);

Route::get('message',[contactComplains::class, 'viewcomplains']);

// For PDF 
Route::get('/generate-pdf', [OrderController::class, 'tailorgeneratePdf'])->name('generate.pdf');

Route::get('/generateall-pdf', [OrderController::class, 'createPDF']);

Route::get('/generateprev-pdf', [OrderController::class, 'prevorderPDF']);
