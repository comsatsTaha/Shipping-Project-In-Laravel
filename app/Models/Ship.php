<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'name',
        'type',
        'price_from',
        'price_to',
        'image'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function countries(){
        return $this->belongsToMany(Country::class,'ships_countries');
    }
}
