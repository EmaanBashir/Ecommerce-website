<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CheckoutController;

Route::get('/checkout/{event_id}', [CheckoutController::class, 'create'])->middleware(['auth'])->name('checkout');



