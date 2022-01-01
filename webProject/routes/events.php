
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\EventDetailsController;

Route::get('/eventDecor', function () {
    return view('eventDecor');
})->middleware(['auth'])->name('eventDecor');

Route::get('/eventDetails/{event_id}', [EventDetailsController::class, 'details'])->middleware(['auth'])->name('eventDetails');