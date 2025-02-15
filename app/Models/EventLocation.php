<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventLocation extends Model
{
    //

    protected $fillable = [
        'slug',
        'location_name',
        'description',
        'image',
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_location_id');
    }
}
