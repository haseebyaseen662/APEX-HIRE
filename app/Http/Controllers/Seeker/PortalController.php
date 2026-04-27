<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortalController extends Controller
{
    public function profile(Request $request): View
    {
        $user = $request->user();
        $profile = $user->jobSeekerProfile()->firstOrCreate([], [
            'job_title' => null,
            'seeker_location' => null,
        ]);

        $user->loadMissing(['experiences', 'educations']);

        return view('seeker.pages.profile', [
            'user' => $user,
            'profile' => $profile,
            'experiences' => $user->experiences,
            'educations' => $user->educations,
        ]);
    }

    public function applications(): View
    {
        $applications = [
            [
                'company' => 'Northstar Labs',
                'job_title' => 'Laravel Developer',
                'status' => 'Interview',
                'date' => 'April 18, 2026',
            ],
            [
                'company' => 'Apex Digital',
                'job_title' => 'Full Stack Engineer',
                'status' => 'Applied',
                'date' => 'April 14, 2026',
            ],
            [
                'company' => 'Bluewave Studio',
                'job_title' => 'Backend Engineer',
                'status' => 'Shortlisted',
                'date' => 'April 10, 2026',
            ],
            [
                'company' => 'Orbit Works',
                'job_title' => 'Software Engineer',
                'status' => 'Rejected',
                'date' => 'April 2, 2026',
            ],
        ];

        return view('seeker.pages.applications', [
            'applications' => $applications,
        ]);
    }

    public function account(Request $request): View
    {
        return view('seeker.pages.account', [
            'user' => $request->user(),
        ]);
    }
}
