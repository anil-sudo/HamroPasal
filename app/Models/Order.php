<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
        return $this->belongsto(User::class);
    }

        public function dokan(){
        return $this->belongsto(Dokan::class);
    }
        public function items(){
        return $this->belongsto(OrderItem::class);
    }


}
