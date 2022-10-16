<?php

namespace App\Http\Controllers\backend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $users=User::all();
        return view('backend.user.show',compact('users'));
    }

    public function edit($id)
    {
        $user=User::find($id);
        return view('backend.user.edit',compact('user'));
    }
    public function submit(Request $request,$id)
    {
       $user=User::find($id);
       $user->name=$request->name;
       $user->email=$request->email;
       if(!empty($request->new_password))
       {
        $user->password=$request->new_password;
        
       }else{
        $user->password=$request->old_password;
       
       }
       $user->update();
       return redirect('dashboard_user')->with('status',$request->name.' تم التحديث بنجاح ');
       
    }
    public function conform($id)
    {
        $user=User::find($id);
        $user->role_as=1;
        $user->update();
        return redirect('dashboard_user')->with('status',$user->name.' تم التحديث بنجاح ');
    }
    public function remove($id)
    {
        $user=User::find($id);
        $user->role_as=0;
        $user->update();
        return redirect('dashboard_user')->with('status',$user->name.' تم التحديث بنجاح ');
    }

    public function delete($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->back()->with('status',$user->name." تم الحذف بنجاح");
    }
}
