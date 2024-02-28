<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'package_name',
        'amount',
        'bank_code',
        'bank_tran_no',
        'card_type',
        'order_info',
        'pay_date',
        'response_code',
        'tmn_code',
        'transaction_no',
        'transaction_status',
        'txn_ref',
        'secure_hash',
        'expired_at'
    ];

    protected $dates = ['pay_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class, 'txn_ref');
    }
}
