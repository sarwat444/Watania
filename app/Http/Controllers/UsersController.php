<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\User ;
use  App\Models\Role ;
use Auth ;
use App\Sector ;
use Illuminate\Support\Facades\Hash;
use Validator;

class UsersController extends Controller
{
    public  function  admins()
    {
      $users =  User::all() ;
      $roles =  Role::all() ;
      $user   = Auth::user()->roles;
      return view('admin.admins.admins')->with(compact('users')) ;
    }
    public function  addadmin(Request  $request )
    {

        if($request->isMethod('post'))
        {
            /*
            $rules = [];
            $rules += ['name' => ['required', 'max:255']];
            $rules += ['email' => ['required', 'email' , 'unique:users']];
            $rules += ['password' => ['required']];
            $rules += ['role_id' => ['required']];
            $request->validate($rules);
            */

            $validator = Validator::make($request->all(),[


                    'name'                                   => 'required',
                    'email'                                  => 'required|unique:users,email',

                    'role_id'                         => 'required',
             ],[
                   'name.required'                            => 'الاسم مطلوب',
                   'email.required'                           => 'الايميل مطلوب',
                   'password.required'                       => 'الباسورد مطلوب',
                   'role_id.required'                         => 'الصلاحيه مطلوبه ',
                   'email.unique'   => 'هذا الميل موجود بالفعل '

           ],[]);
            if ($validator->fails()) {
                 return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
             }


            $request_data = $request->all();

            $request_data["password"] = Hash::make($request->password);
            $user = User::create($request_data);
            return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه البيانات   بنجاح ');
        }
        $sectors =  Sector::get() ;
        $roles = Role::get() ;
        return view('admin.admins.add-admin')->with(compact('roles' , 'sectors')) ;
    }
    public function  editadmin(Request  $request  ,  $id = null )
    {

        if($request->isMethod('post'))
        {
            /*
            $rules = [];
            $rules += ['name' => ['required', 'max:255']];
            $rules += ['email' => ['required', 'email' , 'unique:users']];
            $rules += ['password' => ['required']];
            $request->validate($rules);
            */
            $validator = Validator::make($request->all(),[


                    'name'                                   => 'required',
                    'email'                                  => 'required',

             ],[
                   'name.required'                            => 'الاسم مطلوب',
                   'email.required'                           => 'الايميل مطلوب',


           ],[]);
            if ($validator->fails()) {
                 return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
             }
            $request_data = $request->except(['_token' ,'permissions']);
            $request_data["password"] = Hash::make($request->password);
            $user = User::find($id);
            $user->update($request_data);

            return redirect()->back()->with('flash_message_success', 'لقد  تم تعديل   البيانات   بنجاح ');
        }
         $sectors =  Sector::get() ;
         $admin =  User::where(['id'=> $id])->first() ;
         return view('admin.admins.edit-admin')->with(compact('admin' , 'sectors')) ;
    }
    public function  deleteadmin($id=null  )
    {
          User::where(['id'=>$id])->delete() ;
         /*HostService::where(['host_id' => $host->id])->delete() ;
         $host->delete() ; */
         return redirect()->back()->with('flash_message_success', 'لقد  تم حذف    الاستضافه   بنجاح ');
    }
}
