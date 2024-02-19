<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'duration_months'];
    // protected $dates = ['expires_at'];

    // public function subscribe($months)
    // {
    //     $this->expires_at = now()->addMonths($months);
    //     $this->save();
    // }

    // public function hasExpired()
    // {
    //     return $this->expires_at && now()->greaterThan($this->expires_at);
    // }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
