<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentStudent extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'registration_student_id',
        'father_name',
        'father_religion',
        'father_occupation',
        'mother_name',
        'mother_religion',
        'mother_occupation',
        'guardian_name',
        'guardian_occupation',
        'guardian_relationship',
        'phone_number',
    ];

    // Relasi ke tabel registration_students
    public function registrationStudent()
    {
        return $this->belongsTo(RegistrationStudent::class);
    }
}
