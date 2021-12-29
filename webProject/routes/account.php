<?php

use Illuminate\Support\Facades\Route;

Route::get('/account', function () {
    return view('account.account');
})->name('account');

Route::get('/accountHistory', function () {
    return view('account.accountHistory');
})->name('accountHistory');