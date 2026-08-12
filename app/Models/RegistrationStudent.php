<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\Village;

class RegistrationStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_number',
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
        'province_code',
        'city_code',
        'district_code',
        'village_code',
        'postal_code',
        'phone_number',
        'email',
        'previous_school',
        'previous_school_name',
        'registration_status',
        'registration_date',
    ];

    /**
     * Get the user that owns the RegistrationStudent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enrollment()
    {
        return $this->belongsTo(EnrollmentPeriod::class, 'enrollment_period_id' , 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id' , 'id');
    }

    public function parent()
    {
        return $this->hasOne(ParentStudent::class);
    }

    public function document()
    {
        return $this->hasOne(Document::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_code', 'code');
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'city_code', 'code');
    }
    public function district()
    {
        return $this->belongsTo(District::class , 'district_code' , 'code');
    }
    public function village()
    {
        return $this->belongsTo(Village::class , 'village_code' , 'code');
    }


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->registration_number = static::generateRegistrationNumber();
        });
    }

    public static function generateRegistrationNumber()
    {
        $prefix = 'SMPINU';
        $randomNumber = mt_rand(10000000, 99999999); // Angka 8 digit

        return $prefix . $randomNumber;
    }
}
