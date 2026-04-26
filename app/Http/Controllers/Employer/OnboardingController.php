<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class OnboardingController extends Controller
{
    public function profile(Request $request): View|RedirectResponse
    {
        $user = $request->user();
        $company = $user->company()->firstOrCreate([], [
            'is_approved' => 'in_review',
            'is_banned' => 'unbanned',
        ]);

        if ($company->onboarding_completed_at) {
            return redirect()->route('employer.dashboard');
        }

        if (! $company->onboarding_first_login_seen_at) {
            $company->forceFill([
                'onboarding_first_login_seen_at' => now(),
            ])->save();
        }

        return view('employer.onboarding.steps.profile', [
            'company' => $company,
        ]);
    }

    public function storeProfile(Request $request): RedirectResponse
    {
        $user = $request->user();
        $company = $user->company()->firstOrCreate([], [
            'is_approved' => 'in_review',
            'is_banned' => 'unbanned',
        ]);

        $validated = $request->validate([
            'company_name' => ['required', 'string', 'max:255'],
            'industry' => ['required', 'string', 'max:255'],
            'company_size' => ['required', 'string', 'max:255'],
            'employer_location' => ['required', 'string', 'max:500'],
            'company_logo' => ['nullable', 'image', 'max:2048'],
        ]);

        $logoPath = $company->company_logo;

        if ($request->hasFile('company_logo')) {
            if ($logoPath) {
                Storage::disk('public')->delete($logoPath);
            }

            $logoPath = $request->file('company_logo')->store('company_logos', 'public');
        }

        $company->forceFill([
            'company_name' => $validated['company_name'],
            'industry' => $validated['industry'],
            'company_size' => $validated['company_size'],
            'employer_location' => $validated['employer_location'],
            'company_logo' => $logoPath,
            'slug' => Str::slug($validated['company_name'].'-'.$user->id),
            'onboarding_completed_at' => now(),
        ])->save();

        return redirect()->route('employer.dashboard')
            ->with('status', 'employer-profile-saved');
    }

    public function complete(Request $request): RedirectResponse
    {
        $user = $request->user();
        $company = $user->company()->firstOrCreate([], [
            'is_approved' => 'in_review',
            'is_banned' => 'unbanned',
        ]);

        $company->forceFill([
            'onboarding_completed_at' => now(),
        ])->save();

        return redirect()->route('employer.dashboard');
    }
}

