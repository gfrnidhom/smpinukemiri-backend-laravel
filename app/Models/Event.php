<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    //

    protected $fillable = [
        'slug',
        'event_name',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'description',
        'event_category_id',
        'event_location_id',
        'image',
    ];

    public function eventCategories(): BelongsTo
    {
        return $this->belongsTo(EventCategory::class, 'id');
    }

    public function eventLocation(): BelongsTo
    {
        return $this->belongsTo(EventLocation::class, 'id');
    }
}
