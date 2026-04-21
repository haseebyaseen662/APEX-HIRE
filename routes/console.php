<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::command('queue:work --stop-when-empty')
    ->everyMinute()
    ->withoutOverlapping(10) // Prevents multiple workers from running simultaneously
    ->runInBackground()
    ->onSuccess(function () {
        Log::info('Queue worker finished successfully.');
    })
    ->onFailure(function () {
        Log::error('Queue worker failed.');
    });
