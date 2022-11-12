<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service ; 
use App\ServiceImage ;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ServicesController extends Controller
{
      public  function  services()
    {  
    
       $allservices = Service::get() ; 
       
       return  view('admin.services.services')->with(compact('allservices')) ;
    }
    
    // add new service  
    
    public function  addservice(Request $request)
    {
        
        if($request->isMethod('post'))
        {     
            
                $rules = [] ; 
                $rules += ['service_name' => ['required' , 'max:225'] ] ; 
                $rules += ['description' => ['required']] ;
                $rules += ['document' => ['required']] ;
                $request->validate($rules) ; 
            
                $request= $request->all() ; 
                $service =  Service::create($request); 
                $path = "uploads/services/";
                if (!File::isDirectory($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }
                $serviceImages = [];
                foreach ($request['document'] as $file) {
                 File::move(public_path('tmp-uploads/' . $file),  $path . $file);
                    $serviceImages[] = [
                   'image' => $file,
                   "service_id" =>$service->id
                    ];
                     }
            if (count($serviceImages) > 0) {
                ServiceImage::insert($serviceImages);
            }
            
          return redirect()->back()->with('flash_message_success', 'لقد  تم أضافه الخدمه  بنجاح ');
        }
        
        return  view('admin.services.add-service') ;
        
    }
    
    //view  specific  service  
    

    public  function  viewservice($id = null)
    {
        $details = Service::where(['id'=>$id])->first() ;
        $serviceImages =  ServiceImage::where(['service_id'=>$id]) ;
        return  view('admin.services.view-service')->with(compact('details', 'serviceImages')) ;
        
    }
    
      public  function  editservice(Request  $request ,  $id =null)
    {
        if($request->isMethod('post')){
              $data = request()->except(['_token']);
              $service  = Service::with('images')->where(['id'=>$id])->first() ;
            if (count($service->images) >  0) {
                foreach ($service->images as $media) {
                    if (!in_array($media->image, $request->input('document', []))) {
                        Storage::disk('uploads')->delete('services/' . $media->image);
                        ServiceImage::where("id", $media->id)->delete();
                    }
            }
        
        }

        $media = $service->images->pluck('image')->toArray();

        // check if service folder exist else create dir
        $path = "uploads/services/";
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
            
        $serviceImages = [];
        foreach ($request->input('document', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                File::move(public_path('tmp-uploads/' . $file), $path . $file);
                $serviceImages[] = [
                    'image' => $file,
                    "service_id" => $service->id,
                ];
            }
        }

        if (count($serviceImages) > 0) {
            ServiceImage::insert($serviceImages);
        }
              unset($data['document']) ;
              $updatedrequest =  Service::where(['id' => $id])->update($data) ; 
               
             return redirect()->back()->with('flash_message_success', 'لقد تم تعديل الخدمه بنجاح  ');
            
        }
          
        $service = Service::with('images')->where(['id'=>$id])->first() ; 
          
        return  view('admin.services.edit-service')->with(compact('service')) ;
        
    }
    
    public  function deleteservice($id=null )
    {  
  
        $service  =  Service::with('images')->where(['id' => $id])->first();
        
           //delete images  from reposetory 
           foreach ($service->images as $img) {
            if ($img->image != null && Storage::disk("uploads")->exists('services/' . $img->image)) {
                Storage::disk('uploads')->delete('services/' . $img->image);
            }
           }
          ServiceImage::where(['service_id' =>$id ])->delete() ; 
          Service::where(['id'=>$id])->delete() ;
         return redirect()->back()->with('flash_message_success', 'لقد تم حذف  الخدمه  بنجاح  ');
    }
    
    
}
