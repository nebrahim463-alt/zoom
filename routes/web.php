<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\CategoryController as ControllersCategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        

        

// Route::get('/', function () {
//     return view('welcome');
// })->name("welcome");

Route::get('/', [FrontController::class, 'welcome'])->name('welcome');

Route::get('/shop', function () {
    return view('frontend.shop');
})->name("shop");

Route::get('/product', function () {
    return view('frontend.product');
})->name("product");

Route::get('/cart', [FrontController::class, 'cartIndex'])->name('cart');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name("contact");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

// category
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware("CheckAdmin");

Route::get('/categories/show/{id}', [CategoryController::class, 'show'])->name('categories.show')->middleware("CheckAdmin");

Route::get('/categories/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete')->middleware("CheckAdmin");

Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create')->middleware("CheckAdmin");


Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store')->middleware("CheckAdmin");

Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit')->middleware("CheckAdmin");

Route::post('/categories/update', [CategoryController::class, 'update'])->name('categories.update')->middleware("CheckAdmin");



// user
Route::get('/user/show/{id}', [UserController::class, 'show'])->name('user.show')->middleware("CheckAdmin");

Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete')->middleware("CheckAdmin");

Route::get('/user/create', [UserController::class, 'create'])->name('user.create')->middleware("CheckAdmin");

Route::post('/user/store', [UserController::class, 'store'])->name('user.store')->middleware("CheckAdmin");

Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit')->middleware("CheckAdmin");

Route::post('/user/update', [UserController::class, 'update'])->name('user.update')->middleware("CheckAdmin");


//product
Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('product.show')->middleware("CheckAdmin");

Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete')->middleware("CheckAdmin");

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create')->middleware("CheckAdmin");

Route::post('/product/store', [ProductController::class, 'store'])->name('product.store')->middleware("CheckAdmin");

Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit')->middleware("CheckAdmin");

Route::post('/product/update', [ProductController::class, 'update'])->name('product.update')->middleware("CheckAdmin");


// front

Route::get('/shop', [FrontController::class, 'shop'])->name('shop');

Route::get('/product/details/{id}', [FrontController::class, 'productDetails'])->name('product.details');

Route::post('/cart/add', [FrontController::class, 'addToCart'])->middleware('auth')->name('cart.add');

Route::get('/cart/delete/{id}', [FrontController::class, 'removeFromCart'])->name('cart.delete');

Route::get('/products/search', [FrontController::class, 'searchProducts'])->name('product.search');




});