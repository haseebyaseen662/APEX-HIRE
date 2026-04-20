<?php

use App\Models\JobSeekerProfile;
use App\Models\User;
use Spatie\Permission\Models\Role;

beforeEach(function () {
    Role::findOrCreate('seeker', 'web');
    Role::findOrCreate('employer', 'web');
});

test('verified seeker first login redirects to onboarding experience and stores first login timestamp', function () {
    $user = User::factory()->create();
    $user->assignRole('seeker');

    JobSeekerProfile::create([
        'user_id' => $user->id,
        'job_title' => 'Laravel Developer',
        'seeker_location' => 'Lahore, Pakistan',
    ]);

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $response->assertRedirect(route('seeker.onboarding.experience', absolute: false));
    expect($user->fresh()->jobSeekerProfile->onboarding_first_login_seen_at)->not->toBeNull();
});

test('employer login behavior remains unchanged', function () {
    $user = User::factory()->create();
    $user->assignRole('employer');

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $response->assertRedirect(route('employer.dashboard', absolute: false));
});

test('seeker with first login already seen goes to seeker dashboard', function () {
    $user = User::factory()->create();
    $user->assignRole('seeker');

    JobSeekerProfile::create([
        'user_id' => $user->id,
        'job_title' => 'Software Engineer',
        'seeker_location' => 'Karachi, Pakistan',
        'onboarding_first_login_seen_at' => now(),
        'onboarding_experience_completed_at' => now(),
    ]);

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $response->assertRedirect(route('seeker.dashboard', absolute: false));
});

test('experience step saves currently working row with null end dates', function () {
    $user = User::factory()->create();
    $user->assignRole('seeker');

    JobSeekerProfile::create([
        'user_id' => $user->id,
        'job_title' => 'Software Engineer',
        'seeker_location' => 'Karachi, Pakistan',
        'onboarding_first_login_seen_at' => now(),
    ]);

    $response = $this->actingAs($user)->post(route('seeker.onboarding.experience.store'), [
        'experiences' => [
            [
                'company_name' => 'Apex Hire',
                'start_month' => 1,
                'start_year' => 2024,
                'currently_working' => 1,
                'end_month' => 12,
                'end_year' => 2025,
                'description' => 'Built APIs and dashboards.',
            ],
        ],
    ]);

    $response->assertRedirect(route('seeker.onboarding.education', absolute: false));
    $this->assertDatabaseHas('seeker_experiences', [
        'user_id' => $user->id,
        'company_name' => 'Apex Hire',
        'currently_working' => 1,
        'end_month' => null,
        'end_year' => null,
    ]);
});

test('education step enforces end date and accepts future years', function () {
    $user = User::factory()->create();
    $user->assignRole('seeker');

    JobSeekerProfile::create([
        'user_id' => $user->id,
        'job_title' => 'Software Engineer',
        'seeker_location' => 'Karachi, Pakistan',
        'onboarding_first_login_seen_at' => now(),
    ]);

    $invalidResponse = $this->actingAs($user)->from(route('seeker.onboarding.education'))->post(route('seeker.onboarding.education.store'), [
        'educations' => [
            [
                'university_name' => 'NED University',
                'education_level' => 'bachelors',
                'courses_description' => 'Computer Science',
                'start_month' => 9,
                'start_year' => 2022,
                'end_month' => '',
                'end_year' => '',
            ],
        ],
    ]);

    $invalidResponse->assertRedirect(route('seeker.onboarding.education'));
    $invalidResponse->assertSessionHasErrors([
        'educations.0.end_month',
        'educations.0.end_year',
    ]);

    $validResponse = $this->actingAs($user)->post(route('seeker.onboarding.education.store'), [
        'educations' => [
            [
                'university_name' => 'NED University',
                'education_level' => 'bachelors',
                'courses_description' => 'Computer Science',
                'start_month' => 9,
                'start_year' => 2022,
                'end_month' => 6,
                'end_year' => now()->year + 1,
            ],
        ],
    ]);

    $validResponse->assertRedirect(route('seeker.dashboard', absolute: false));
    $this->assertDatabaseHas('seeker_educations', [
        'user_id' => $user->id,
        'university_name' => 'NED University',
        'education_level' => 'bachelors',
        'end_year' => now()->year + 1,
    ]);
});
