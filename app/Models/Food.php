<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table="food";
    protected $fillable=[
        'cate_id',
        'name',
        'price',
        'image',
        'description',
        'status'
    ];
    public function category()
    {
        return $this->hasOne(Category::class,'id','cate_id');
    }
}
