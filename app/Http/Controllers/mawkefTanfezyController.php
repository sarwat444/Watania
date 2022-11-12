<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\mawkefTanfezy;
use App\mawkefTanfezyFiles ;
use App\Project;
use File ;
use Carbon\Carbon ;
use Illuminate\Http\Request;
use Validator;

class mawkefTanfezyController extends Controller
{
    public  function mawkeftanfezy(Request $request , $id = NULL ,$status = null)
    {
        $projectDetails = Project::where(['id' => $id])->first() ;
        $mawkefs  = mawkefTanfezy::with('files')->where(['project_id' =>$id])->get() ;
        return view('admin.mawkef_tanfezy.mawkef_tanfezy')->with(compact('mawkefs' ,'projectDetails' , 'status'));

    }
    public function add_mawkef_tanfezy(Request $request , $id = NULL ,  $status = null )
    {



        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {


            $validator = Validator::make($request->all(),[

                    'project_contents'         => 'required',
                    'status'                      => 'required',
                    'project_id'                       => 'required',
                    'project_start'                     => 'required',
                    'project_end'                       => 'required',
                    'contract_value'                      => 'required' ,
                    'contract_date'                       => 'required',
                    'execuation_percent'                      => 'required',
                    'monsarf'                     => 'required',
                    'monsarf_percent'                       => 'required',
                    'estechary_office'                     => 'required',
                    'contract_value'                      => 'required' ,
                    'notes'                     => 'required',

             ],[
                   'project_contents.required'               => 'المحتوى مطلوب',
                   'contract_date.required'              => 'تاريخ العقد مطلوب',
                   'project_start.required'             =>  'بداية المشروع مطلوبه',
                   'project_end.required'               => 'نهايةالمشروع مطلوبه',
                   'execuation_percent.required'              => 'نسبة التنفيذ',
                   'monsarf.required'             =>  'المنصرف مطلوب',
                   'monsarf_percent.required'               => 'نسبة المنصرف مطلوبه',
                   'contract_value.required'              => 'قيمة التعاقد مطلوبه',
                   'estecary_office.required'              => '',
                   'notes.required'             =>  'الملاحظات مطلوبه',
                   'estechary_office.required'  => 'المكتب الاستشاري مطلوب ' ,
                   'project_id.required'               => 'المشروع مطلوب',
                   'status.required'              => 'الحاله مطلوبه',

           ],[]);
           if ($validator->fails()) {
                 return redirect()->back()->withErrors($validator);

          }
            $data = $request->all();


            $data['project_start'] = Carbon::createFromFormat('d M, Y' ,  $data['project_start'])->format('Y-m-d');
            $data['project_end'] =   Carbon::createFromFormat('d M, Y' , $data['project_end'])->format('Y-m-d');


            $mawkef =  mawkefTanfezy::create($data);
            return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه البيانات    بنجاح ');
        }


        $projectDetails= Project::where(['id' => $id])->first() ;
        return view('admin.mawkef_tanfezy.add_mawkef_tanfezy')->with(compact('projectDetails' , 'status'));

    }


    public function edit_mawkef_tanfezy(Request $request , $id = null )
    {
       if($request->isMethod('post'))
       {
        $validator = Validator::make($request->all(),[

            'project_contents'         => 'required',
            'status'                      => 'required',
            'project_id'                       => 'required',
            'project_start'                     => 'required',
            'project_end'                       => 'required',
            'contract_value'                      => 'required' ,
            'contract_date'                       => 'required',
            'execuation_percent'                      => 'required',
            'monsarf'                     => 'required',
            'monsarf_percent'                       => 'required',
            'estechary_office'                     => 'required',
            'contract_value'                      => 'required' ,
            'notes'                     => 'required',

     ],[
           'project_contents.required'               => 'المحتوى مطلوب',
           'contract_date.required'              => 'تاريخ العقد مطلوب',
           'project_start.required'             =>  'بداية المشروع مطلوبه',
           'project_end.required'               => 'نهايةالمشروع مطلوبه',
           'execuation_percent.required'              => 'نسبة التنفيذ',
           'monsarf.required'             =>  'المنصرف مطلوب',
           'monsarf_percent.required'               => 'نسبة المنصرف مطلوبه',
           'contract_value.required'              => 'قيمة التعاقد مطلوبه',
           'estecary_office.required'              => '',
           'notes.required'             =>  'الملاحظات مطلوبه',
           'estechary_office.required'  => 'المكتب الاستشاري مطلوب ' ,
           'project_id.required'               => 'المشروع مطلوب',
           'status.required'              => 'الحاله مطلوبه',

   ],[]);
    if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);

    }
    $data = $request->except('_token');
    /*
    $data['project_start'] = Carbon::createFromFormat('d M, Y' ,  $data['project_start'])->format('Y-m-d');
    $data['project_end'] =   Carbon::createFromFormat('d M, Y' , $data['project_end'])->format('Y-m-d');

*/
     $mawkef =  mawkefTanfezy::where('id' , $id)->update($data);

     return redirect()->back()->with('flash_message_success', 'لقد  تم تعديل   البيانات    بنجاح ');

       }
       $mawkef_tanfezy_details = mawkefTanfezy::where(['id' => $id])->first() ;
       $projectDetails = Project::where(['id' => $mawkef_tanfezy_details->project_id])->first() ;
       return view('admin.mawkef_tanfezy.edit_mawkeftanfezy')->with(compact('mawkef_tanfezy_details' , 'projectDetails'));

    }
   public function delete_mawkef_tanfezy($id= null )
   {
     mawkefTanfezy::where('id' , $id)->delete();
     return redirect()->back()->with('flash_message_success', 'لقد  تم  حذف  البيانات    بنجاح ');
   }
    public  function  viewmawkef(Request  $request  , $id= null )
    {
        $motaklas=  mawkefTanfezy::where(['id'=> $id])->first() ;
        $projectDetails  =   Project::where(['id' => $motaklas->project_id])->first() ;
        return view('admin.mawkef_tanfezy.view_mawkef')->with(compact('motaklas' ,  'projectDetails'));

    }

}
