<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventCategory extends Model
{
    //

    protected $fillable = [
        'slug',
        'category_name',
        'description',
        'image',
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_category_id');
    }
}
