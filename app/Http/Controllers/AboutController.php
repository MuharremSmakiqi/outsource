<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Education;
use App\Work; 
use App\ulanguages;
use App\Feedback;
 use App\Image; 

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $general = DB::table('languages')->get()->where('category', '=','General');
       $web = DB::table('languages')->get()->where('category', '=','Web');
       $mobile = DB::table('languages')->get()->where('category', '=','Mobile');
       $database = DB::table('languages')->get()->where('category', '=','Database');
       $design = DB::table('languages')->get()->where('category', '=','Design');
       $it = DB::table('languages')->get()->where('category', '=','IT');
       $adminc = DB::table('languages')->get()->where('category', '=','Admin');
       
       $modalFB = DB::table('feedbacks')  
       ->where('user_id', '=', Auth::user()->id) 
       ->get()
       ->first();
       // dd($modalFB);
        //if profile not completed 
       $about = DB::table('abouts')->get() 
       ->where('user_id', '=', Auth::user()->id)
       ->first();

       $work = DB::table('works') 
       ->where('user_id', '=', Auth::user()->id)
       ->get();

       $edu = DB::table('education')
       ->where('user_id', '=', Auth::user()->id)
       ->get();

       $languages = DB::table('ulanguages')
       ->select('name','id')
       ->where('user_id', '=', Auth::user()->id)
       ->groupby('name')
       ->get();

       $PL = DB::table('languages')->get() 
       ->where('id', '=', $languages)
       ->first();
       # dd( $countries);
        return view('users.index', compact('about','work','edu','PL', 'languages', 'general', 'web', 'mobile', 'database', 'design', 'it', 'adminc', 'modalFB'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $type = $request->input('type');  
        if($type == 'edu'){  
            $edu = new Education();  
            $edu->addEducation($request); 
            return redirect('/user')->with('edu-added', '');  
       }

       elseif($type == 'skills')
       {  
            $otherSkills = $request->input('otherSkills'); 
            $otherAdminSkills = $request->input('otherAdminSkills'); 
            $typingSkills = $request->input('typingSkills'); 

            $id = Auth::User()->id; 
            DB::update('update abouts set 
            otherSkills = ?,  
            otherAdminSkills = ?,  
            typingSkills = ?   
            where user_id = ?',
            [$otherSkills, $otherAdminSkills, $typingSkills, $id]); 

            $userLang = new ulanguages();  
            $userLang->addSector($request);
            return redirect('/user')->with('skills-added', '');   
       }
       elseif($type == 'feedback')
       {   
            $fb = new Feedback();  
            $fb->addFeedback($request);
            return redirect('/user')->with('feedback','We value your feedback, Thank you for being part of the GSI Outsourcing'); 
       }
       elseif($type == 'deleteSkills')
       { 
          if (\is_null($request->wpmm)) {
                    return redirect('/user')->with('skills-not-added', '');  
               } else {
                    $userLang = new ulanguages();  
                    $userLang->deleteSkills($request);
                    return redirect('/user')->with('skills-deleted', '');  
               }
        }elseif($type == 'editProfile'){   
            //dd(Auth::User()->id);
            $level = $request->input('level'); 
            $monthly = $request->input('monthly');
            $english = $request->input('english');
            $phone = $request->input('phone');
            $lastPosition = $request->input('lastPosition');
            $available = $request->input('available'); 
            $bio = $request->input('bio'); 
            $id = Auth::User()->id;
            
            DB::update('update abouts set 
            level = ?, 
            monthly = ?,
            english = ?,
            phone = ?,
            lastPosition = ?,
            available = ?,
            bio = ?
            where user_id = ?',
            [$level,$monthly,$english, $phone, $lastPosition, $available, $bio, $id]);
            return redirect('/user');  
       }
       else
       {
          $work = new Work();
          $work->addWork($request);
          return redirect('/user')->with('work-added', ''); 
       } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
      //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
          $about->update($request->all()); 
          return redirect('/user')->with('edu-edited', ''); 
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about, $id, Request $request)
    {
         $type = $request->input('type'); 
        if($type == 'work'){ 

            $affectedRows = Work::where('id', '=', $id)->delete(); 
            return redirect('/user')->with('work-deleted', ''); 

       }else{ 

           $affectedRows = Education::where('id', '=', $id)->delete(); 
           return redirect('/user')->with('edu-deleted', ''); 

       } 
    }
}
