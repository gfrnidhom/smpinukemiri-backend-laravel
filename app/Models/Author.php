<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    //
    protected $fillable = [
        'slug',
        'name',
        'email',
        'bio',
        'image',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
