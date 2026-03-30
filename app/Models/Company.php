<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'user_id',
        'slug',
        'company_name',
        'company_logo',
        'employer_location',
        'company_size',
        'industry',
        'is_approved',
        'is_banned',
    ];
}
