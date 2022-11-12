<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Other ;
use App\OtherFiles ;
use App\Project ;
use File ;
use Validator;
class othercontroller extends Controller
{

    public function  other(Request $request, $id = null)
	{
		$projectDetails = Project::where(['id' => $id])->first() ;
		$others      =  Other::where('project_id' , $projectDetails->id)->get() ;
		return  view('admin.other.other')->with(compact('others' ,'projectDetails'));
	}
    public  function addother(Request $request , $id = NULL)
    {

         if($_SERVER['REQUEST_METHOD'] == 'POST')
         {

             $validator = Validator::make($request->all(),[

                     'content'               => 'required',
                     'project_id'          => 'required',

            ],[
                    'content.required'          => 'محتوى البيانات  مطلوب',

            ],[]);
            if ($validator->fails()) {
                  return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
            }
             $data = $request->except('files') ;
             $akd =  Other::create($data);

            //Uploading Files
             $path = "uploads/other/";
             if (!File::isDirectory($path)) {
                 File::makeDirectory($path, 0777, true, true);
             }

             $akds = [];
              if(!empty($request['files'])) {
                  foreach ($request['files'] as $file) {

                      $file_name = rand(0, 1000) . '_' . time() . $file->getClientOriginalName();
                      $file->move($path, $file_name);
                      $akds[] = [
                          'path' => $file_name,
                          "other_id" => $akd->id
                      ];
                  }
              }
            if (count($akds) > 0) {
                OtherFiles::insert($akds);
            }


          return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه  بيانات اخري   بنجاح ');
        }


      $projectDetails = Project::where(['id' => $id])->first() ;
      $akds  = Other::with('files')->where(['project_id' =>  $id])->first() ;
      return view('admin.other.add_other')->with(compact('akds' ,'projectDetails'));

}




	public function viewother($id = null )
	{

		$akd_details  =  Other::with('files')->where(['id' => $id])->first() ;
		$projectDetails = Project::where(['id' => $akd_details->project_id])->first() ;
		return  view('admin.other.view_other')->with(compact('akd_details' , 'projectDetails'));
	}
	public function deleteother($id = null)
	{
		Other::where('id',$id )->delete() ;
	    return redirect()->back()->with('flash_message_success', 'لقد تم حذف العقد بنجاح ');
	}
    public function  editother (Request $request  ,  $id = null )
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
                    $akd = Other::where(['id' => $id])->update($data);



                    //Uploading Files
                    $path = "uploads/akd/";
                    if (!File::isDirectory($path)) {
                        File::makeDirectory($path, 0777, true, true);
                    }

                    $akds = [];
                if(!empty($request['files']) && count($request['files'])> 0 )
                {

                   $akdfiles =  OtherFiles::where('other_id' , $id)->get() ;
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
                            "other_id" =>$id
                            ];
                    }
                    if (count($akds) > 0) {
                        OtherFiles::insert($akds);
                    }
                }
                    return redirect()->back()->with('flash_message_success', 'لقد  تم تعديل   البيانات   بنجاح ');

            }


        }
        $akd_details  =  Other::with('files')->where(['id' => $id])->first() ;
		$projectDetails = Project::where(['id' => $akd_details->project_id])->first() ;
		return  view('admin.other.edit_other')->with(compact('akd_details' , 'projectDetails'));

    }
}


