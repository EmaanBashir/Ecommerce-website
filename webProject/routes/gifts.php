
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GiftController;
use App\Models\Gift;

Route::get('/gifts', [GiftController::class, 'fetchAll'])->name('gifts');

Route::get('/gifts/category/{category}', [GiftController::class, 'fetch'])->name('giftsCategory');

Route::get('/gifts/cart', [GiftController::class, 'cart'])->middleware(['auth'])->name('giftCart');

Route::get('/gifts/cart/checkout', [GiftController::class, 'checkout'])->middleware(['auth'])->name('giftCartCheckout');

Route::get('/gifts/cart/payment', [GiftController::class, 'payment'])->middleware(['auth'])->name('giftCartPayment');

Route::post('/gifts/cart/{order_id}', [GiftController::class, 'removeFromCart'])->middleware(['auth'])->name('removeFromCart');

Route::get('/gifts/orderHistory', [GiftController::class, 'history'])->middleware(['auth'])->name('giftOrderHistory');

Route::post('/gifts/{gift_id}', [GiftController::class, 'store'])->middleware(['auth']);

Route::get('/gifts/{gift_id}', [GiftController::class, 'create'])->name('giftPage');

