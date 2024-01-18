<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['name','status','description','class_id'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
}
