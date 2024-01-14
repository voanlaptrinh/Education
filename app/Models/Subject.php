<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['name','status','class_id'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
}
