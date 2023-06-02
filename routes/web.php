<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LendingController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HeaderController;


Route::get('/', [LendingController::class, 'index'])->name('lending');

Route::get('/phones', [CatalogController::class, 'phones'])->name('phones');

Route::get('/phones/{id}', [ProductController::class, 'show'])->name('show');

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/cart', [CartController::class, 'show'])->name('cart.show');

Route::get('/cart/order', [OrderController::class, 'show'])->name('order.show');

Route::post('/cart/order/make_order', [OrderController::class, 'store'])->name('order.store');

Route::post('/cart/order/remove', [CartController::class, 'remove'])->name('order.remove');

Route::get('/cart/order/clear', [OrderController::class, 'clear'])->name('clear');

Route::get('/cart/order/make_order/success', [OrderController::class, 'success'])->name('order_success');

Route::get('/cart/order/quick-buy/success', [OrderController::class, 'success'])->name('quick_success');

Route::get('/cart/order/quick-buy', [OrderController::class, 'quickBuy'])->name('quick_buy');

Route::post('/cart/order/quick-buy', [OrderController::class, 'quickStore'])->name('quick_store');

Route::get('/about_us', [HeaderController::class, 'about_us'])->name('about_us');

Route::get('/contacts', [HeaderController::class, 'contacts'])->name('contacts');

Route::get('/payment_and_delivery', [HeaderController::class, 'payment_and_delivery'])->name('payment_and_delivery');
