<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'category_id',
        'vendor_id',
        'name',
        'slug',
        'description',
        'price',
        'discount_price',
        'stock',
        'thumbnail',
        'gallery',
        'status',
    ];


    protected $casts = [
        'gallery' => 'array',
    ];
    
    // Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Vendor
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    // Images
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    // Cart
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    // Orders
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
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
