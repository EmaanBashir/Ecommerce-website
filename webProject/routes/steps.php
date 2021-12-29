<?php

use Illuminate\Support\Facades\Route;


Route::get('/steps', function () {
    return view('steps.steps');
})->name('steps');

Route::get('/steps/1', function () {
    return view('steps.step1');
})->name('step1');

Route::get('/steps/2', function () {
    return view('steps.step2');
})->name('step2');

Route::get('/steps/3', function () {
    return view('steps.step3');
})->name('step3');

Route::post('/steps/4', function () {
    return view('steps.step4');
})->name('step4');

