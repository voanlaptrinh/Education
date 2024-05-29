<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailDescription extends Model
{
    use HasFactory;
    protected $table = 'detail_subcriptions';
    protected $fillable = ['description'];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
