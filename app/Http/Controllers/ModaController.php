<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Moda ;
use App\Project ;
use Carbon\Carbon;
use Validator;

class ModaController extends Controller
{

    public function moda($id = null){

        $moda  = Moda::where(['project_id' => $id])->paginate(60) ;
        $projectDetails = Project::where(['id' => $id])->first() ;
        return  view('admin.moda.moda')->with(compact('moda' ,'projectDetails')) ;
    }
    public function addmoda(Request $request , $id  = null )
    {

        if ($request->isMethod('post')) {

          $validator = Validator::make($request->all(),[

                  'project_start'                       => 'required',
                  'project_end'                         => 'required',
                  'programe'                            => 'required',

                  // 'initial_receipt_value'            => 'required',
                  // 'actual_receipt_value'             => 'required',
                  // 'work_carried_out_value'           => 'required',
                  // 'total_bussiness'                  => 'required',
           ],[
                 'project_start.required'                      =>  'بداية المشروع مطلوبه',
                 'project_end.required'                        => 'نهايةالمشروع مطلوبه',
                 'programe.required'                           => 'البرنامج الزمنى مطلوب',
                 'initial_receipt_value.required'              => 'القيمة الابتدائيه للتعاقد مطلوبه',
                 'actual_receipt_value.required'               => 'القيمةالفعليه للتعاقد مطلوبه',
                 'total_bussiness.required'                    =>  'الاجمالى مطلوب',
         ],[]);
         if ($validator->fails()) {
               return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
        }

            $request['project_start'] = Carbon::createFromFormat('d M, Y', $request->project_start)->format('Y/m/d');
            $request['project_end'] = Carbon::createFromFormat('d M, Y', $request->project_end)->format('Y/m/d');
            $request_data = $request->except('_token');

            Moda::create($request_data);

            return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه  المده الأضافيه  بنجاح ');
        }
        $projectDetails = Project::where(['id' => $id])->first() ;
        return  view('admin.moda.add-moda')->with(compact('projectDetails')) ;


    }
    public function deletemoda(Request $requst  ,  $id = null )
    {
        Moda::where(['id' => $id ])->delete() ;
        return  redirect()->back()->with('flash_message_success' , 'تم حذف  المده الاضافيه  بنجاح ') ;
    }
    public function editmoda(Request $request , $id = null )
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {


              $validator = Validator::make($request->all(),[

                      'project_start'                       => 'required',
                      'project_end'                         => 'required',
                      'programe'                            => 'required',

                      'project_id'                         => 'required',
                      'amalmonfazavaliue' => 'required',
                      'egmalykemaamal' => 'required',
                      'nesbatanfeez' => 'required',
                      'time_added' => 'required',
                      'estlam_date' => 'required',
                      'estlam_fely' => 'required'

               ],[]);
           if ($validator->fails()) {
                   return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
            }

              $data = request()->except(['_token']);
              Moda::where(['id' => $id])->update($data) ;
              return redirect()->back()->with('flash_message_success', 'لقد تم تعديل   بيانات  المده الاضافيه   بنجاح  ');

        }

       $details  =  Moda::where(['id' => $id])->first() ;
       $modaedafa = json_decode(json_encode($details));
       $projectDetails = Project::where(['id' => $modaedafa->project_id])->first() ;
       return  view('admin.moda.edit-moda')->with(compact('modaedafa' , 'projectDetails')) ;

    }

    public function  viewmoda($id = null )
    {
        $modaDetails = Moda::where(['id' => $id])->first() ;
        $projectDetails = Project::where(['id' => $modaDetails->project_id])->first() ;
        return view('admin.moda.view-moda')->with(compact('modaDetails' , 'projectDetails')) ;

    }

}
