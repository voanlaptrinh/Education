<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $table = 'tutors';

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'image',
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
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
