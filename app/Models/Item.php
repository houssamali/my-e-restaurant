<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table="items";
    protected $fillable=[
        'user_id',
        'food_id',
        'order_id',
        'qty',
        'price',
    ];
    public function food()
    {
    return $this->hasOne(Food::class,'id','food_id');
    }
}
