<?php

namespace App\Http\Controllers;

use App\Host;
use App\HostService;
use App\Http\Controllers\Controller;
use App\projectConsult;
use App\projectOwner;
use Illuminate\Http\Request;
use App\Icone ;
use  App\Project ;
use  App\Eltezam ;
use  App\Akd ;
use  Auth ;
use PDF ;
use  App\amrEsnad ;
use  App\korasa_eshtertat ;
use  App\mawkefTanfezy ;
use  App\Mostaklas ;
use Carbon\Carbon;
use App\PortofolioLink ;
use App\PortofolioImage ;
use App\ProjectType  ;
use App\sector ;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Validator;

class ProjectsController extends Controller
{

    public  function  projects(Request $request)
    {
       if(Auth::user()->role_id == 1 || Auth::user()->role_id == 5 ){
       $allprojects  = Project::get() ;
       }
       else
       {
        $allprojects  = Project::where('sector', Auth::user()->sector_id )->get();
       }
       $sectors = sector::get() ;
       return  view('admin.projects.projects')->with(compact('allprojects' , 'sectors')) ;
    }

    public  function  printprojects(Request $request)
    {
       if(Auth::user()->role_id == 1 ){
       $allprojects  = Project::get() ;
       }
       else
       {
        $allprojects  = Project::where('sector', Auth::user()->sector_id )->get();
       }
       $sectors = sector::get() ;

       return view('admin.projects.print.projects', compact('allprojects' , 'sectors'));
    }


    public  function  printproject(Request $request , $id= null)
    {
        $projectDetails = Project::with('owners')->with('consults')->where(['id' => $id])->first() ;
        $eltezam = Eltezam::where('project_id', $id )->first() ;
        $akd = Akd::where('project_id' ,$id)->first() ;
        $amresand  = amrEsnad::where('project_id' , $id)->first() ;
        $korasa = korasa_eshtertat::where('project_id' , $id)->first() ;
        $mawkef = mawkefTanfezy::where('project_id' , $id)->first() ;
        $mostaklas = Mostaklas::where('project_id' , $id)->first() ;

        return view('admin.projects.print.view-project', compact('projectDetails' ,'eltezam' ,'akd' , 'amresand' ,'korasa' ,'mawkef' ,'mostaklas')) ;
    }




