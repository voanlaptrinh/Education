<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'video', 'image', 'lesson_id'];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
