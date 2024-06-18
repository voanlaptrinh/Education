<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolicyGuarantees extends Model
{
    use HasFactory;
    protected $table = 'policy_guarantees';
    protected $fillable = ['description'];
}
