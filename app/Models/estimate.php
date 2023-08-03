<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estimate extends Model
{
    use HasFactory;
    protected $fillable = [
         'order_id',
         'shop_id',
         'est_price',
         'remarks',
        
];
}
