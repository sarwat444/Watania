<?php

namespace App\Http\Controllers;
use App\korasa_eshtertat ;
use App\Http\Controllers\Controller;
use App\Project ;
use App\KorasaEshtertatFiles ;
use App\korasaEshteratatOwner ;
use App\projectConsult;
use App\projectOwner;
use Illuminate\Http\Request;
use File ;
use Validator;
class korasaEshtertatController extends Controller
{
   public  function addkorasaeshteratat(Request $request , $id = NULL ,$status = null )
   {

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $data= $request->all();

            $rules = [] ;
            $rules += ['owners' => ['required']] ;
            $rules += ['values' => ['required']] ;
            $request->validate($rules) ;
            $request['owners'] = json_decode($request->owners);
            $request['values'] = json_decode($request->values);



            $data= $request->except('files') ;
            $korasa_eshtertat =  korasa_eshtertat::create($data);


            //Uploading Files
            $path = "uploads/korasa_eshteratat/";
            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $korasat = [];
if(!empty($request['files'] )) {
    foreach ($request['files'] as $file) {

        $file_name = rand(0, 1000) . '_' . time() . $file->getClientOriginalName();
        $file->move($path, $file_name);
        $korasat[] = [
            'path' => $file_name,
            "korasa_id" => $korasa_eshtertat->id
        ];
    }

            if (count($korasat) > 0) {
                KorasaEshtertatFiles::insert($korasat);
            }

}
            foreach($request['owners'] as $index=>$owner)
            {
                  korasaEshteratatOwner::create([
                                'owner_name' =>   $owner ,
                                'value' => intval($request['values'][$index]),
                                'korasa_id' =>  $korasa_eshtertat->id
                    ]);
            }


                     return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه الكراسه  بنجاح ');

        }
     //project Details For Side bar


     $projectDetails = Project::where(['id' => $id])->first() ;

     $korasa_eshtratat  = korasa_eshtertat::with('files')->where(['project_id' =>  $id  , 'status' => $status])->first() ;

     return view('admin.korasa_eshteratat.korasa')->with(compact('korasa_eshtratat' ,'projectDetails' , 'status'));
   }
   public function  korasat(Request $request ,$id=null ,$status=null)
   {
       $projectDetails = Project::where(['id' => $id])->first() ;

       $korasa_eshtratat  = korasa_eshtertat::where(['project_id'=> $id])->get() ;

       return view('admin.korasa_eshteratat.korasat')->with(compact('korasa_eshtratat' ,'projectDetails' , 'status'));
   }
   public function  edit_koras(Request $request , $id=null)
   {
       if($request->isMethod('post')) {
           $validator = Validator::make($request->all(), [
               'korasa_status' => 'required',
               'description' =>'required'
           ], [
               'korasa_status.required' => 'نوع الكراسه مطلوبه  ',
               'description.required' =>'وصف الكراسه مطلوب'
           ], []);


           $data = request()->except(['_token', 'owners', 'values','korasa_id', 'outer-group' ,'files']);
           korasa_eshtertat::where(['id' => $id])->update($data);

           $owners = json_decode($request->owners);
           $values = json_decode($request->values);

           $korasa_owners = korasaEshteratatOwner::where('korasa_id', $id)->get();

           if (!empty($korasa_owners) || count($korasa_owners) > 0 ) {
               foreach($korasa_owners as $owner) {
                   $owner->delete();
               }
               foreach ($owners as  $key =>  $owner) {
                   korasaEshteratatOwner::create([
                       'owner_name' => $owner,
                       'value' => $values[$key] ,
                       'korasa_id' =>$request->korasa_id
                   ]);
               }

           }
           else
           {
               foreach ($owners as  $key =>  $owner){
                   korasaEshteratatOwner::create([
                       'owner_name' => $owner,
                       'value' => $values[$key] ,
                       'korasa_id' =>$request->korasa_id
                   ]);
               }
           }



               //Uploading Files
               $path = "uploads/korasa_eshteratat/";
               if (!File::isDirectory($path)) {
                   File::makeDirectory($path, 0777, true, true);
               }

               $akds = [];
           if(!empty($request['files']) && count($request['files'])> 0 )
           {

              $korasatfiles =  KorasaEshtertatFiles::where('korasa_id' , $id)->get() ;
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
                       "korasa_id" =>$id
                       ];
               }
               if (count($akds) > 0) {
                    KorasaEshtertatFiles::insert($akds);
               }
           }


           return redirect()->back()->with('flash_message_success', 'لقد تم تعديل   الكراسه بنجاح   ');

       }
       $korasa_details =  korasa_eshtertat::with('files')->where(['id'=> $id])->first() ;
       $projectDetails=   Project::where(['id' => $korasa_details->project_id])->first() ;
       return view('admin.korasa_eshteratat.edit_korasa')->with(compact('korasa_details' , 'projectDetails'));
   }

   public  function  viewkorasa(Request  $request  , $id= null )
   {
    $korasa_details =  korasa_eshtertat::with('files')->with('korasamalekowners')->where(['id'=> $id])->first() ;
    $projectDetails  =   Project::where(['id' => $korasa_details->project_id])->first() ;
    return view('admin.korasa_eshteratat.view_korasa')->with(compact('korasa_details' ,  'projectDetails'));

   }


   public function  deletekorasa( $id= null )
   {

    korasa_eshtertat::where('id' ,  $id)->delete() ;
    return redirect()->back()->with('flash_message_success', 'لقد  تم حذف  الكراسه  بنجاح ');

   }
}
