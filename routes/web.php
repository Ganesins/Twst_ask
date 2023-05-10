<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlfyController;
use App\Http\Controllers\JaipurController;


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
// })
Route::get('index',[AlfyController::class,'index']);

Route::post('store',[AlfyController::class,'store']);
Route::get('list',[AlfyController::class,'list']);
Route::get('delete/{id}',[AlfyController::class,'delete']);
Route::get('edit/{id}',[AlfyController::class,'edit']);
Route::post('update/{id}',[AlfyController::class,'update']);

Route::get('login',[AlfyController::class,'login']);

Route::get('/',[AlfyController::class,'jaiindex']);
Route::post('store',[AlfyController::class,'create']);
Route::get('jai',[AlfyController::class,'jai']);
Route::get('list1',[AlfyController::class,'jai']);









