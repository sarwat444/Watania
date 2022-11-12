<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fax ;
use Auth ;
use File ;
use App\FaxFiles ;
use App\Sector ;
use App\FaxViewer ;
use Validator;
class FaxController extends Controller
{
    public  function  fax()
    {
        $geha_ekhtesas = Sector::get() ;
        if(Auth::user()->role_id != 5) {
            $faxs = Fax::where('geha_ekhtesas', Auth::user()->sector_id)->orWhere('addedby', Auth()->user()->id)->get();
        }
        else
        {
            $faxs = Fax::get();
        }
        return  view('admin.fax.fax')->with(compact('faxs' ,'geha_ekhtesas')) ;
    }

    public function  addfax(Request $request)
    {

        if($request->isMethod('post'))
        {

            $files  = $request['files']  ;
                $validator = Validator::make($request->all(),[

                        'khas_geha'                 => 'required',
                        'kaed'                       => 'required',
                        'geha_ekhtesas'              => 'required',
                        'waght_fax'                  => 'required',
                        'sader_elgeha_number'        => 'required',
                        'sader_elgeha_date'         => 'required',
                        'esdar_date'                 => 'required',
                        'geha_fax'                   => 'required',
                        'description'                => 'required',

               ],[
                       'khas_geha.required'          => '  خاص بالجهه مطلوبه ',
                       'kaed.required'                  => ' رقم القيد مطلوب ',
                       'geha_ekhtesas.required'            => 'جهة الاختصاص مطلوبه ',
                       'waght_fax.required'        => '  وجهه الفاكس  مطلوبه ',
                       'sader_elgeha_number.required'         => '  صادر الجهه مطلوبه ',
                       'sader_elgeha_date.required'           => '  تاريخ الصادر  مطلوب ',
                       'description.required'           => '  وصف الفاكس مطلوب',
                       'geha_fax.required'           => '  جهه الفاكس  مطلوب',

               ],[]);
               if ($validator->fails()) {
                     return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
               }


                $request= request()->except(['_token','files']);
                $fax =  Fax::create($request);

            //Uploading Files
             $path = "uploads/fax/";
             if (!File::isDirectory($path)) {
                 File::makeDirectory($path, 0777, true, true);
             }

             $akds = [];
if(!empty($files)) {
    foreach ($files as $file) {

        $file_name = rand(0, 1000) . '_' . time() . $file->getClientOriginalName();
        $file->move($path, $file_name);
        $akds[] = [
            'path' => $file_name,
            "fax_id" => $fax->id
        ];
    }
    if (count($akds) > 0) {
        FaxFiles::insert($akds);
    }

}
          return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه المكاتبه  بنجاح ');
        }
        $gehas = Sector::get() ;
        return  view('admin.fax.add-fax')->with(compact('gehas')) ;

    }

    //view  specific  service


    public  function  viewfax($id = null)
    {
        $geha_ekhtesas = Sector::get() ;
        $faxdetails = Fax::with('files')->where(['id'=>$id])->first() ;
        return  view('admin.fax.view-fax')->with(compact('faxdetails' , 'geha_ekhtesas')) ;

    }

    public  function  printfax($id = null)
    {
        $geha_ekhtesas = Sector::get() ;
        $faxdetails = Fax::with('files')->where(['id'=>$id])->first() ;
        return  view('admin.fax.print.view-fax')->with(compact('faxdetails' , 'geha_ekhtesas')) ;

    }
      public  function  editfax (Request  $request ,  $id =null)
       {

        if($request->isMethod('post')) {

            $files  = $request['files']  ;

            $validator = Validator::make($request->all(), [

                        'khas_geha'                 => 'required',
                        'kaed'                       => 'required',
                        'geha_ekhtesas'              => 'required',
                        'waght_fax'                  => 'required',
                        'sader_elgeha_number'        => 'required',
                        'sader_elgeha_date'         => 'required',
                        'esdar_date'                 => 'required',
                        'geha_fax'                   => 'required',
                        'description'                => 'required',

               ],[
                       'khas_geha.required'          => '  خاص بالجهه مطلوبه ',
                       'kaed.required'                  => ' رقم القيد مطلوب ',
                       'geha_ekhtesas.required'            => 'جهة الاختصاص مطلوبه ',
                       'waght_fax.required'        => '  وجهه الفاكس  مطلوبه ',
                       'sader_elgeha_number.required'         => '  صادر الجهه مطلوبه ',
                       'sader_elgeha_date.required'           => '  تاريخ الصادر  مطلوب ',
                       'description.required'           => '  وصف الفاكس مطلوب',
                       'geha_fax.required'           => '  جهه الفاكس  مطلوب',
            ], []);

            $request = request()->except(['_token','files']);

            Fax::where(['id' => $id])->update($request);

                //Uploading Files
                $path = "uploads/fax/";
                if (!File::isDirectory($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }

            $akds = [];
            if(!empty( $files) && count($files)> 0 )
            {

               $fakfiles =  FaxFiles::where('fax_id' , $id)->get() ;
                if(!empty($request['files'] )) {
                    foreach ($fakfiles as $fax) {
                        $fax->delete();
                    }

                    foreach ($files as $file) {

                        $file_name = rand(0, 1000) . '_' . time() . $file->getClientOriginalName();
                        $file->move($path, $file_name);
                        $akds[] = [
                            'path' => $file_name,
                            "fax_id" => $id
                        ];
                    }
                    if (count($akds) > 0) {
                        FaxFiles::insert($akds);
                    }
                }
            }


            return redirect()->back()->with('flash_message_success', 'لقد تم تعديل   الفاكس  بنجاح   ');

        }
        $gehas = Sector::get() ;
        $faxdetails =  Fax::with('files')->where(['id'=> $id])->first() ;
        return view('admin.fax.edit-fax')->with(compact('faxdetails' ,'gehas'));

    }

    public  function deletefax($id=null )
    {

         $fax  =  Fax::where(['id' => $id])->delete();
         return redirect()->back()->with('flash_message_success', 'لقد تم حذف  الفاكس   بنجاح  ');
    }
    public function redirectfax(Request $request , $id = null)
    {

        $data = $request->all();

        $fax  =  Fax::find($data['fax_id']);

        $fax->geha_ekhtesas =  $data['sector_id'] ;
        $fax->save() ;
        $successmessage = "<alert class='alert alert-success col-md-6'>تم توجيه الفاكس بنجاح </alert>" ;
        return $successmessage ;
    }

}
