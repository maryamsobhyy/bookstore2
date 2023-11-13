<?php

use App\Http\Controllers\API\authcontroller;
use App\Http\Controllers\Api\productcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// routes in api.route is prefix by api by default
Route::get('/products', [productcontroller::class, 'index'])
    ->name('products.api');
Route::post('/products', [productcontroller::class, 'store'])
    ->name('store.api');
Route::delete('/products/{id}', [productcontroller::class, 'destroy'])
    ->name('distroy.api');
Route::post('/login', [authcontroller::class, 'login'])
    ->name('login.api');
