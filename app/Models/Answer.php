<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    
    protected $fillable = ['question_id', 'text', 'is_correct'];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($answer) {
            // Tự động gán giá trị cho cột 'order' dựa trên 'question_id'
            $answer->order = static::where('question_id', $answer->question_id)->max('order') + 1;
        });
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function isCorrect()
    {
        return $this->is_correct == 1;
    }
}
