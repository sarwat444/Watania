<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Akd ;
use App\AkdFiles ;
use App\Project ;
use File ;
use Validator;
class AkdController extends Controller
{
    public  function addakd(Request $request , $id = NULL)
    {

         if($_SERVER['REQUEST_METHOD'] == 'POST')
         {

            /*
             $rules = [] ;
             $rules += ['document' => ['required']] ;
             $request->validate($rules) ;
            */
            /* $request['owners'] = json_decode($request->owners);
             $request['values'] = json_decode($request->values);*/

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
             $akd =  Akd::create($data);

            //Uploading Files
             $path = "uploads/akd/";
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
                         "akd_id" => $akd->id
                     ];
                 }
                 if (count($akds) > 0) {
                     AkdFiles::insert($akds);
                 }
             }

          return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه  العقد   بنجاح ');
        }


      $projectDetails = Project::where(['id' => $id])->first() ;

      $akds  = Akd::with('files')->where(['project_id' =>  $id])->first() ;

      return view('admin.akd.akd')->with(compact('akds' ,'projectDetails'));

}
	public function  akwad(Request $request, $id = null)
	{
		$projectDetails = Project::where(['id' => $id])->first() ;
		$akwads  =  Akd::where('project_id' , $projectDetails->id)->get() ;
		return  view('admin.akd.akwad')->with(compact('akwads' ,'projectDetails'));
	}
	public function viewakd($id = null )
	{

		$akd_details  =  Akd::with('files')->where(['id' => $id])->first() ;
		$projectDetails = Project::where(['id' => $akd_details->project_id])->first() ;
		return  view('admin.akd.view_akd')->with(compact('akd_details' , 'projectDetails'));
	}
	public function deleteakd($id = null)
	{
		Akd::where('id',$id )->delete() ;
	    return redirect()->back()->with('flash_message_success', 'لقد تم حذف العقد بنجاح ');
	}
    public function  editakd(Request $request  ,  $id = null )
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
                    $akd = Akd::where(['id' => $id])->update($data);



                    //Uploading Files
                    $path = "uploads/akd/";
                    if (!File::isDirectory($path)) {
                        File::makeDirectory($path, 0777, true, true);
                    }

                    $akds = [];
                if(!empty($request['files']) && count($request['files'])> 0 )
                {

                   $akdfiles =  AkdFiles::where('akd_id' , $id)->get() ;
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
                            "akd_id" =>$id
                            ];
                    }
                    if (count($akds) > 0) {
                        AkdFiles::insert($akds);
                    }
                }
                    return redirect()->back()->with('flash_message_success', 'لقد  تم تعديل   العقد   بنجاح ');

            }


        }
        $akd_details  =  Akd::with('files')->where(['id' => $id])->first() ;
		$projectDetails = Project::where(['id' => $akd_details->project_id])->first() ;
		return  view('admin.akd.edit_akd')->with(compact('akd_details' , 'projectDetails'));

    }
}


