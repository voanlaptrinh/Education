<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;
    protected $fillable = ['chapter_id', 'title', 'content', 'video','image'];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
   
}
