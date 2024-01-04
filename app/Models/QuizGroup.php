<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizGroup extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    // Mối quan hệ với các câu hỏi
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
