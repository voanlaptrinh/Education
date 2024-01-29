<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'price',
        'duration_in_days',
        'can_do_exercises',
        'can_view_lectures',
    ];
}
