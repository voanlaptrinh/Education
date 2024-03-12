<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description','subject_id','content','image','views'];

    // public function course()
    // {
    //     return $this->belongsTo(Course::class);
    // }
    public function scopeSearch(Builder $query, $keyword)
    {
        $keyword = session('search_keyword');
        return $query->where(function ($query) use ($keyword) {
            $query->where('title', 'like', '%' . $keyword . '%');
                 
                  
        });
    }
    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
