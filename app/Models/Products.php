<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    
    protected $fillable = [
        'product_name',
        'product_details',
        'product_type',
        'product_type_big',
        'product_type_medium',
        'product_type_small',
        'product_details',
        'product_open_price',
        'product_close_price',
        'product_bid_price',
        'product_low_price',
        'close_datetime',
        'user_id'
    ];
}
