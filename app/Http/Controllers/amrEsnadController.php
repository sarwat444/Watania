<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\amrEsnad;
use App\Project;
use App\projectConsult;
use App\projectOwner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;
class amrEsnadController extends Controller
{

    //return all amr esnads
    public  function  amresnad(Request $request , $id=null , $status = null )
    {

        $projectDetails = Project::where(['id' => $id])->first() ;
        $amresnad  = amrEsnad::where(['project_id' =>  $id])->get()  ;
        return  view('admin.amresnad.awmeresnad')->with(compact('amresnad' , 'projectDetails')) ;
    }
    public function addamresnad(Request $request , $id=null ,  $status = null )
    {
        if ($request->isMethod('post')) {


          $validator = Validator::make($request->all(),[

                  'esnad_number'               => 'required|numeric',
                  'date'                       => 'required',
                  'geha_sader'                 => 'required',
                  'contract_value'             => 'required|numeric',
                  'start_project'              => 'required',
                  'end_project'                => 'required',

         ],[
                 'esnad_number.required'          => 'رقم الاسناد مطلوب',
                 'esnad_number.numeric'           => 'رقم الاسناد يجب ان يكون رقم',
                 'date.required'                  => 'التاريخ مطلوب',
                 'geha_sader.required'            => 'جهة الصادر',
                 'contract_value.required'        => 'قيمة العقد مطلوب',
                 'start_project.required'         => 'بداية المشروع مطلوب',
                 'end_project.required'           => 'نهاية المشروع مطلوب',
         ],[]);
         if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
     }
            $request['start_project'] = Carbon::createFromFormat('d M, Y', $request->start_project)->format('Y/m/d');
            $request['end_project'] = Carbon::createFromFormat('d M, Y', $request->end_project)->format('Y/m/d');


            $request_data = $request->except('_token');

            amrEsnad::create($request_data);

            return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه امر الاسناد  بنجاح ');
        }

        $projectDetails= Project::where(['id' => $id])->first() ;
        return view('admin.amresnad.add-amresnad')->with(compact('projectDetails' , 'status'));

    }

    public  function  editamresnad(Request $request , $id  = null )
    {
         if($_SERVER['REQUEST_METHOD'] == 'POST')
         {

           $validator = Validator::make($request->all(),[

                   'esnad_number'               => 'required|numeric',
                   'date'                       => 'required',
                   'geha_sader'                 => 'required',
                   'contract_value'             => 'required|numeric',
                   'start_project'              => 'required',
                   'end_project'                => 'required',

          ],[
                  'esnad_number.required'          => 'رقم الاسناد مطلوب',
                  'esnad_number.numeric'           => 'رقم الاسناد يجب ان يكون رقم',
                  'date.required'                  => 'التاريخ مطلوب',
                  'geha_sader.required'            => 'جهة الصادر',
                  'contract_value.required'        => 'قيمة العقد مطلوب',
                  'start_project.required'         => 'بداية المشروع مطلوب',
                  'end_project.required'           => 'نهاية المشروع مطلوب',
          ],[]);
          if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
          }
               $data = request()->except(['_token']);
               amrEsnad::where(['id' => $id])->update($data) ;
               return redirect()->back()->with('flash_message_success', 'لقد تم تعديل   بيانات أمر الاسناد   بنجاح  ');

         }

        $details  =  amrEsnad::where(['id' => $id])->first() ;
        $projectDetails = Project::where(['id' => $details->project_id])->first() ;
        $amresnadDetails = json_decode(json_encode($details));
        return  view('admin.amresnad.edit-amresnad')->with(compact('amresnadDetails' , 'projectDetails')) ;

    }
    public  function deleteamresnad($id)
    {
        amrEsnad::where(['id' => $id ])->delete() ;
        return  redirect()->back()->with('flash_message_success' , 'تم حذف أمر الأسناد بنجاح ') ;
    }


}
