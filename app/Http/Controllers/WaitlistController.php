<?php

namespace App\Http\Controllers;

use App\Http\Requests\WaitlistRequest;
use App\Models\Waitlist;
use App\Events\WaitlistJoinedEvent;

class WaitlistController extends Controller
{
    public function store(WaitlistRequest $request)
    {
        $validated = $request->validated();
        $waitlist  = Waitlist::create($validated);

        WaitlistJoinedEvent::dispatch($waitlist);

        return response()->json(['success' => true]);
    }
}
