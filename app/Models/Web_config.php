<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Web_config extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'logo',
        'website',
        'code',
        'gg_map',
        'gg_analytic',
        'address',
        'email',
        'phone',
        'zalo',
        'facebook_id',
        'pinterest',
        'youtube',
        'dribbble',
        'whats_app',
        'tiktok',
        'telegram',
        'google',
        'twitter',
        'instagram',
        'reddit',
        'linkedin',
    ];
}
