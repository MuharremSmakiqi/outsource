<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; 
use App\About; 
use App\Education;
use App\Work;
use App\ulanguages;
use App\Otherservices;
use App\Image;

class CompleteProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //if profile not completed 
       $countries = DB::table('countries')->get();
       $general = DB::table('languages')->get()->where('category', '=','General');
       $web = DB::table('languages')->get()->where('category', '=','Web');
       $mobile = DB::table('languages')->get()->where('category', '=','Mobile');
       $database = DB::table('languages')->get()->where('category', '=','Database');
       $design = DB::table('languages')->get()->where('category', '=','Design');
       $it = DB::table('languages')->get()->where('category', '=','IT');
       $spokenLanguage = DB::table('languages2')->get();
       $adminc = DB::table('languages')->get()->where('category', '=','Admin');
       # dd( $countries);
        return view('users.register', compact('countries', 'general', 'web', 'mobile', 'database', 'design', 'it', 'adminc', 'spokenLanguage'));
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
        $about = new About();
        $userLang = new ulanguages(); 
        $edu = new Education();
        $work = new Work();
      //  $OServices = new Otherservices();

      //  $OServices->addOServices($request); 
        $userLang->addSector($request); 
        $about->addAbout($request); 
        $edu->addEducation($request);
        $work->addWork($request);
        
        $imgName = 'image-preview.svg';
        $newImage = new Image();
        $newImage->addImage($imgName);
        return redirect('/user')->with('user_created', 'Done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
