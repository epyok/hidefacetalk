<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products_type_medium extends Model
{
    protected $table = 'products_type_medium';
    
    protected $fillable = [
        'product_type_medium_name',
    ];
}
