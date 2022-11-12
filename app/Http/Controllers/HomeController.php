<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job ;

use App;

class HomeController extends Controller
{


    public function root()
    {
        $jobs = Job::get() ;
        return view('index')->with(compact('jobs'));     
    }
    
    

    /*Language Translation*/

    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

}
