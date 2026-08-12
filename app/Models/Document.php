<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{


    use HasFactory;

    protected $fillable = [
        'registration_student_id',
        'pas_foto',
        'family_card',
        'id_card',
        'birth_certificate',
        'report_card',
        'diploma',
        'pip_card',
    ];

    // Relasi ke tabel registration_students
    public function registrationStudent()
    {
        return $this->belongsTo(RegistrationStudent::class);
    }
}
