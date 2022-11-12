<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public  function  works()
    {
        return  view('site.our-works.our-works') ; 
    }
}
