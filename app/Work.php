<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Work extends Model
{
    protected $table = 'works';
    protected $fillable = [
        'user_id',
        'company',  
        'wcountry',  
        'roletitle',  
        'monthWS',  
        'yearWS',  
        'monthWE',  
        'yearWE',  
        'workhereW'  
       ]; 

     public function addWork($request){
       if ($request->input('company') != null) {
            $work = new Work();
            $work->user_id = $request->input('user_id');
            $work->company = $request->input('company'); 
            $work->wcountry = $request->input('wcountry'); 
            $work->roletitle = $request->input('roletitle'); 
            $work->monthWS = $request->input('monthWS'); 
            $work->yearWS = $request->input('yearWS'); 
            $work->monthWE = $request->input('monthWE'); 
            $work->yearWE = $request->input('yearWE'); 
            $work->workhereW = $request->input('workhereW'); 
            $work->user_id = Auth::user()->id;
            $work->save(); 
       }
       
    }
}
