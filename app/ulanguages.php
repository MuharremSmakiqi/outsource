<?php

namespace App;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Database\Eloquent\Model;

class ulanguages extends Model
{
    protected $table = 'ulanguages';
    protected $fillable = [
        'user_id',
        'name',
    ];
      
    public function addSector($request)
    {
        $array_sector = $request->input('wpmm');
        #array_splice($array_sector, 4);
        #dd($array_sector);
         if ($request->input('wpmm') != null) {
        foreach ($array_sector as $key) {
            ulanguages::create([
                'user_id' => Auth::user()->id,
                'name' => $key,  
            ]);
        }
          }
    }
    public function deleteSkills($request)
    {
        $array_sector = $request->input('wpmm'); 
        //$id = $request->input('wpmm'); 
        //dd($array_sector);
        if ($request->input('wpmm') != null) {
        foreach ($array_sector as $key) {
            $key=ulanguages::where('id',$key)->delete(); 
        }
      }
    }
}
 