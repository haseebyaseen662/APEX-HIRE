<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Employer\DashboardController;
use App\Http\Controllers\Employer\JobController;
use App\Http\Controllers\Seeker\DashboardController as SeekerDashboardController;
use App\Http\Controllers\Seeker\OnboardingController;

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/success-stories', [WebsiteController::class, 'success'])->name('success');
Route::get('/browse-jobs', [WebsiteController::class, 'browse'])->name('browse');
Route::get('/privacy-policy', [WebsiteController::class, 'privacy'])->name('privacy');
Route::get('/terms-condition', [WebsiteController::class, 'terms'])->name('terms');

Route::middleware(['auth', 'verified', 'role:employer'])->prefix('employer')->name('employer.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/account', [DashboardController::class, 'account'])->name('account');
    Route::get('/teams', [DashboardController::class, 'team'])->name('team');
    Route::get('/schedule-interview', [DashboardController::class, 'interview'])->name('schedule-interview');
    Route::get('/jobs', [JobController::class, 'index'])->name('job-list');
    Route::get('/jobs/create', [JobController::class, 'create'])->name('job-create');
});

Route::middleware(['auth', 'verified', 'role:seeker'])->prefix('seeker')->name('seeker.')->group(function () {
    Route::get('/dashboard', [SeekerDashboardController::class, 'index'])->name('dashboard');
    Route::get('/onboarding/experience', [OnboardingController::class, 'experience'])->name('onboarding.experience');
    Route::post('/onboarding/experience', [OnboardingController::class, 'storeExperience'])->name('onboarding.experience.store');
    Route::get('/onboarding/education', [OnboardingController::class, 'education'])->name('onboarding.education');
    Route::post('/onboarding/education', [OnboardingController::class, 'storeEducation'])->name('onboarding.education.store');
});

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
});
require __DIR__.'/auth.php';
