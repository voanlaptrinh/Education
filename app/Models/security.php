<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class security extends Model
{
    use HasFactory;
    protected $table = 'security';
    protected $fillable = ['description'];
}
