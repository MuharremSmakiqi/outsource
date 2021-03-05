<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Education extends Model
{
    protected $table = 'education';
    protected $fillable = [
        'user_id',
        'university',  
        'areaofstudy',  
        'degree',  
        'monthES',  
        'yearES',  
        'monthEE',  
        'yearEE',  
        'workhereE'  
       ]; 
    
    public function addEducation($request){
        if ($request->input('university') != null) {
            $edu = new Education();
            $edu->user_id = $request->input('user_id');
            $edu->university = $request->input('university'); 
            $edu->areaofstudy = $request->input('areaofstudy'); 
            $edu->degree = $request->input('degree'); 
            $edu->monthES = $request->input('monthES'); 
            $edu->yearES = $request->input('yearES'); 
            $edu->monthEE = $request->input('monthEE'); 
            $edu->yearEE = $request->input('yearEE'); 
            $edu->workhereE = $request->input('workhereE'); 
            $edu->user_id = Auth::user()->id;
            $edu->save(); 
      }
    }
}
