<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //

    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [
        'site_name',
        'site_tagline',
        'admin_email',
        'site_logo',
        'logo_header',
        'logo_footer',
        'site_copyright',
    ];
}
