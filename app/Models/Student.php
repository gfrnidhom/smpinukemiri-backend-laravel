<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    //

    protected $fillable = [
        'name',
        'description',
    ];

    public function classes(): BelongsTo
    {
        return $this->belongsTo(Classes::class, 'id');
    }
}
