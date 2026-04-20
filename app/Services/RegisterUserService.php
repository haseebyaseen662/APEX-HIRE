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
            $user = User::create([
                'name' => $data['first_name'] . ' ' . $data['last_name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            $user->assignRole($data['account_type']);

            if($data['account_type'] === 'seeker') {
                JobSeekerProfile::create([
                    'user_id' => $user->id,
                    'job_title' => $data['job_title'],
                    'seeker_location' => $data['seeker_location'],
                ]);

            }

            else {

                if($request->hasFile('company_logo')) {
                    $logoPath = $request->file('company_logo')->store('company_logos', 'public');
                } else {
                    $logoPath = null;
                }

                Company::create([
                    'user_id' => $user->id,
                    'slug' => Str::slug($data['company_name'] . '-' . $user->id),
                    'company_name' => $data['company_name'],
                    'industry' => $data['industry'],
                    'company_size' => $data['company_size'],
                    'employer_location' => $data['employer_location'],
                    'is_approved' => 'in_review',
                    'company_logo' => $logoPath
                ]);
            }

            return $user;

        });
    }
}
