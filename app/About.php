<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable; 
use Illuminate\Support\Facades\Notification;  

class About extends Model
{  
    use Notifiable;
    protected $table = 'abouts';
    protected $fillable = [
        'user_id',
        'country',
        'city', 
        'monthly',
        'english',
        'lastPosition',
        'available',
        'otherLanguages',
        'level',
        'servicesM',
        'bio',
        'status',
        'otherSkills',
        'typingSkills',
        'otherAdminSkills',
       ]; 

    public function addAbout($request){
        $about = new About();
        $about->user_id = $request->input('user_id');
        $about->country = $request->input('country');
        $about->city = $request->input('city'); 
        $about->monthly = $request->input('monthly');
        $about->english = $request->input('english');
        $about->lastPosition = $request->input('lastPosition');
        $about->available = $request->input('available');
        $about->otherLanguages = $request->input('otherLanguages');
        $about->bio = $request->input('bio'); 
        $about->gender = $request->input('gender'); 
        $about->phone = $request->input('phone'); 
        $about->level = $request->input('level');
        $about->servicesM = $request->input('servicesM');
        $about->otherSkills = $request->input('otherSkills');
        $about->typingSkills = $request->input('typingSkills');
        $about->otherAdminSkills = $request->input('otherAdminSkills');
        $about->user_id = Auth::user()->id; 
        #dd($about);
        $about->save(); 
    }
}
