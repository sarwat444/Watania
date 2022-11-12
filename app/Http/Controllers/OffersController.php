<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Offer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;
class OffersController extends Controller
{
    public  function  offers(Request $request)
    {
       $alloffers = Offer::get() ;
       $offers = json_decode( json_encode($alloffers))   ;
       return  view('admin.shows.shows')->with(compact('offers')) ;
    }

    public function  addoffer(Request $request)
    {
        if($request->isMethod('post'))
        {

          $validator = Validator::make($request->all(),[


                  'title'                                   => 'required',
                  'description'                             => 'required',
                  'start_date'                              => 'required',
                  'end_date'                                => 'required',



           ],[
                 'title.required'                                 => 'العنوان مطلوب',
                 'description.required'                           => 'الوصف مطلوب',
                 'start_date.required'                        => 'تاريخ الابتداء مطلوب',
                 'end_date.required'                                => 'تاريخ الانتهاء مطلوب',
         ],[]);
          if ($validator->fails()) {
               return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
           }

            $request['start_date'] = Carbon::createFromFormat('d M, Y' , $request->start_date)->format('Y/m/d');
            $request['end_date'] = Carbon::createFromFormat('d M, Y' ,$request->end_date)->format('Y/m/d');



            $rules = [];
            $rules += ['title' => ['required', 'max:255']];
            $rules += ['description' => ['required']];
            $rules += ['start_date' => ['required']];
            $rules += ['end_date' => ['required']];
            $request->validate($rules);

            $request_data = $request->all();
            Offer::create($request_data);
            return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه العرض   بنجاح ');

        }
        return  view('admin.shows.add-show') ;
    }
    public function  editoffer(Request $request  , $id = null  )
    {
        if($request->isMethod('post'))
        {

        $request['start_date'] = Carbon::createFromFormat('d ,M, Y' , $request->start_date)->format('Y/m/d');
        $request['end_date'] = Carbon::createFromFormat('d ,M, Y' ,$request->end_date)->format('Y/m/d');
        $rules = [];
        $rules += ['title' => ['required', 'max:255']];
        $rules += ['description' => ['required']];
        $rules += ['start_date' => ['required', 'date']];
        $rules += ['end_date' => ['required', 'date', 'after:start_date']];
        $request->validate($rules);

        $validator = Validator::make($request->all(),[


                'title'                                   => 'required',
                'description'                             => 'required',
                'start_date'                              => 'required',
                'end_date'                                => 'required',



         ],[
               'title.required'                                 => 'العنوان مطلوب',
               'description.required'                           => 'الوصف مطلوب',
               'start_date.required'                        => 'تاريخ الابتداء مطلوب',
               'end_date.required'                                => 'تاريخ الانتهاء مطلوب',
       ],[]);
        if ($validator->fails()) {
             return redirect()->back()->with(array('errors' => $validator->getMessageBag()));
         }

        $request_data = $request->all();
        Offer::where(['id'=>$id])->update($request_data);
        return redirect()->back()->with('flash_message_success', 'لقد  تم تعديل  العرض   بنجاح ');
        }
        $offerDetails  =  Offer::where(['id' => $id])->first() ;
        return  view('admin.shows.edit-show')->with(compact('offerDetails')) ;
    }
    public  function  viewoffer(Request $request ,  $id = null)
    {
        $offerDetails  =  Offer::where(['id' => $id])->first() ;
        $number_of_remaining_days = Carbon::parse($offerDetails->end_date)->diffInDays(Carbon::parse($offerDetails->start_date));
        return  view('admin.shows.view-show')->with(compact('offerDetails' ,'number_of_remaining_days')) ;

    }
    public function deleteoffer($id=null)
    {
        Offer::where(['id'=> $id])->delete() ;
        return redirect()->back()->with('flash_message_success', 'لقد  تم حذف   العرض   بنجاح ');
    }

}
