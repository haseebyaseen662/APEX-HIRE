<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\RegisterUserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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

        if ($user->hasRole('employer')) {
            return redirect()->route('employer.dashboard')
                ->with('success', 'Successfully Redirected To Recruiter Panel');
        }

        return redirect()->route('home')
            ->with('success', 'Successfully Logged In');
    }
}
