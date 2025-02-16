<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnrollmentPeriod extends Model
{
    //

    protected $fillable = [
        'period_name',
        'start_date',
        'end_date',
        'quota',
        'applicants_count',
        'status',
        'image',
    ];
}

