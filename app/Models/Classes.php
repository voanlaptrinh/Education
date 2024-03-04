<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = ['name','status'];

    public function subjects()
    {
        return $this->hasMany(Subject::class,'class_id');
    }
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
