<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'enrollment_period_id',
        'full_name',
        'nisn',
        'nik',
        'birthplace',
        'birthdate',
        'gender',
        'religion',
        'address',
        'province_id',
        'city_id',
        'district_id',
        'subdistrict_id',
        'postal_code',
        'phone_number',
        'email',
        'previous_school',
        'registration_status',
        'accepted_class',
        'guardian_relationship',
        'registration_date',
        'additional_notes'
    ];

    /**
     * Get the user that owns the RegistrationStudent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enrollment()
    {
        return $this->belongsTo(EnrollmentPeriod::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
