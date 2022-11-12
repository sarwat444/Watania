<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\mokaysa ;
use App\mokaysaFiles ;
use App\Project ;
use File ;
use App\MokaysaBnod ;
use  App\MokaysaOwnerModel ;
use Validator;
class mokaysaController extends Controller
{

    public function  addmokaysaowner(Request  $request , $id = NULL ,$status = null )
    {

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {

          $validator = Validator::make($request->all(),[


                  'status'                         => 'required',
                  'owner_name'                            => 'required',
           ],[

                 'status.required'                        => 'الحاله مطلوبه',
                 'owner_name.required'                           => 'المالك مطلوب',

         ],[]);
         if ($validator->fails()) {
               return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
        }

            $request= $request->all() ;
            $owner  =  MokaysaOwnerModel::create($request);
            return redirect()->back()->with('flash_message_success', 'لقد  تمت الاضافه بنجاح ');
        }

        $projectDetails = Project::where(['id' => $id])->first() ;
        return view('admin.mokaysa.add-mokaysaowner')->with(compact('projectDetails' , 'status')) ;

     }




     // View  All  Mokaysat

     public  function mokaysat(Request  $request , $id = NULL ,$status = null)
     {
             $mokaysat  =  mokaysa::where(['project_id'=> $id])->get() ;
             $projectDetails = Project::where(['id' => $id])->first() ;
             return view('admin.mokaysa.mokysat')->with(compact('id','status','mokaysat' ,'projectDetails'));

     }



    public  function addmokaysa(Request $request , $id = NULL ,$status = null )
    {

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {


            $rules = [] ;
            $rules += ['owners' => ['required']] ;
            $request->validate($rules) ;
            $request['owners'] = json_decode($request->owners);

            $data= $request->except('files') ;

            $mokaysa =  mokaysa::create($data);


            //Uploading Files
            $path = "uploads/mokaysa/";
            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $korasat = [];
            if(!empty($request['files'])) {
                foreach ($request['files'] as $file) {

                    $file_name = rand(0, 1000) . '_' . time() . $file->getClientOriginalName();
                    $file->move($path, $file_name);
                    $korasat[] = [
                        'path' => $file_name,
                        "mokaysa_id" => $mokaysa->id
                    ];
                }
            }
            if (count($korasat) > 0) {
                mokaysaFiles::insert($korasat);
            }


            foreach($request['owners'] as $index=>$owner)
            {
                MokaysaOwnerModel::create([
                                'owner_name' =>   $owner ,
                                'mokaysa_id' =>  $mokaysa->id
                    ]);
            }

                     return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه المقايسه   بنجاح ');
        }

      $projectDetails = Project::where(['id' => $id])->first() ;
      return view('admin.mokaysa.add-mokaysa')->with(compact('projectDetails' , 'status' ));
    }
    public  function editmokaysa(Request $request  , $id = null )
    {

        if($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'name' => 'required',

            ], [
                'name.required' => '  اسم المقايسه مطلوب   ',
            ], []);


            $data = request()->except(['_token', 'owners','mokaysa_id', 'outer-group' ,'files']);

            mokaysa::where(['id' => $id])->update($data);

            $owners = json_decode($request->owners);

            $korasa_owners = MokaysaOwnerModel::where('mokaysa_id', $id)->get();

            if (!empty($korasa_owners) || count($korasa_owners) > 0 ) {
                foreach($korasa_owners as $owner) {
                    $owner->delete();
                }
                foreach ($owners as  $key =>  $owner) {
                    MokaysaOwnerModel::create([
                        'owner_name' => $owner,
                        'mokaysa_id' =>$request->mokaysa_id
                    ]);
                }

            }

                //Uploading Files
                $path = "uploads/mokaysa/";
                if (!File::isDirectory($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }

                $akds = [];
            if(!empty($request['files']) && count($request['files'])> 0 )
            {

               $korasatfiles =  mokaysaFiles::where('mokaysa_id' , $id)->get() ;

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
                        "mokaysa_id" =>$id
                        ];
                }
                if (count($akds) > 0) {
                    mokaysaFiles::insert($akds);
                }
            }


            return redirect()->back()->with('flash_message_success', 'لقد تم تعديل   المقايسه  بنجاح   ');

        }
        $mokaysa_detals =  mokaysa::with('files')->where(['id'=> $id])->first() ;
        $projectDetails=   Project::where(['id' => $mokaysa_detals->project_id])->first() ;
        return view('admin.mokaysa.edit_mokaysa')->with(compact('mokaysa_detals' , 'projectDetails'));
    }
    public function  addbnood(Request $request, $id= null  )
    {

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            $request= $request->all() ;
            $mokaysa =  MokaysaBnod::create($request);
            return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه بنود  المقايسه   بنجاح ');

        }


     $mokaysa  = mokaysa::where(['id' =>$id])->first() ;
     return view('admin.mokaysa.add-mokaysa-bnood')->with(compact('mokaysa'));

    }
    public function viewmokaysa($id = null )
    {

        $mokaysaDetails = mokaysa::with('bnood')->with('files')->where(['id' => $id])->first() ;
        return view('admin.mokaysa.view-mokaysa')->with(compact('mokaysaDetails')) ;
    }





    public function appendmokaysa(Request  $request ,  $project_id =null , $status = null)
    {
        if($request->isMethod('post')) {
            $data = $request->all();
            mokaysa::create($data);
            return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه بند المقايسه   بنجاح ');
        }

    }
}
