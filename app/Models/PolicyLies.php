<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolicyLies extends Model
{
    use HasFactory;
    protected $table = 'policy_lies';
    protected $fillable = ['description'];

}
