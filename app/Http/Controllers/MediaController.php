<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function storeMedia(Request $request)
    {
        $path = public_path('tmp-uploads');
        
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        
        $files = $request->file('file');
        
        if($request->hasFile("logo")){
            $files = $request->file('logo');
        }

        $data = [];
        foreach($files as $file) {
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $file->move($path, $name);
            $data[] = [
                'name' => $name,
                'original_name' => $file->getClientOriginalName(),
            ];
        }

        return response()->json([
            'status' => 200,
            'data' => $data,
        ]);
    }
    
    // delete tmp media
    public function deleteTmpMedia(Request $request)
    {
        $fileName = $request->name;
        $path = public_path('tmp-uploads') . "/" . $fileName;

        if (file_exists($path)) {            
            unlink($path);
            return response()->json([
                'status' => 200,
                'message' => "file deleted sucessfully",
            ]);
        }

        return response()->json([
            'status' => 200,
            'message' => "file not found",
        ]);
    }
}
