<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\RegisterUserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Events\UserRegistered;

class RegisteredUserController extends Controller
{
    public function __construct(private RegisterUserService $service)
    {

    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $user = $this->service->handle($request->validated(), $request);

        Auth::login($user);

        event(new UserRegistered($user));

        return redirect()->route('verification.notice');
    }
}
