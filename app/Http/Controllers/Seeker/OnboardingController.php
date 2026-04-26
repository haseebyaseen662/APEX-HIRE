<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class OnboardingController extends Controller
{
    public const EDUCATION_LEVELS = [
        'high_school' => 'High School',
        'diploma' => 'Diploma',
        'technical_diploma' => 'Technical Diploma',
        'associate' => 'Associate',
        'bachelors' => 'Bachelors',
        'masters' => 'Masters',
        'mphil' => 'MPhil',
        'phd' => 'PhD',
        'other' => 'Other',
    ];

    public function profile(Request $request): View|RedirectResponse
    {
        $user = $request->user();
        $profile = $user->jobSeekerProfile()->firstOrCreate([], [
            'job_title' => null,
            'seeker_location' => null,
        ]);

        if ($profile->onboarding_completed_at) {
            return redirect()->route('seeker.dashboard');
        }

        if (! $profile->onboarding_first_login_seen_at) {
            $profile->forceFill([
                'onboarding_first_login_seen_at' => now(),
            ])->save();
        }

        return view('seeker.onboarding.steps.profile', [
            'profile' => $profile,
        ]);
    }

    public function storeProfile(Request $request): RedirectResponse
    {
        $user = $request->user();
        $profile = $user->jobSeekerProfile()->firstOrCreate([], [
            'job_title' => null,
            'seeker_location' => null,
        ]);

        if ($profile->onboarding_completed_at) {
            return redirect()->route('seeker.dashboard');
        }

        $validated = $request->validate([
            'job_title' => ['required', 'string', 'max:255'],
            'seeker_location' => ['required', 'string', 'max:500'],
            'profile_picture' => ['nullable', 'image', 'max:2048'],
        ]);

        $picturePath = $profile->profile_picture;

        if ($request->hasFile('profile_picture')) {
            if ($picturePath) {
                Storage::disk('public')->delete($picturePath);
            }

            $picturePath = $request->file('profile_picture')->store('seeker_profile_pictures', 'public');
        }

        $profile->forceFill([
            'job_title' => $validated['job_title'],
            'seeker_location' => $validated['seeker_location'],
            'profile_picture' => $picturePath,
        ])->save();

        return redirect()->route('seeker.onboarding.education');
    }

    public function experience(Request $request): View|RedirectResponse
    {
        $user = $request->user();
        $profile = $user->jobSeekerProfile()->firstOrCreate([], [
            'job_title' => null,
            'seeker_location' => null,
        ]);

        if ($profile->onboarding_completed_at) {
            return redirect()->route('seeker.dashboard');
        }

        if (! $profile->job_title || ! $profile->seeker_location) {
            return redirect()->route('seeker.onboarding.profile');
        }

        $experiences = $request->user()->experiences()->get();

        return view('seeker.onboarding.steps.experience', [
            'experiences' => $experiences,
            'months' => $this->months(),
            'years' => $this->years(),
        ]);
    }

    public function storeExperience(Request $request): RedirectResponse
    {
        $user = $request->user();
        $profile = $user->jobSeekerProfile()->firstOrCreate([], [
            'job_title' => null,
            'seeker_location' => null,
        ]);

        if ($profile->onboarding_completed_at) {
            return redirect()->route('seeker.dashboard');
        }

        if (! $profile->job_title || ! $profile->seeker_location) {
            return redirect()->route('seeker.onboarding.profile');
        }

        $rows = $this->normalizeExperienceRows((array) $request->input('experience', []));
        $this->validateExperienceRows($rows);

        DB::transaction(function () use ($user, $profile, $rows): void {
            $user->experiences()->delete();

            foreach ($rows as $sortOrder => $row) {
                $startDate = Carbon::createFromFormat('Y-m-d', $row['start_date']);
                $endDate = Carbon::createFromFormat('Y-m-d', $row['end_date']);

                $user->experiences()->create([
                    'company_name' => $row['company'],
                    'start_month' => $startDate->month,
                    'start_year' => $startDate->year,
                    'end_month' => $endDate->month,
                    'end_year' => $endDate->year,
                    'currently_working' => false,
                    'description' => $row['description'],
                    'sort_order' => $sortOrder,
                ]);
            }

            $profile->forceFill([
                'onboarding_experience_completed_at' => now(),
                'onboarding_completed_at' => now(),
            ])->save();
        });

        return redirect()->route('seeker.dashboard');
    }

    public function education(Request $request): View|RedirectResponse
    {
        $user = $request->user();
        $profile = $user->jobSeekerProfile()->firstOrCreate([], [
            'job_title' => null,
            'seeker_location' => null,
        ]);

        if ($profile->onboarding_completed_at) {
            return redirect()->route('seeker.dashboard');
        }

        if (! $profile->job_title || ! $profile->seeker_location) {
            return redirect()->route('seeker.onboarding.profile');
        }

        $educations = $request->user()->educations()->get();

        return view('seeker.onboarding.steps.education', [
            'educations' => $educations,
            'months' => $this->months(),
            'years' => $this->years(),
            'educationLevels' => self::EDUCATION_LEVELS,
        ]);
    }

    public function storeEducation(Request $request): RedirectResponse
    {
        $user = $request->user();
        $profile = $user->jobSeekerProfile()->firstOrCreate([], [
            'job_title' => null,
            'seeker_location' => null,
        ]);

        if ($profile->onboarding_completed_at) {
            return redirect()->route('seeker.dashboard');
        }

        if (! $profile->job_title || ! $profile->seeker_location) {
            return redirect()->route('seeker.onboarding.profile');
        }

        $rows = $this->normalizeEducationRows((array) $request->input('education', []));
        $this->validateEducationRows($rows);

        DB::transaction(function () use ($user, $profile, $rows): void {
            $user->educations()->delete();

            foreach ($rows as $sortOrder => $row) {
                $startDate = Carbon::createFromFormat('Y-m-d', $row['start_date']);
                $endDate = Carbon::createFromFormat('Y-m-d', $row['end_date']);

                $user->educations()->create([
                    'university_name' => $row['school'],
                    'education_level' => 'other',
                    'courses_description' => $row['description'],
                    'start_month' => $startDate->month,
                    'start_year' => $startDate->year,
                    'end_month' => $endDate->month,
                    'end_year' => $endDate->year,
                    'sort_order' => $sortOrder,
                ]);
            }

            $profile->forceFill([
                'onboarding_education_completed_at' => now(),
            ])->save();
        });

        return redirect()->route('seeker.onboarding.experience');
    }

    public function complete(Request $request): RedirectResponse
    {
        $user = $request->user();
        $profile = $user->jobSeekerProfile()->firstOrCreate([], [
            'job_title' => null,
            'seeker_location' => null,
        ]);

        $profile->forceFill([
            'onboarding_completed_at' => now(),
        ])->save();

        return redirect()->route('seeker.dashboard');
    }

    private function normalizeExperienceRows(array $rows): array
    {
        $normalized = [];

        foreach ($rows as $index => $row) {
            if (! is_array($row)) {
                continue;
            }

            $normalizedRow = [
                '_input_index' => $index,
                'company' => trim((string) ($row['company'] ?? '')),
                'job_title' => trim((string) ($row['job_title'] ?? '')),
                'employment_type' => trim((string) ($row['employment_type'] ?? '')),
                'start_date' => trim((string) ($row['start_date'] ?? '')),
                'end_date' => trim((string) ($row['end_date'] ?? '')),
                'description' => trim((string) ($row['description'] ?? '')),
            ];

            $hasAnyData = $normalizedRow['company'] !== ''
                || $normalizedRow['job_title'] !== ''
                || $normalizedRow['employment_type'] !== ''
                || $normalizedRow['start_date'] !== ''
                || $normalizedRow['end_date'] !== ''
                || $normalizedRow['description'] !== '';

            if (! $hasAnyData) {
                continue;
            }

            $normalized[] = $normalizedRow;
        }

        return $normalized;
    }

    private function normalizeEducationRows(array $rows): array
    {
        $normalized = [];

        foreach ($rows as $index => $row) {
            if (! is_array($row)) {
                continue;
            }

            $normalizedRow = [
                '_input_index' => $index,
                'school' => trim((string) ($row['school'] ?? '')),
                'degree' => trim((string) ($row['degree'] ?? '')),
                'field' => trim((string) ($row['field'] ?? '')),
                'start_date' => trim((string) ($row['start_date'] ?? '')),
                'end_date' => trim((string) ($row['end_date'] ?? '')),
                'description' => trim((string) ($row['description'] ?? '')),
            ];

            $hasAnyData = $normalizedRow['school'] !== ''
                || $normalizedRow['degree'] !== ''
                || $normalizedRow['field'] !== ''
                || $normalizedRow['start_date'] !== ''
                || $normalizedRow['end_date'] !== ''
                || $normalizedRow['description'] !== '';

            if (! $hasAnyData) {
                continue;
            }

            $normalized[] = $normalizedRow;
        }

        return $normalized;
    }

    private function validateExperienceRows(array $rows): void
    {
        $errors = [];

        foreach ($rows as $row) {
            $inputIndex = $row['_input_index'];

            $validator = Validator::make(
                $row,
                [
                    'company' => ['required', 'string', 'max:255'],
                    'job_title' => ['required', 'string', 'max:255'],
                    'employment_type' => ['required', 'string', 'max:100'],
                    'start_date' => ['required', 'date'],
                    'end_date' => ['required', 'date'],
                    'description' => ['nullable', 'string', 'max:4000'],
                ]
            );

            if ($validator->fails()) {
                foreach ($validator->errors()->messages() as $field => $messages) {
                    $errors["experience.$inputIndex.$field"] = $messages;
                }
            }
        }

        if (! empty($errors)) {
            throw ValidationException::withMessages($errors);
        }
    }

    private function validateEducationRows(array $rows): void
    {
        $errors = [];

        foreach ($rows as $row) {
            $inputIndex = $row['_input_index'];

            $validator = Validator::make(
                $row,
                [
                    'school' => ['required', 'string', 'max:255'],
                    'degree' => ['required', 'string', 'max:255'],
                    'field' => ['required', 'string', 'max:255'],
                    'start_date' => ['required', 'date'],
                    'end_date' => ['required', 'date'],
                    'description' => ['nullable', 'string', 'max:4000'],
                ]
            );

            if ($validator->fails()) {
                foreach ($validator->errors()->messages() as $field => $messages) {
                    $errors["education.$inputIndex.$field"] = $messages;
                }
            }
        }

        if (! empty($errors)) {
            throw ValidationException::withMessages($errors);
        }
    }

    private function toIntOrNull(mixed $value): ?int
    {
        if ($value === null || $value === '') {
            return null;
        }

        return is_numeric($value) ? (int) $value : null;
    }

    private function toBool(mixed $value): bool
    {
        return in_array($value, [1, '1', true, 'true', 'on', 'yes'], true);
    }

    private function months(): array
    {
        return [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December',
        ];
    }

    private function years(): array
    {
        $years = [];
        $currentYear = now()->year + 5;

        for ($year = $currentYear; $year >= 1950; $year--) {
            $years[] = $year;
        }

        return $years;
    }
}
