<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skill extends Model
{
    //

    protected $fillable = [
        'slug',
        'skill_name',
        'description',
        'program_id',
        'image',
    ];

    public function programs(): BelongsTo
    {
        return $this->belongsTo(Program::class, 'program_id');
    }
}
