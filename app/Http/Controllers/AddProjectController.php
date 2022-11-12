<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddProjectController extends Controller
{
    public function addproject()
    {
        return view('site.add-project.new-project') ;
    }
}
