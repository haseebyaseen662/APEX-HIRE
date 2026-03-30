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
        'resume',
    ];
}
