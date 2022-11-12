<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowsController extends Controller
{

     public  function  shows()
    {  

       return  view('admin.shows.shows') ;
    }
    
    public function  addshow(Request $request)
    {
        
        return  view('admin.shows.add-show') ;
        
    }
    public  function  viewshow(Request $request)
    {
        
        return  view('admin.shows.view-show') ;
        
    }
      public  function  editshow(Request $request)
    {
        
        return  view('admin.shows.edit-show') ;
        
    }
    
    
}
