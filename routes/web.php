<?php

use App\Http\Controllers\admin\categorycontroller;
use App\Models\admin;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\maincontroller;
use App\Http\Controllers\front\homecontroller;
use App\Http\Controllers\front\shopcontroller;
use App\Http\Controllers\front\refundcontroller;
use App\Http\Controllers\admin\productcontroller;
use App\Http\Controllers\front\aboutuscontroller;
use App\Http\Controllers\front\privacycontroller;
use App\Http\Controllers\front\branchescontroller;
use App\Http\Controllers\front\contactuscontroller;
use App\Http\Controllers\front\favouritescontroller;
use App\Http\Controllers\front\trackordercontroller;
use App\Http\Controllers\authentication\authcontroller;
use App\Http\Controllers\front\cartcontroller;
use App\Http\Controllers\HomeController as ControllersHomeController;

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
// route::middleware('auth:admin')->group(function () {
//     Route::get('/admin/home', [maincontroller::class, 'index'])->name('home.index')->middleware('auth:admin');
//     // route::get('/products', [authcontroller::class, 'login'])->name('products.index');

// });
route::middleware('auth')->group(function () {
    Route::get('/web/home', [homecontroller::class, 'index'])->name('home');
    route::get('/favourites', [favouritescontroller::class, 'index'])->name('favourite');
    route::get('/trackorder', [trackordercontroller::class, 'index'])->name('trackorder')->middleware('auth');
    route::get('/refund_policy', [refundcontroller::class, 'index'])->name('refund');
    route::get('/privacy_policy', [privacycontroller::class, 'index'])->name('privacy');
    route::get('/contactus', [contactuscontroller::class, 'index'])->name('contactus');
    route::get('/aboutus', [aboutuscontroller::class, 'index'])->name('aboutus');
    route::get('/branch', [branchescontroller::class, 'index'])->name('branches');
    route::get('/shop', [shopcontroller::class, 'index'])->name('shop')->middleware('auth:admin');
    route::get('/shop/singleproduct', [shopcontroller::class, 'show'])->name('shop.show');
});

Route::get('/web/home', [homecontroller::class, 'index'])->name('home');
route::get('/favourites', [favouritescontroller::class, 'index'])->name('favourite');
route::get('/login', [authcontroller::class, 'login'])->name('login')->middleware('guest');
route::post('/login/submit', [authcontroller::class, 'loginlogic'])->name('loginsubmit');
route::get('/trackorder', [trackordercontroller::class, 'index'])->name('trackorder')->middleware('auth');
route::get('/refund_policy', [refundcontroller::class, 'index'])->name('refund');
route::get('/privacy_policy', [privacycontroller::class, 'index'])->name('privacy');
route::get('/contactus', [contactuscontroller::class, 'index'])->name('contactus');
route::get('/aboutus', [aboutuscontroller::class, 'index'])->name('aboutus');
route::get('/branch', [branchescontroller::class, 'index'])->name('branches');
route::get('/shop', [shopcontroller::class, 'index'])->name('shop')->middleware('auth:admin');
route::get('/shop/singleproduct/{id}', [shopcontroller::class, 'show'])->name('shop.show');
route::post('/cart/{id}', [cartcontroller::class, 'index'])->name('cart');
// Route::get('/admin/home', [maincontroller::class, 'index'])->name('home.index')->middleware('auth:admin');
Route::get('/admin/home', [maincontroller::class, 'index'])->name('home.index')->middleware('auth:admin');
// route::get('/productsss', [authcontroller::class, 'login'])->name('products.index')->middleware('admin');




Route::get('/productsss', [ProductController::class, 'index'])
    ->name('products.index');
// Route::get('/api/products', [ProductController::class, 'getall'])
//     ->name('products.api');
Route::get('/products/create', [ProductController::class, 'create'])
    ->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])
    ->name('products.store');
Route::get('/category', [categorycontroller::class, 'index'])
    ->name('category.index');
Route::get('/category/create', [categorycontroller::class, 'create'])
    ->name('category.create');
Route::post('/category/store', [categorycontroller::class, 'store'])
    ->name('category.store');





















Route::post('/logout', [authcontroller::class, 'logout'])->name('logout');
Route::post('/logout/admin', [authcontroller::class, 'logout_admin'])->name('logout.admin');
// Route::get('/profile', function(){
//     // $guards=array_slice(config('auth.guards'),0,-1);
//     // dd($guards);


// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
