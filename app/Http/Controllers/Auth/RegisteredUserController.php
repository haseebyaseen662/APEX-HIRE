<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\RegisterUserService;
use App\Events\UserRegistered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class RegisteredUserController extends Controller
{
    public function __construct(private RegisterUserService $service)
    {

    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request): RedirectResponse
    {
        $user = $this->service->handle($request->validated(), $request);

        event(new UserRegistered($user));

        $request->session()->put('verification_email', $user->email);
        $request->session()->put('verification_email_last_sent_at', Carbon::now()->timestamp);
        Cache::put(
            'verification_email_last_sent_at:'.$user->email,
            Carbon::now()->timestamp,
            now()->addDay()
        );

        return redirect()->route('verification.notice')
            ->with('status', 'registration-success');
    }
}
