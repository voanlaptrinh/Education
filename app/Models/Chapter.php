<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $fillable = ['lesson_id', 'title', 'content'];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
