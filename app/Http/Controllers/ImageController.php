<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Illuminate\Support\Facades\Storage; 

class ImageController extends Controller
{
      public function index() {
        return view('users.modals.uploadImage');
    }
 
    public function save(Request $request)
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
 
        if ($files = $request->file('image')) {
  
            $img = $request->file('image');
            $ext = $img->getClientOriginalExtension();
            $name = time().'.'.$ext;
            $path = public_path('uploads');
            $img->move($path, $name);
                  
            $newImage = new Image();
            $newImage->updateProfileImage($name);
            return redirect('/user'); 
        }
 
        return Response()->json([
                "success" => false,
                "image" => ''
            ]);
 
    }

    
}

    // $id = Auth::User()->id; 
    // DB::update('update images set 
    // image = ?   
    // where user_id = ?',
    // [$image, $id]); 