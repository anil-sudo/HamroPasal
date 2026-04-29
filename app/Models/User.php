<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, TwoFactorAuthenticatable;

    /**
     * Mass assignable attributes
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'role',
        'avatar',
        'status',
    ];

    /**
     * Hidden attributes
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_secret',
        'two_factor_recovery_codes',
    ];

    /**
     * Attribute casting
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'two_factor_confirmed_at' => 'datetime',
        'status' => 'boolean',
    ];

    // ===============================
    // 🔗 RELATIONSHIPS
    // ===============================

    // One user = one vendor (shop)
    public function vendor()
    {
        return $this->hasOne(Vendor::class);
    }

    // Cart items
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    // Orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // Wishlist
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    // Reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}