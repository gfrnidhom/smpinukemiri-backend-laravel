<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolHeadmaster extends Model
{
    //


    protected $fillable = [
        'name',
        'nip',
        'position',
        'gender',
        'birthplace',
        'birthdate',
        'employment_status',
        'religion',
        'qualification',
        'specialization',
        'address',
        'remarks',
        'start_date',
        'end_date'
    ];
}
