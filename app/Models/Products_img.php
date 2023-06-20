<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products_img extends Model
{
    protected $table = 'products_img';
    
    protected $fillable = [
        'product_id',
        'product_img_url',
    ];
}
