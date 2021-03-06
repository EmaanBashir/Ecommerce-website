<?php

use Illuminate\Support\Facades\Route;
use App\Models\Event;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');



require __DIR__.'/auth.php';
require __DIR__.'/steps.php';
require __DIR__.'/account.php';
require __DIR__.'/events.php';
require __DIR__.'/checkout.php';
require __DIR__.'/gifts.php';
