<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact ;
use Validator;
class AdminContactus extends Controller
{


    public function  contactus()
    {

        $contacts = Contact::get() ;
        return  view('admin.contact_us.contactus')->with(compact('contacts')) ;
    }
    public  function addcontactus(Request $request  )
    {
        if($request->isMethod('post'))
        {
        $rules = [];
        /*
        $rules += ['address' => ['required']];
        $rules += ['email' => ['required']];
        $rules += ['phone' => ['required']];
        $rules += ['lat' => ['required']];
        $rules += ['lng' => ['required']];
        $request->validate($rules);
*/
      $validator = Validator::make($request->all(),[

              'address'               => 'required|string',
              'email'                 => 'required',
              'phone'                 => 'required',
              'lat'                   => 'required|string',
              'lng'                   => 'required',
      ],[
             'address.required'          => 'العنوان مطلوب',
             'email.required'            => 'الايميل مطلوب',
             'phone.required'            => 'رقم التليفون مطلوب',
             'lat.required'              => 'اللات مطلوب',
             'lng.required'              => 'اللانج مطلوب',

      ],[]);
      if ($validator->fails()) {
           return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
      }

        $request_data = $request->all();
        $contact = Contact::create($request_data);
        return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه بيانات التواصل بنجاح ');
        }
       return  view('admin.contact_us.add-contactus') ;
    }
    public  function deletecontactus($id =null)
    {
        Contact::where(['id'=>$id])->delete() ;
        return redirect()->back()->with('flash_message_success', 'لقد  تم حذف  بيانات التواصل بنجاح ');
    }




}
