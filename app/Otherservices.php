<?php

namespace App;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Database\Eloquent\Model; 

class Otherservices extends Model
{
    protected $table = 'ulanguages';
    protected $fillable = [
        'user_id',
        'oServices',
        'oLevel',
    ];
      
    public function addOServices($request)
    {
        $services = $request->input('oServices');
        $level = $request->input('oLevel'); 

        for($ii = 0; $ii < count($services) ; $ii++) {
            $email = $services[$ii];
            $feedback = $level[$ii];
            ulanguages::create([
                // 'name' => $email,
                // 'feedback'=>$feedback
                'user_id' => Auth::user()->id,
                'oServices' => $email,  
                'oLevel' => $feedback  
            ]);
        }
   
        // if($request->input('services') != null) {
        // foreach ($services as $index => $char) {
        //     ulanguages::create([
        //         'user_id' => Auth::user()->id,
        //         'oServices' => $char + "" + $level[$index],  
        //        // 'oLevel' => $key,  
        //     ]);
        //     }
        // }
    }
}
