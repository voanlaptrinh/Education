<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = ['name','description', 'file_path', 'classes_id','image_path'];

    public function classes()
    {
        return $this->belongsTo(Classes::class);
    }
}
