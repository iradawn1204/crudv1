<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|z
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});





route::get('/','App\Http\Controllers\ConsumerController@index')->middleware('auth')->name('consumer.index');


Route::middleware('auth')->group(function(){

});
Route::get('edit-consumer/{id}', [ConsumerController::class, 'edit']);
Route::patch('update-consumer/{id}', [ConsumerController::class, 'update']);

Route::get('create-consumer/', [ConsumerController::class, 'create']);
Route::patch('store-consumer/', [ConsumerController::class, 'store']);

Route::delete('consumer{id} ',[ConsumerController::class, 'destroy'])->name('consumer.destroy');




Route::middleware('auth')->group(function(){
});
Route::get('/products', [ProductController::class, 'index']);

Route::get('create-product/', [ProductController::class, 'create']);
Route::patch('store-product/', [ProductController::class, 'store']);

Route::get('edit-product/{id}', [ProductController::class, 'edit']);
Route::patch('/update-product/{id}', [ProductController::class   , 'update']);

Route::delete('product{id} ',[ProductController::class, 'destroy'])->name('product.destroy');


Route::middleware('auth')->group(function(){
});

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [UserController::class, 'register']);

Route::post('/login/process', [UserController::class, 'process']);
Route::post('/store', [UserController::class, 'store']);


Route::get('/logout', [UserController::class, 'logout']);



