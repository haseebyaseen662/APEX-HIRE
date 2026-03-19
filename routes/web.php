<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::middleware(['guest'])->group(function () {
    Route::get('/', [WebsiteController::class, 'home'])->name('home');
    Route::get('/about', [WebsiteController::class, 'about'])->name('about');
    Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
    Route::get('/success-stories', [WebsiteController::class, 'success'])->name('success');
    Route::get('/browse-jobs', [WebsiteController::class, 'browse'])->name('browse');
    Route::get('/privacy-policy', [WebsiteController::class, 'privacy'])->name('privacy');
    Route::get('/terms-condition', [WebsiteController::class, 'terms'])->name('terms');
});

require __DIR__.'/auth.php';
