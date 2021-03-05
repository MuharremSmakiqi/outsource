<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; 

class Image extends Model
{
    protected $fillable = [
        'image',
        'user_id',
    ];

    public function addImage($image)
    {
        Image::create([
            'user_id' => Auth::user()->id,
            'image' => $image,
        ]);
    } 

    public function updateProfileImage($name) 
    {
       DB::table('images')
            ->where('user_id',  Auth::user()->id)
            ->update(['image' =>$name]);
    }
}
