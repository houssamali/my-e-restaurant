<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table="carts";
    protected $fillable=[
        'user_id',
        'food_id',
        'offer_price',
        'qty',
    ];

    public function food()
    {
        return $this->hasOne(Food::class,'id','food_id');
    }
}
