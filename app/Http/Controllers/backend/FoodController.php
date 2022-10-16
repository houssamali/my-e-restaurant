<?php

namespace App\Http\Controllers\backend;
use App\Models\Category;
use App\Models\Food;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use WithPagination;
use Illuminate\Support\Facades\File;

class FoodController extends Controller
{
    public function show()
    {
        $foods=Food::paginate(4);
        return view('backend.food.show',compact('foods'));
    }

    public function add()
    {
        $categories=Category::all();
        return view('backend.food.add',compact('categories'));
    }
    public function submit(Request $request)
    {
        $food=new Food();
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/food/image',$filename);
            $food->image=$filename;
        }
        $food->cate_id=$request->cate_id;
        $food->name=$request->name;
        $food->description=$request->description;
        $food->long_description=$request->long_description;
        $food->price=$request->price;
        $food->offer=$request->offer;
        $food->status=$request->input('status');
        $food->trending=$request->input('trending');
        $food->save();
        return redirect('show-food')->with('status',$request->name.' تم الإضافة بنجاح  ');
    }

    public function edit($id)
    {
        $food=Food::find($id);
        $category=Category::where('id',$food->cate_id)->first();
        //echo $category->id;
        return view('backend.food.edit',compact('food','category'));
    }

    public function update(Request $request,$id)
    {
    $food=Food::find($id);
    if($request->hasfile('image'))
    {
        $path="uploads/food/image/".$food->image;
        if(File::exists($path))
        {
            File::delete($path);
        }
        $file=$request->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename=time().'.'.$ext;
        $file->move('uploads/food/image',$filename);
        $food->image=$filename;
    }
    $food->cate_id=$request->cate_id;
    $food->name=$request->name;
    $food->description=$request->description;
    $food->long_description=$request->long_description;
    $food->status=$request->input('status')==true?'1':'0';
    $food->trending=$request->input('trending')==true?'1':'0';
    $food->price=$request->price;
    $food->offer=$request->offer;
    $food->update();
    return redirect('show-food')->with('status',$request->name.' تم التحديث بنجاح ');
    }

    public function delete($id)
    {
        $food=Food::find($id);
        $path="uploads/food/image/".$food->image;
        if(File::exists($path))
        {
            File::delete($path);
        }
        $food->delete();
        return redirect()->back()->with('status',$food->name." تم الحذف بنجاح");
    }
}
