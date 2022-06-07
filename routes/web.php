<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProductsController;

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

Route::get('/products',         [ProductsController::class, 'index']);
Route::get('/products/create',  [ProductsController::class, 'create']);
Route::get('/products/{id}',    [ProductsController::class, 'show']);
Route::post('/products',        [ProductsController::class, 'store']);
Route::get('/test',             [TestController::class, 'index']);









Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

