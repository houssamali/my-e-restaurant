<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\FoodController;
use App\Http\Controllers\backend\OrderRquestController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\WelcomeController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\CategorController;
use App\Http\Controllers\frontend\RateController;
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
Route::group(
    ['prefix'=>LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect',
     'localeViewPath' ]],function(){
        
Route::get('/',function(){
    return redirect('login');
});

Route::get('/home',[WelcomeController::class,'welcome'])->name('home');
Route::get('/order-now/{id}',[WelcomeController::class,'order_Now']);
Route::get('/show-food_category/{id}',[CategorController::class,'showCategory']);
Route::post('/search',[WelcomeController::class,'Search']);


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth','isAdmin')->group(function(){
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin']);


    //category dashboard route categores

    Route::get('/show-category', [CategoryController::class,'show']);
    Route::get('/add-category', [CategoryController::class, 'Add']);
    Route::post('/submit-category', [CategoryController::class, 'submit']);
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
    Route::put('/update-category/{id}', [CategoryController::class, 'update']);
    Route::get('/delete-category/{id}', [CategoryController::class, 'delete']);


    //food dashboard route foods

    Route::get('/show-food', [FoodController::class,'show']);
    Route::get('/add-food', [FoodController::class,'add']);
    Route::post('/submit-food', [FoodController::class,'submit']);
    Route::get('/edit-food/{id}', [FoodController::class,'edit']);
    Route::put('/update-food/{id}', [FoodController::class,'update']);
    Route::get('/delete-food/{id}', [FoodController::class,'delete']);


    //dashboard order routes

    Route::get('/dashboard_order', [OrderRquestController::class,'show']);
    Route::get('/dashboard_vieworder/{id}', [OrderRquestController::class,'view']);
    Route::get('/dashboard_deleteorder/{id}', [OrderRquestController::class,'delete']);


//dashboard users routes
Route::get('/dashboard_user', [UserController::class,'show']);
Route::get('/dashboard_deleteuser/{id}', [UserController::class,'delete']);
Route::get('/dashboard_edituser/{id}', [UserController::class,'edit']);
Route::post('/dashboard_submituser/{id}', [UserController::class,'submit']);
Route::get('/dashboard_conformuser/{id}', [UserController::class,'conform']);
Route::get('/dashboard_removeuser/{id}', [UserController::class,'remove']);

});

Route::middleware('auth')->group(function(){
 Route::get('/add-cart/{id}',[CartController::class,'addcart']);
 Route::get('/show-cart',[CartController::class,'showcart']);
 Route::get('/delete-cart/{id}',[CartController::class,'deletecart']);



 Route::get('/checkout',[CheckoutController::class,'checkout']);
 Route::post('add-order',[CheckoutController::class,'add_order']);
 Route::get('show-order',[CheckoutController::class,'show_order']);
 Route::get('cancel_order/{id}',[CheckoutController::class,'Cancel']);
 Route::get('order_details/{id}',[CheckoutController::class,'order_details']);
 Route::get('print-pdf/{id}',[CheckoutController::class,'print_pdf']);


 Route::post('/add-rate/{id}',[RateController::class,'addRate']);

});




   
    Route::get('/home',[WelcomeController::class,'welcome'])->name('home');
});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/







//Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin')->middleware('isAdmin');
