<?php

namespace App\Services;

use App\Models\User;
use App\Models\Company;
use App\Models\JobSeekerProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterUserService
{
    public function handle(array $data, Request $request): User
    {
        return DB::transaction(function () use ($data, $request) {
            $nameFromEmail = (string) Str::of($data['email'])
                ->before('@')
                ->replace(['.', '_', '-'], ' ')
                ->squish()
                ->title();

            $user = User::create([
                'name' => $nameFromEmail !== '' ? $nameFromEmail : 'User',
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            $user->assignRole($data['account_type']);

            if ($data['account_type'] === 'seeker') {
                JobSeekerProfile::create([
                    'user_id' => $user->id,
                    'job_title' => null,
                    'seeker_location' => null,
                ]);
            } else {
                Company::create([
                    'user_id' => $user->id,
                    'slug' => null,
                    'company_name' => null,
                    'industry' => null,
                    'company_size' => null,
                    'employer_location' => null,
                    'is_approved' => 'in_review',
                    'company_logo' => null,
                ]);
            }

            return $user;

        });
    }
}
