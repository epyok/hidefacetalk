<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\PostController;
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

Route::get('/checktracking', [HomeController::class, 'checkTracking'])->name('checktracking');



//เปลี่ยนภาษา
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

//เพิ่มโพสต์
Route::post('/create-post', [PostController::class, 'createPost'])->name('createpost');

Route::post('/apitest', [ApiController::class, 'apiPost']);
