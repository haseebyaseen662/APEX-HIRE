<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeekerExperience extends Model
{
    protected $fillable = [
        'user_id',
        'company_name',
        'start_month',
        'start_year',
        'currently_working',
        'end_month',
        'end_year',
        'description',
        'sort_order',
    ];

    protected $casts = [
        'currently_working' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
