<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Support\Facades\Auth; 
use App\User;

class Feedback extends Model
{
   protected $table = 'feedbacks';
    protected $fillable = [
        'user_id',
        'overall',  
        'profile',  
        'skillsQ',  
        'comments',    
       ]; 
    
    public function addFeedback($request){
        if ($request->input('overall') != null) {
            $fb = new Feedback(); 
            $fb->overall = $request->input('overall'); 
            $fb->profile = $request->input('profile'); 
            $fb->skillsQ = $request->input('skillsQ'); 
            $fb->comments = $request->input('comments');   
            $fb->user_id = Auth::user()->id;
            $fb->save(); 
      }
    }

     public function user() {
        return $this->belongsTo(User::class); 
    }
}
