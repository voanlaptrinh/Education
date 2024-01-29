<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'course_id',
        'score',
        'started_at',
        'completed_at',
        // Thêm các trường khác nếu cần
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