    public function  addproject(Request $request)
    {


       if ($request->isMethod('post'))
       {

         $validator = Validator::make($request->all(),[

                 'title'               => 'required|string',
                 'start_date'          => 'required',
                 'end_date'            => 'required',
                 'sector'              => 'required|string',
                 'project_status'      => 'required',
                 'project_type'        => 'required',
                 'description'         => 'required|string',
                 'wataniaresp'         => 'required|string',
                 'take_amount'          => 'required|numeric',
                 'need_amount'          => 'required|numeric',
                 'total_amount'         => 'required|numeric',
                 'esteshary_total'      => 'required|numeric',
                 'baten_amount'         => 'required|numeric'
        ],[
                'title.required'          => 'اسم المشروع مطلوب',
                'title.string'            => 'اسم المشروع يجب ان يكون حروف',
                'start_date.required'     => 'تاريخ بداية المشروع مطلوب',
                'end_date.required'       => 'تاريخ نهاية المشروع مطلوب',
                'sector.string'           =>  'اسم قطاع المشروع يجب ان يكون حروف',
                'sector.required'         => 'اسم قطاع المشروع مطلوب',
                'project_status.required' => 'حالة المشروع مطلوبه',
                'project_type.required'   => 'نوع المشروع مطلوب',
                'description.string'      =>  'وصف المشروع يجب ان يكون حروف',
                'description.required'    => 'وصف المشروع مطلوب',
                'wataniaresp.string'      =>  'اسم المالك يجب ان يكون حروف',
                'wataniaresp.required'    => 'اسم المالك مطلوب',
                'need_amount.required'    => 'اجمالى القيمه الماليه للمالك مطلوبه ',
                'take_amount.required'    => 'ماتم دفعه للمالك ',
                'total_amount.required'    => 'اجمالى القيمه الماليه للباطن  مطلوبه  ',
                'baten_amount.required'    => 'ماتم  دفعه للباطن '
        ],[]);
        if ($validator->fails()) {
              return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
        }

        $request['start_date'] = Carbon::createFromFormat('d M, Y' , $request->start_date)->format('Y/m/d');
        $request['end_date'] = Carbon::createFromFormat('d M, Y' ,$request->end_date)->format('Y/m/d');


            $request['owners'] = json_decode($request->owners);
            $request['consults'] = json_decode($request->consults);

            $request_data = $request->all();




            $portofolio = Project::create($request_data);

            $project_type = new ProjectType() ;
            $project_type->project_id  = $portofolio['id']  ;
            $project_type->project_type_id  = $portofolio['project_status']  ;
            $project_type->save() ;

               foreach($request->owners as $owner)
               {
                   projectOwner::create([
                       'owner_name' =>   $owner ,
                       'project_id' => $portofolio->id
                   ]);
               }

           foreach($request->consults as $consult)
           {
               projectConsult::create([
                   'consult_name' =>   $consult ,
                   'project_id' => $portofolio->id
               ]);
           }



        return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه المشروع  بنجاح ');

    }

    $sectors = sector::get() ;
       $micones =  Icone::where(['type' => 1 ])->get() ;  // جلب  الروابط السوشيال  ميديا
       $sicones =  Icone::where(['type' => 2 ])->get() ; //جلب  الروابط الاجتماعيه
       return  view('admin.projects.add-project')->with(compact('micones' ,'sicones' ,'sectors')) ;

    }
    public  function  editproject(Request $request , $id  = null )
    {

         if($_SERVER['REQUEST_METHOD'] == 'POST') {

             $validator = Validator::make($request->all(), [

                 'title' => 'required|string',
                 'start_date' => 'required',
                 'end_date' => 'required',
                 'sector' => 'required|string',
                 'project_status' => 'required',
                 'project_type' => 'required',
                 'description' => 'required|string',
                 'wataniaresp' => 'required|string',
             ], [
                 'title.required' => 'اسم المشروع مطلوب',
                 'title.string' => 'اسم المشروع يجب ان يكون حروف',
                 'start_date.required' => 'تاريخ بداية المشروع مطلوب',
                 'end_date.required' => 'تاريخ نهاية المشروع مطلوب',
                 'sector.string' => 'اسم قطاع المشروع يجب ان يكون حروف',
                 'sector.required' => 'اسم قطاع المشروع مطلوب',
                 'project_status.required' => 'حالة المشروع مطلوبه',
                 'project_type.required' => 'نوع المشروع مطلوب',
                 'description.string' => 'وصف المشروع يجب ان يكون حروف',
                 'description.required' => 'وصف المشروع مطلوب',
                 'wataniaresp.string' => 'اسم المالك يجب ان يكون حروف',
                 'wataniaresp.required' => 'اسم المالك مطلوب',
             ], []);

                     $data = request()->except(['_token', 'owners', 'consults', 'outer-group']);
                     $updateddata = Project::where(['id' => $id])->update($data);

                     $project_type =  ProjectType::where('project_id' , $id)->first() ;
                     $project_type->project_type_id  = $request['project_status']  ;
                     $project_type->save() ;



                     $owners = json_decode($request->owners);
                     $consults = json_decode($request->consults);


                     $project_owners = projectOwner::where('project_id', $id)->get();
                     if (!empty($project_owners) || count($project_owners) > 0 ) {
                         foreach($project_owners as $consult) {
                             $consult->delete();
                         }
                         foreach ($owners as $owner) {
                             projectOwner::create([
                                 'owner_name' => $owner,
                                 'project_id' => $id
                             ]);
                         }

                     }
                     else
                     {
                         foreach ($owners as $owner) {
                             projectOwner::create([
                                 'owner_name' => $owner,
                                 'project_id' => $id
                             ]);
                         }
                     }




                     $project_consults = projectConsult::where('project_id', $id)->get();
                     if (!empty($project_consults) || count($project_consults) > 0 ) {
                         foreach($project_consults as $consult)
                         {
                             $consult->delete() ;
                         }
                         foreach($consults as $consult)
                         {
                             projectConsult::create([
                                 'consult_name' =>   $consult ,
                                 'project_id' => $id
                             ]);
                         }
                     }
                     else
                     {
                         foreach($consults as $consult)
                         {
                               projectConsult::create([
                                 'consult_name' =>   $consult ,
                                 'project_id' => $id
                             ]);
                         }
                     }


               return redirect()->back()->with('flash_message_success', 'لقد تم تعديل   المشروع  بنجاح  ');

         }


        $details  =  Project::with('images' ,'links')->where(['id' => $id])->first() ;
        $projectDetails = json_decode(json_encode($details));
        $sectors =  sector::get() ;
        $sIcons = Icone::where("type", 1)->get();
        $mIcons = Icone::where("type", 2)->get();
        return  view('admin.projects.edit-project')->with(compact('projectDetails' , 'sIcons' , 'mIcons' , 'sectors')) ;

    }
    public function viewproject($id = null)
    {

        $projectDetails = Project::with('owners')->with('consults')->where(['id' => $id])->first() ;
        $eltezam = Eltezam::where('project_id', $id )->first() ;
        $akd = Akd::where('project_id' ,$id)->first() ;
        $amresand  = amrEsnad::where('project_id' , $id)->first() ;
        $korasa = korasa_eshtertat::where('project_id' , $id)->first() ;
        $mawkef = mawkefTanfezy::where('project_id' , $id)->first() ;
        $mostaklas = Mostaklas::where('project_id' , $id)->first() ;
        return view('admin.projects.view-project')->with(compact('projectDetails' ,'eltezam' ,'akd' , 'amresand' ,'korasa' ,'mawkef' ,'mostaklas')) ;

    }
    public function deleteproject($id)
    {
        Project::where(['id' => $id ])->delete() ;
        return redirect()->back()->with('flash_message_success', 'لقد تم حذف  المشروع  بنجاح  ');
    }


}
