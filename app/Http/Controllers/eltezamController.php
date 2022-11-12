<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use App\EltezamFile ;
use App\Eltezam;
use Validator;
use File ;
class eltezamController extends Controller
{
    public  function  index(Request $request, $id = null)
    {
        $projectDetails = Project::where(['id' => $id])->first() ;
		$eltezmat   =  Eltezam::where('project_id' , $id)->get() ;
		return  view('admin.eltezmat.eltezmat')->with(compact('eltezmat' ,'projectDetails'));
    }

    public  function  add(Request  $request  ,  $id = null)
    {

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {


            $validator = Validator::make($request->all(),[

                    'content'               => 'required',
                    'project_id'          => 'required',

           ],[
                   'content.required'          => 'محتوى المشروع مطلوب',

           ],[]);
           if ($validator->fails()) {
                 return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
           }
            $data = $request->except('files') ;
            $akd =  Eltezam::create($data);

           //Uploading Files
            $path = "uploads/eltezam/";
            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $akds = [];
            if(!empty($request['files'] )) {
                foreach ($request['files'] as $file) {

                    $file_name = rand(0, 1000) . '_' . time() . $file->getClientOriginalName();
                    $file->move($path, $file_name);
                    $akds[] = [
                        'path' => $file_name,
                        "eltezam_id" => $akd->id
                    ];
                }
                if (count($akds) > 0) {
                    EltezamFile::insert($akds);
                }
            }

         return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه  الألتزام    بنجاح ');
       }

            $projectDetails = Project::where(['id' => $id])->first() ;
            return view('admin.eltezmat.add_eltezam')->with(compact('projectDetails'));

    }
    public  function edit(Request $request   ,  $id  = null )
    {
        if($request->isMethod('post'))
        {

           $validator = Validator::make($request->all(),[
            'content'               => 'required'
            ],[]);


            if ($validator->fails()) {
                    return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
            }else
            {

                    $data = $request->except('files','_token') ;
                    $akd = Eltezam::where(['id' => $id])->update($data);



                    //Uploading Files
                    $path = "uploads/eltezam/";
                    if (!File::isDirectory($path)) {
                        File::makeDirectory($path, 0777, true, true);
                    }

                    $akds = [];
                if(!empty($request['files']) && count($request['files'])> 0 )
                {

                   $akdfiles =  EltezamFile::where('eltezam_id' , $id)->get() ;
                   foreach ($akdfiles as $akdfile)
                   {
                    $akdfile->delete() ;
                   }

                    foreach ($request['files'] as $file)
                    {

                        $file_name =  rand(0,1000).'_'.time().$file->getClientOriginalName();
                        $file->move( $path,$file_name);
                            $akds[] = [
                            'path' => $file_name ,
                            "eltezam_id" =>$id
                            ];
                    }
                    if (count($akds) > 0) {
                        EltezamFile::insert($akds);
                    }
                }
                    return redirect()->back()->with('flash_message_success', 'لقد  تم تعديل   الألتزام    بنجاح ');

            }


        }

        $eltezam_details  =  Eltezam::with('files')->where(['id' => $id])->first() ;
		$projectDetails = Project::where(['id' => $eltezam_details->project_id])->first() ;
		return  view('admin.eltezmat.edit_eltezam')->with(compact('eltezam_details' , 'projectDetails'));
    }
    public function  delete(Request  $request  , $id  = null  )
    {

        Eltezam::where('id',$id )->delete() ;
	    return redirect()->back()->with('flash_message_success', 'لقد تم حذف الألتزام  بنجاح ');
    }
    public  function  view (Request  $request  , $id  = null  )
    {

        $eltezam_details  =  Eltezam::with('files')->where(['id'=> $id])->first() ;
        $projectDetails  =   Project::where(['id' => $eltezam_details->project_id])->first() ;
        return view('admin.eltezmat.view_eltezam')->with(compact('eltezam_details' ,  'projectDetails'));

    }
}

