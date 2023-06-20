<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products_type extends Model
{
    protected $table = 'products_type';
    
    protected $fillable = [
        'product_type_name',
    ];
}
