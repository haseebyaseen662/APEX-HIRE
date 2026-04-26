<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(Request $request): View
    {
        $user = $request->user();
        $profile = $user->jobSeekerProfile()->firstOrCreate([], [
            'job_title' => null,
            'seeker_location' => null,
        ]);

        $continueProfileUrl = null;

        if (! $profile->onboarding_completed_at) {
            if (! $profile->job_title || ! $profile->seeker_location) {
                $continueProfileUrl = route('seeker.onboarding.profile');
            } elseif (! $profile->onboarding_education_completed_at) {
                $continueProfileUrl = route('seeker.onboarding.education');
            } elseif (! $profile->onboarding_experience_completed_at) {
                $continueProfileUrl = route('seeker.onboarding.experience');
            }
        }

        $jobsFeed = [
            ['title' => 'Senior Laravel Developer', 'company' => 'People', 'location' => 'Pakistan', 'posted' => '17 days ago'],
            ['title' => 'Full Stack Engineer', 'company' => 'Micronisus Systems', 'location' => 'UAE', 'posted' => '17 days ago'],
            ['title' => 'Senior PHP Full Stack Laravel/Vue JS, Hybrid', 'company' => 'SQLI', 'location' => 'Morocco', 'posted' => '7 days ago'],
            ['title' => 'PHP Laravel Developer', 'company' => 'Weekday AI', 'location' => 'India', 'posted' => '29 days ago'],
        ];

        $topMatches = [
            ['title' => 'Senior UiPath Developer (Contract)', 'company' => 'The MSI Group', 'location' => 'Dhahran, Saudi Arabia', 'posted' => 'Yesterday'],
            ['title' => 'Head of Development / Senior Solutions Architect', 'company' => 'Safe City Group', 'location' => 'Dubai, UAE', 'posted' => '8 days ago'],
            ['title' => 'Architect', 'company' => 'Fahad Al-Reshoodi Engineering', 'location' => 'Riyadh, Saudi Arabia', 'posted' => '14 days ago'],
            ['title' => 'Senior Laravel Developer', 'company' => 'People', 'location' => 'Lahore, Pakistan', 'posted' => '17 days ago'],
        ];

        $activityLog = [
            ['label' => 'Search appearances', 'value' => 0],
            ['label' => 'Jobs saved', 'value' => 0],
            ['label' => 'Job applications', 'value' => 0],
        ];

        return view('seeker.pages.dashboard', [
            'user' => $user,
            'profile' => $profile,
            'continueProfileUrl' => $continueProfileUrl,
            'jobsFeed' => $jobsFeed,
            'topMatches' => $topMatches,
            'activityLog' => $activityLog,
        ]);
    }
}
