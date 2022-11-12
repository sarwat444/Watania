<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Sector;
use Illuminate\Http\Request;
use Validator;
class sectorController extends Controller
{

    // Dispaly All Sectors

    public  function  sectors(Request $request)
    {
        $sectors  = Sector::paginate(50) ;
        return  view('admin.sectors.sectors')->with(compact('sectors')) ;
    }

    // Add New Sector
    public function  addsector(Request $request)
    {
        if ($request->isMethod('post'))
        {

            //Start  Validations

                    $rules = [];
                    $rules += ['sector_name' => ['required', 'max:255']];
                    $rules += ['ordering' => ['required']];
                    $request->validate($rules);

                    $validator = Validator::make($request->all(),[
                            'sector_name'                                 => 'required',
                     ],[
                           'sector_name.required'                            => 'اسم القطاع مطلوب',

                   ],[]);
                    if ($validator->fails()) {
                         return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
                     }

            //end validation
            $request_data = $request->all();
            //Add Request To Table
            $sector = Sector::create($request_data);
            return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه القطاع  بنجاح ');

        }
        return  view('admin.sectors.add-sector') ;

    }
    public  function  editsector(Request $request , $id  = null )
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {

          
            $validator = Validator::make($request->all(),[
                    'sector_name'                                 => 'required',
             ],[
                   'sector_name.required'                            => 'اسم القطاع مطلوب',

           ],[]);
            if ($validator->fails()) {
                 return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
             }

            $data = request()->except(['_token']);
            Sector::where(['id' => $id])->update($data) ;
            return redirect()->back()->with('flash_message_success', 'لقد تم تعديل   المشروع  بنجاح  ');
        }

        $details  =  Sector::where(['id' => $id])->first() ;
        $sectordetails = json_decode(json_encode($details));
        return  view('admin.sectors.edit-sector')->with(compact('sectordetails')) ;

    }

    public function deletesector($id)
    {
        Sector::where(['id' => $id ])->delete() ;
        return redirect()->back()->with('flash_message_success', 'لقد تم حذف  القطاع  بنجاح  ');
    }




}
