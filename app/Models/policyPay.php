<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class policyPay extends Model
{
    use HasFactory;
    
    protected $table = 'policy_pays';
    protected $fillable = ['description'];
}
