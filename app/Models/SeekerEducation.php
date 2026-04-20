<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeekerEducation extends Model
{
    protected $table = 'seeker_educations';

    protected $fillable = [
        'user_id',
        'university_name',
        'education_level',
        'courses_description',
        'start_month',
        'start_year',
        'end_month',
        'end_year',
        'sort_order',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
