<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    //
    protected $fillable = [
        'slug',
        'name',
        'description',
        'image',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'category_id');
    }
}
