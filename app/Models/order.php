<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'ship_id',
        'sender_name',
        'sender_street',
        'sender_province',
        'sender_city','sender_postcode','sender_phone_no',
        'reciver_name','reciver_street', 
        'reciver_province','reciver_city', 
        'reciver_postcode','reciver_phone_no', 
        'status','content', 
        'height','width', 
        'length','total_value', 
        'wants_contact_before_delivery','', 
        'pickup_date','wants_estimation', 
        'shop_id','user_id', 
        'rating_star','rating_review', 
    ];
}
