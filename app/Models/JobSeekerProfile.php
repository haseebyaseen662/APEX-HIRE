<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobSeekerProfile extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'job_title',
        'seeker_location',
        'profile_picture',
        'onboarding_first_login_seen_at',
        'onboarding_experience_completed_at',
        'onboarding_education_completed_at',
        'onboarding_completed_at',
    ];

    protected $casts = [
        'onboarding_first_login_seen_at' => 'datetime',
        'onboarding_experience_completed_at' => 'datetime',
        'onboarding_education_completed_at' => 'datetime',
        'onboarding_completed_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
