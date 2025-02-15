<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //

    protected $fillable = [
        'first_name',
        'last_name',
        'title',
        'nip', // Tambahkan NIP di sini
        'email',
        'phone',
        'address',
        'date_of_birth',
        'gender',
        'qualification',
        'specialization',
        'hire_date',
        'status',
        'image',
    ];
}
