<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\EventsController;

Route::get('/steps', function () {
    return view('steps.steps');
})->middleware(['auth'])->name('steps');

Route::get('/steps/1', function () {
    return view('steps.step1');
})->middleware(['auth'])->name('step1');

Route::get('/steps/2', function () {
    return view('steps.step2');
})->middleware(['auth'])->name('step2');

Route::get('/steps/3', function () {
    return view('steps.step3');
})->middleware(['auth'])->name('step3');

Route::post('/steps/4/{type}', [EventsController::class, 'store'])->middleware(['auth'])->name('step4');
