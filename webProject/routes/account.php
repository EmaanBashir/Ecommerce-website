<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AccountController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/account/accountHistory', function () {
    return view('account.accountHistory', ['orders'=>Auth::user()->events, 'eventHistory' => true, 'giftHistory' => false]);
})->middleware(['auth'])->name('accountHistory');

Route::get('/account/{event_id}', function (Request $request) {
    return view('account.account', ['event_id' => $request->event_id]);
})->middleware(['auth'])->name('account');

Route::get('/account', function (Request $request) {
    return view('account.account', ['event_id' => null]);
})->middleware(['auth'])->name('account');

Route::post('/account/{event_id}/{step}', [AccountController::class, 'store'])->middleware(['auth']);


