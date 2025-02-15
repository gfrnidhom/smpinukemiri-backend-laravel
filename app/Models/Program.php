<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Program extends Model
{
    //

    protected $fillable = [
        'slug',
        'program_name',
        'description',
        'image',
    ];

    public function skills(): BelongsTo
    {
        return $this->belongsTo(Skill::class, 'id');
    }
}
