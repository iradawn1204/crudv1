<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ConsumerController;
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

Route::get('edit-consumer/{id}', [ConsumerController::class, 'edit']);
Route::patch('update-consumer/{id}', [ConsumerController::class, 'update']);

Route::delete('consumer{id} ',[ConsumerController::class, 'destroy'])->name('consumer.destroy');


Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [UserController::class, 'register']);

Route::post('/login/process', [UserController::class, 'process']);
Route::post('/store', [UserController::class, 'store']);


Route::get('/logout', [UserController::class, 'logout']);

