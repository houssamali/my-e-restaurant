<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table="orders";
    protected $fillable=[
        'id',
        'name',
        'email',
        'address',
        'number',
        'total',
        'track_no',
        'status'
    ];
    public function item()
    {
        return $this->hasOne(Item::class,'order_id','id');
    }
}
