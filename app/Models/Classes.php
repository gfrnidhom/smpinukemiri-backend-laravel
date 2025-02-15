<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Classes extends Model
{
    //

    protected $fillable = [
        'name',
        'description',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'class_id');
    }
}
