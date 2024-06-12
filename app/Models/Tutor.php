<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Authenticatable
{
    use HasFactory;
    protected $table = 'tutors';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'image',
        'password',
        'phone_number',
        'date_of_birth',
        'gender',
        'address',
        'qualification',
        'experience_years',
        'subjects',
        'hourly_rate',
        'bio',
    ];

    // Định nghĩa mối quan hệ với mô hình User
   
}
