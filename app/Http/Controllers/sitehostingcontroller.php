<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sitehostingcontroller extends Controller
{
    public  function hosting()
    {
        return view('site.hosting.hosting');
    }
}
