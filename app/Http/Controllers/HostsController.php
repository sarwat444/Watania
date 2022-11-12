<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Host;
use App\HostService;
use Illuminate\Http\Request;
use Validator;
class HostsController extends Controller
{
    public  function  hosts()
    {
       $allhosts = Host::get() ;
       $hosts = json_decode(json_encode($allhosts)) ;
       return  view('admin.host.hosting')->with(compact('hosts')) ;
    }

    public function  addhost(Request $request)
    {
        if($request->isMethod('post'))
        {

              $validator = Validator::make($request->all(),[

                      'name'                       => 'required|max:255',
                      'price'                      => 'required',
                      'status'                     => 'required',
               ],[
                     'name.required'               => 'اسم الهوست مطلوب',
                     'price.required'              => 'السعر مطلوب',
                     'status.required'             =>  'الحاله مطلوبه',
             ],[]);
             if ($validator->fails()) {
                   return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
            }
            $request['services'] = json_decode($request->services);

            $rules = [];
            $rules += ['name' => ['required', 'max:255']];
            $rules += ['price' => ['required']];
            $request->validate($rules);
            $request_data = $request->all();
            $hostdata =   Host::create($request_data);
            foreach($request->services as $service)
            {
                HostService::create([
                    'name' =>   $service ,
                    'host_id' => $hostdata->id
                ]);
            }
            return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه الاستضافه   بنجاح ');
        }
        return  view('admin.host.add-host') ;

    }
    public  function  edithost(Request $request , $id=null)
    {
        if($request->isMethod('post'))
        {

            $validator = Validator::make($request->all(),[

                      'name'                       => 'required|max:255',
                      'price'                      => 'required',
                      'status'                     => 'required',
               ],[
                     'name.required'               => 'اسم الهوست مطلوب',
                     'price.required'              => 'السعر مطلوب',
                     'status.required'             =>  'الحاله مطلوبه',
             ],[]);
             if ($validator->fails()) {
                   return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
            }
            $request['services'] = json_decode($request->services);
     /*
            $rules = [];
            $rules += ['name' => ['required', 'max:255']];
            $rules += ['price' => ['required']];
            $request->validate($rules);
            */
            $request_data = $request->except('_token');
            $hostdata =   Host::where(['id'=>$id])->update($request_data);
            $request->services()->delete();
            foreach($request->services as $service)
            {
                HostService::create([
                    'name' =>   $service ,
                    'host_id' => $hostdata->id
                ]);
            }
            return redirect()->back()->with('flash_message_success', 'لقد  تم تعديل   الاستضافه   بنجاح ');

        }
        $hostDetails  =  Host::with('services')->where(['id' => $id])->first() ;
        return  view('admin.host.edit-host')->with(compact('hostDetails')) ;

    }
      public  function  viewhost(Request $request , $id=null)
    {
        $hostDetails  =  Host::with('services')->where(['id' => $id])->first() ;
        return  view('admin.host.view-host')->with(compact('hostDetails')) ;

    }
    public  function deletehost($id=null)
    {
         $host  = Host::where(['id'=>$id])->first() ;
         HostService::where(['host_id' => $host->id])->delete() ;
         $host->delete() ;
         return redirect()->back()->with('flash_message_success', 'لقد  تم حذف    الاستضافه   بنجاح ');
    }
}
