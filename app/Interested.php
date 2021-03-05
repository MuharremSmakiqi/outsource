<?php

namespace App;
use Illuminate\Support\Facades\Auth;  
use Illuminate\Database\Eloquent\Model;


class Interested extends Model
{
   protected $table = 'interesteds';
    protected $fillable = [
        'user_id',
        'p_id',
        'name',
    ];

    public function addInteres($request)
    {
        $user_selected = $request->input('email'); 
       //dd($user_selected);
        if ($request->input('email') != null) {
        foreach ($user_selected as $key) {
            Interested::create([
                'user_id' => Auth::user()->id,
                'p_id' => $key,
                'name' => Auth::user()->name
            ]);
        }
        }
    }

    // public function users()
    // {
    //     return $this->belongsTo('App\User');
    // }
}
