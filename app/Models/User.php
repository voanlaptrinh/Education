<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'image', 'email', 'password', 'gender', 'phone', 'address', 'birthday', 'subscription_id', 'expires_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function getPasswordResetToken()
    {
        return $this->password_reset_token;
    }

    /**
     * Set the password reset token and expiration time.
     */
    public function setPasswordResetToken($token, $expires_at)
    {
        $this->password_reset_token = $token;
        $this->password_reset_expires_at = $expires_at;
        $this->save();
    }
    protected $dates = ['expires_at'];

    public function subscription(): BelongsTo
    {
        return $this->belongsTo(Subscription::class);
    }

    public function hasSubscription(): bool
    {
        return $this->subscription !== null;
    }

    public function isSubscriptionExpired(): bool
    {
        return $this->expires_at !== null && now()->gt($this->expires_at);
    }
    
}
