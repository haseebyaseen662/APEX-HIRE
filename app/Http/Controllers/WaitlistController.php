<?php

namespace App\Http\Controllers;

use App\Http\Requests\WaitlistRequest;
use App\Events\WaitlistEvent;
use App\Models\Waitlist;

class WaitlistController extends Controller
{
    public function store(WaitlistRequest $request)
    {
    $validated = $request->validated();

    Waitlist::create($validated);

    event(new WaitlistEvent($validated));

    return back()->with('success', 'You are now on the waitlist!');
    }
}
