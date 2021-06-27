<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\FrontProductListController@index');
Route::get('/product/{id}', 'App\Http\Controllers\FrontProductListController@show')->name('product.view');
Route::get('subcatories/{id}', 'App\Http\Controllers\ProductController@loadSubCategories');
Route::get('/category/{name}', 'App\Http\Controllers\FrontProductListController@allProduct')->name('product.list');
Route::get('/addToCart/{product}', 'App\Http\Controllers\CartController@addToCart')->name('add.cart');

// Route::get('/cart', 'App\Http\Controllers\CartController@showCart')->name('cart.show');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'showCart'])->name('cart.show');
Route::get('/checkout/{amount}', 'App\Http\Controllers\CartController@checkout')->name('cart.checkout')->middleware('auth');
Route::get('/orders', 'App\Http\Controllers\CartController@order')->name('order')->middleware('auth');

Route::post('/charge', 'App\Http\Controllers\CartController@charge')->name('cart.charge');

Route::post('/products/{product}', 'App\Http\Controllers\CartController@updateCart')->name('cart.update');
Route::post('/product/{product}', 'App\Http\Controllers\CartController@removeCart')->name('cart.remove');

Route::post('/product', 'App\Http\Controllers\CartController@CleanCart')->name('cart.clean');

Auth::routes();


Route::get('all/products','App\Http\Controllers\FrontProductListController@moreProducts')->name('more.product');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(
    ['prefix' => 'auth', 'middleware' => ['auth', 'isAdmin']],
    function () {
        
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        });

        Route::resource('category', 'App\Http\Controllers\CategoryController');
        Route::resource('subcategory', 'App\Http\Controllers\SubcategoryController');
        Route::resource('product', 'App\Http\Controllers\ProductController');

        Route::get('slider/create', 'App\Http\Controllers\SliderController@create')->name('slider.create');
        Route::get('slider', 'App\Http\Controllers\SliderController@index')->name('slider.index');
        Route::post('slider', 'App\Http\Controllers\SliderController@store')->name('slider.store');
        Route::delete('slider/{id}', 'App\Http\Controllers\SliderController@destroy')->name('slider.destroy');

        Route::get('users','UserController@index')->name('user.index');

        //orders
        Route::get('/orders','CartController@userOrder')->name('order.index');
        Route::get('/orders/{userid}/{orderid}','CartController@viewUserOrder')->name('user.order');

    }
);
