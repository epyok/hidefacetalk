<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products_type_big extends Model
{
    protected $table = 'products_type_big';
    
    protected $fillable = [
        'product_type_big_name',
    ];
}
