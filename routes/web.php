<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', [HomeController::class, 'root'])->name('root');
Route::get('/home', [HomeController::class, 'root'])->name('home');

Route::post('/time-close', [HomeController::class, 'timeClose'])->name('timeclose');


//Update User Details
Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');


//add product
Route::get('/add-product', [ProductController::class, 'addProduct'])->name('addproduct');
Route::post('/add-product', [ProductController::class, 'addProduct'])->name('addproduct');

Route::post('/add-product-db', [ProductController::class, 'addProductDB'])->name('addproductdb');
Route::post('/ajax-add-product', [ProductController::class, 'ajaxAddProduct'])->name('ajaxaddproduct');

Route::get('/my-shop', [ProductController::class, 'myShop'])->name('myshop');

Route::get('change/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return Redirect::back();
});


//hidefacetalk.com---------------------------------------------------------------------------------------



Route::get('/hidefacetalk', [HomeController::class, 'hidefacetalk'])->name('hidefacetalk');


Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');



