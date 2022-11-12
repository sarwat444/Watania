<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\mokaysa;
use App\Mostaklas;
use App\MostaklasFiles;
use App\Project;
use File;
use Illuminate\Http\Request;
use Validator;
class mostaklasController extends Controller
{
    public function  mostaklasat(Request $request ,$id=null ,$status=null)
    {
        $projectDetails = Project::where(['id' => $id])->first() ;

        $mostaklasat  =    Mostaklas::where(['project_id'=> $id])->get() ;

        return view('admin.mostaklas.mostaklas')->with(compact('mostaklasat' ,'projectDetails' , 'status'));

    }
    public  function addmostaklas(Request $request , $id = NULL ,$status = null )
    {

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        $validator = Validator::make($request->all(),[

                'date'                                   => 'required',
                'value'                                  => 'required',
                'signature_name'                         => 'required',


         ],[
               'date.required'                            => 'التاريخ مطلوب',
               'value.required'                           => 'القيمه مطلوبه',
               'signature_name.required'                  => 'اسم التوقيع مطلوب',

       ],[]);
        if ($validator->fails()) {
             return redirect()->back()->withErrors($validator);
         }


        $data = $request->except('files') ;

        $mostaklas =  Mostaklas::create($data);

                  //Uploading Files
                  $path = "uploads/mostaklas/";
                  if (!File::isDirectory($path))
                  {
                      File::makeDirectory($path, 0777, true, true);
                  }

                  $akds = [];
              if(!empty($request['files']) && count($request['files'])> 0 )
              {

                 $korasatfiles =  MostaklasFiles::where('mostaklas_id' , $id)->get() ;
                 foreach ($korasatfiles as $akdfile)
                 {
                  $akdfile->delete() ;
                 }

                  foreach ($request['files'] as $file)
                  {

                      $file_name =  rand(0,1000).'_'.time().$file->getClientOriginalName();
                      $file->move( $path,$file_name);
                          $akds[] = [
                          'path' => $file_name ,
                          "mostaklas_id" =>$mostaklas->id
                          ];
                  }
                  if (count($akds) > 0) {
                       MostaklasFiles::insert($akds);
                  }
              }


        return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه المستخلص   بنجاح ');

    }

    //project Details For Side bar

    $projectDetails = Project::where(['id' => $id])->first() ;
    $mostaklasat  = Mostaklas::with('files')->where(['project_id' =>$id ,'status' => $status])->first() ;
    return view('admin.mostaklas.add_mostaklas')->with(compact('mostaklasat' ,'projectDetails' , 'status'));

    }

    public function edit_mostaklas(Request $request , $id = NULL ,$status = null )
    {

        if($request->isMethod('post'))
        {
            $validator = Validator::make($request->all(),[

                'date'                                   => 'required',
                'value'                                  => 'required',
                'signature_name'                         => 'required',
                'status'                                 => 'required'

         ],[
               'date.required'                            => 'التاريخ مطلوب',
               'value.required'                           => 'القيمه مطلوبه',
               'signature_name.required'                  => 'اسم التوقيع مطلوب',
               'status.required'                          => 'الحاله مطلوبه',
       ],[]);
        if ($validator->fails()) {
             return redirect()->back()->withErrors($validator);
         }


        $data = $request->except('files') ;

        $mostaklas =  Mostaklas::where('id', $id)->update($data);

                  //Uploading Files
                  $path = "uploads/mostaklas/";
                  if (!File::isDirectory($path))
                  {
                      File::makeDirectory($path, 0777, true, true);
                  }

                  $akds = [];
              if(!empty($request['files']) && count($request['files'])> 0 )
              {

                 $korasatfiles =  MostaklasFiles::where('mostaklas_id' , $id)->get() ;
                 foreach ($korasatfiles as $akdfile)
                 {
                  $akdfile->delete() ;
                 }

                  foreach ($request['files'] as $file)
                  {

                      $file_name =  rand(0,1000).'_'.time().$file->getClientOriginalName();
                      $file->move( $path,$file_name);
                          $akds[] = [
                          'path' => $file_name ,
                          "mostaklas_id" =>$id
                          ];
                  }
                  if (count($akds) > 0) {
                       MostaklasFiles::insert($akds);
                  }
              }


             return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه المستخلص   بنجاح ');

        }
        $mostaklas = Mostaklas::with('files')->where(['id' =>$id])->first() ;
        $projectDetails = Project::where(['id' => $mostaklas->project_id])->first() ;
        return view('admin.mostaklas.edit_mostalklas')->with(compact('mostaklas' ,'projectDetails' , 'status'));
    }

    public function viewmostaklas ($id = null )
    {

        $motaklas = Mostaklas::with('files')->where(['id' => $id])->first() ;
        $projectDetails = Project::where(['id' => $motaklas->project_id])->first() ;
        return view('admin.mostaklas.view_mostaklas')->with(compact('motaklas' ,'projectDetails')) ;
    }
    public  function deletemostaklas ($id = null )
    {
        Mostaklas::where(['id' => $id])->delete() ;
        return redirect()->back()->with('flash_message_success', 'لقد  تم حذف  المستخلص   بنجاح ');
    }



}
