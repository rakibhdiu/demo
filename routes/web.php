<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/product-detail',[HomeController::class,'productdetail'])->name('productdetail');

Route::get('/add-to-cart',[HomeController::class,'addToCart'])->name('addtocart');
Route::get('/wishlist',[HomeController::class,'wishlist'])->name('wishlist');

Route::get('/order',[HomeController::class,'order'])->name('order');
Route::get('/deliver-info',[HomeController::class,'deliverinfo'])->name('deliverinfo');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin-dashboard',[AdminController::class,'admin_index'])->name('dashboard');
Route::get('/category',[AdminController::class,'category'])->name('category');
Route::get('/add-category',[AdminController::class,'addCategory'])->name('addcategory');
Route::post('/category-store',[AdminController::class,'categoryStore'])->name('category.store');
Route::get('/delete-category/{id}',[AdminController::class,'categoryDelete'])->name('categorydelete');
Route::get('product',[AdminController::class,'product'])->name('product');
Route::get('add-product',[AdminController::class,'addProduct'])->name('addproduct');


