<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basis extends Model
{
    use HasFactory;
    protected $table = 'basis';
    protected $fillable = ['name','address','gg_map','phone','email','open_time'];
}
