<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'user_id',
        'shop_name',
        'slug',
        'email',
        'phone',
        'address',
        'logo',
        'banner',
        'description',
        'status',
    ];

    // Owner (User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Products of this vendor
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
