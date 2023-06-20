<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products_type_small extends Model
{
    protected $table = 'products_type_small';
    
    protected $fillable = [
        'product_type_small_name',
    ];
}
