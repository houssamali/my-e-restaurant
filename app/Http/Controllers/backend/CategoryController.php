<?php

namespace App\Http\Controllers\backend;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Session;
class CategoryController extends Controller
{
    
    public function show()
    {
        $categories=Category::all();
    return view('backend.category.show',compact('categories'));
    }

    public function Add()
    {
        return view('backend.category.add');
    }
    public function submit(Request $request)
    {
        $rules= [
            'name'=>'required|max:10',
            'description'=>'required|max:25',
            'image'=>'required'
        ];
        

        $validator=Validator::make($request->all(),$rules,
            [
                
                
                'name.required'=>'اسم الفئة مطلوب',
                'name.max'=>'يجب ألا يزيد الاسم عن 10 أحرف.',
                'description.required'=>'وصف الفئة مطلوب',
                'description.max'=>'يجب ألا يزيد الوصف عن 25 حرفًا.',
                'image.required'=>'الصورة مطلوبة',
            ]
            );
           
            return redirect()->back()->withErrors($validator)->withInput($request->all());

    $category=new Category();

    if($request->hasFile('image'))
    {
    $file=$request->file('image');
    $ext=$file->getClientOriginalExtension();
    $filename=time().'.'.$ext;
    $file->move('uploads/category/image/',$filename);
    $category->image=$filename;
    }
     $category->name=$request->name;
     $category->description=$request->description;
     $category->status=$request->status==true?'1':'0';
     $category->save();
     return redirect('show-category')->with('status',$request->name.' تم الإضافة بنجاح  ');
     
   
    }

    public function edit($id)
    {
        $category=Category::find($id);
        return view('backend.category.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        
       

        $category=Category::find($id);
        if($request->hasfile('image'))
        {
            $path="uploads/category/image/". $category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('uploads/category/image/',$filename);
            $category->image=$filename; 
        }
        $category->name=$request->name;
        $category->description=$request->description;
        $category->status=$request->status==TRUE?'1':'0';
        $category->update();
        return redirect('show-category')->with('status',$category->name.' تم التحديث بنجاح ');

    }

    public function delete($id)
    {
        $category=Category::find($id);
        $path="uploads/category/image". $category->image;
        if(File::exists($path))
        {
            File::delete($path);
        }
        $category->delete();
        return redirect()->back()->with('status',$category->name." تم الحذف بنجاح");
    }

}
