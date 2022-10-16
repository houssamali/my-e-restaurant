<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Spatie\Translatable\HasTranslations;

class Category extends Model
{

    use HasFactory;
   

    //public $translatable = ['name'];

    protected $table="categories";
    protected $fillable=[
        'name',
        'description',
        'image',
        'status'
    ];
}
