<?php

namespace App\Http\Controllers\frontend;
use App\Models\Category;
use App\Models\Food;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorController extends Controller
{
    public function showCategory($id)
    {
        $category=Category::find($id);
        $foods=Food::where('cate_id',$category->id)->get();

        $publics=Food::where('trending',0)->get();
        
        return view('frontend.category.show',compact('foods','publics'));

    }
}
