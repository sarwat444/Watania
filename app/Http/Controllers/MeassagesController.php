<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message ;  

class MeassagesController extends Controller
{
    public  function  messages()
    {
    $messages = Message::get() ;  
     return  view('admin.messages.messages')->with(compact('messages')) ; 
    }
    public function viewmessage($id=null)
    {
        $message =  Message::where(['id' => $id])->first() ; 
        return  view('admin.messages.view-message')->with(compact('message')) ; 
    }
    public function deletemessage($id=null)
    {
        $message =  Message::where(['id' => $id])->delete() ; 
        return  view('admin.messages.view-message')->with(compact('message')) ; 
        return redirect()->back()->with('flash_message_success', 'لقد  تم حذف    الرساله    بنجاح ');
    }
}
