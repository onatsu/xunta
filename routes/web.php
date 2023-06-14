<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'showTest']);


Route::get('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/product/{product}/comment', [ProductController::class, 'makeComment'])->name('product.makeComment');
Route::post('/product/{product}/comment', [ProductController::class, 'comment'])->name('product.comment');

Route::resource('/category', CategoryController::class);
Route::resource('/tag', TagController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('/product', ProductController::class)->except('destroy');
});
