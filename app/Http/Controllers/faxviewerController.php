<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sector ; 
use App\Models\User ; 
use Auth  ;
use App\Fax ; 
use App\FaxViewer ;
class faxviewerController extends Controller
{

 public function home()
 {

     return view('users.login') ; 
    
 }
 public function login(Request $request)
 {
    if($request->isMethod('post'))
    {
       $request->validate([
           'email' => 'required',
           'password' => 'required',
       ]);
  
       $credentials = $request->only('email', 'password');


       if (Auth::attempt($credentials)) {
           return redirect('faxviewers')->withSuccess('Signed in');
       }
 
       return redirect("login")->withSuccess('Login details are not valid');

    }
 }
 public function index()
 {   
     $userDetails   =  User::where(['id' => Auth::user()->id])->first() ; 
     $sectorDetails =  Sector::where(['id' =>$userDetails->sector_id])->first();  
     $sector_faxs   =   FaxViewer::where(['sector_id' => $sectorDetails->id])->get() ; 
     return  view('users.faxs')->with(compact('sector_faxs'))  ; 
   
 }


}
