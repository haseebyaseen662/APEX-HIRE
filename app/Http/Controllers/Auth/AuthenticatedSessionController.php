<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $user = $request->user();

        if (! $user->hasVerifiedEmail()) {
            $email = $user->email;

            Auth::guard('web')->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            $request->session()->put('verification_email', $email);

            return redirect()->route('verification.notice')
                ->with('status', 'unverified-login');
        }

        $request->session()->regenerate();

        if ($user->hasRole('employer')) {
            $company = $user->company()->firstOrCreate([], [
                'is_approved' => 'in_review',
                'is_banned' => 'unbanned',
            ]);

            if (! $company->onboarding_completed_at) {
                $redirectTo = route('employer.onboarding.profile', absolute: false);
            } else {
                $redirectTo = route('employer.dashboard', absolute: false);
            }
        } elseif ($user->hasRole('seeker')) {
            $profile = $user->jobSeekerProfile()->firstOrCreate([], [
                'job_title' => null,
                'seeker_location' => null,
            ]);

            if ($profile->onboarding_completed_at) {
                $redirectTo = route('seeker.dashboard', absolute: false);
            } elseif (! $profile->job_title || ! $profile->seeker_location) {
                $redirectTo = route('seeker.onboarding.profile', absolute: false);
            } elseif (! $profile->onboarding_education_completed_at) {
                $redirectTo = route('seeker.onboarding.education', absolute: false);
            } elseif (! $profile->onboarding_experience_completed_at) {
                $redirectTo = route('seeker.onboarding.experience', absolute: false);
            } else {
                $redirectTo = route('seeker.dashboard', absolute: false);
            }
        } else {
            $redirectTo = route('home', absolute: false);
        }

        return redirect()->intended($redirectTo);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
