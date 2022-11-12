<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service ; 

class siteservicecontroller extends Controller
{
    public function  services()
    {
        $services = Service::get() ;  
        return  view('site.services.services')->with(compact('services'));
    }



}
