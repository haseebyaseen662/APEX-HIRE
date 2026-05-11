<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WaitlistController;

Route::get('/', function () {
    return view('pages.landing');
});

Route::post('/waitlist', [WaitlistController::class, 'store'])->name('waitlist.store');
