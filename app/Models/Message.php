<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable=[
        'from_id',
        'to_id',
        'message',
        'attachment',
        'subject'
    ];

    public function from(){
        return $this->belongsTo(User::class,'from_id');
    }

    public function to(){
        return $this->belongsTo(User::class,'to_id');
    }
}
