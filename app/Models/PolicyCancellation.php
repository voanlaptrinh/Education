<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolicyCancellation extends Model
{
    use HasFactory;
    protected $table = 'policy_cancellation';
    protected $fillable = ['description'];
}
