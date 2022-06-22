<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductAddController;
use App\Http\Controllers\ProductController;
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

#Home
Route::get('/', [HomeController::class, 'index'])->name('home');

#Show all Products
Route::get('/products', [ProductController::class, 'index'])->name('products');

#Add New product
Auth::routes();

Route::get('/product/add/product', [ProductAddController::class, 'index'])->name('productAdd')->middleware('auth');
Route::post('/product/add/product', [ProductAddController::class, 'add'])->middleware('auth');

#Update product
Route::get('/product/update/product', [ProductAddController::class, 'productUpdatePage'])->name('updateProduct')->middleware('auth');
Route::post('/product/update/product', [ProductAddController::class, 'productUpdate'])->middleware('auth');

#Update News
Route::get('/product/update/news', [ProductAddController::class, 'newsUpdatePage'])->name('updateNews')->middleware('auth');
Route::post('/product/update/news', [ProductAddController::class, 'newsUpdate'])->middleware('auth');

#Add New news
Auth::routes();

Route::get('/product/add/news', [ProductAddController::class, 'newsPage'])->name('newsAdd')->middleware('auth');
Route::post('/product/add/news', [ProductAddController::class, 'newsAdd'])->middleware('auth');

#Remove Existing Products
Route::get('/product/delete', [ProductAddController::class, 'deletePage'])->name('productDelete')->middleware('auth');
Route::post('/product/delete', [ProductAddController::class, 'delete'])->middleware('auth');

#Remove Existing News
Route::get('/product/delete/news', [ProductAddController::class, 'deleteNewsPage'])->name('newsDelete')->middleware('auth');
Route::post('/product/delete/news', [ProductAddController::class, 'deleteNews'])->middleware('auth');

#show Products by id
Route::get('products/{id}', [ProductController::class, 'singleProduct'])->name('singleProduct');

#show News by id
Route::get('news/{id}', [ProductController::class, 'singleNews'])->name('singleNews');

#Adminpanel
Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');
