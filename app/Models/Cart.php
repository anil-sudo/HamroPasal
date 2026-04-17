<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public fuction Product(){
        return $this->belongsTo(Product::class);

    }

        public fuction user(){
        return $this->belongsTo(User::class);

    }
        public fuction dokan(){
        return $this->belongsTo(Dokan::class);

    }
    
    

}
