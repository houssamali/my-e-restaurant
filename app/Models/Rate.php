<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $table="rates";
    protected $fillable=[
        'user_id',
        'food_id',
        'rate_no',
    ];
}
