<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; 
use App\User;
use App\About; 
use App\Education;
use App\Work;
use App\ulanguages;
use App\Interested;
use Redirect,Response;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
       $searchLang = DB::table('languages')->get();
      
       $languages = DB::table('ulanguages')  
       ->get(); 

       $PL = DB::table('languages')->get() 
       ->where('id', '=', $languages)
       ->first();
        

       $users = DB::table('abouts') 
        ->join('ulanguages', 'abouts.user_id','=','ulanguages.user_id')  
        ->select('abouts.*', 'ulanguages.*')  
        ->where('abouts.user_id','=','ulanguages.user_id') 
        ->get(); 

        $interes = DB::table('interesteds')
        ->join('abouts', 'abouts.user_id','=','interesteds.p_id')
        ->join('users', 'interesteds.user_id','=','users.id') 
        ->where('interesteds.status', '=', 'pending') 
        ->where('interesteds.user_id', '=', Auth::user()->id)   
        
        ->get();

        $history = DB::table('interesteds')
        ->join('abouts', 'abouts.user_id','=','interesteds.p_id')
        ->where('interesteds.status', '=', 'contacted') 
        ->where('interesteds.user_id', '=', Auth::user()->id)  
        ->groupby('interesteds.p_id')  
        ->get();
 
         $userInfo = DB::table('abouts')  
        ->get(); 

        
        $m =  DB::table('interesteds')
        ->join('abouts', 'abouts.user_id','!=','interesteds.p_id')
        ->where('interesteds.user_id', '!=', Auth::user()->id)  
        ->groupby('interesteds.p_id')  
        ->get();

        $about2 = DB::table('abouts') 
        ->join('education', 'abouts.user_id','=','education.user_id')
        ->join('images', 'abouts.user_id','=','images.user_id')  
        ->groupBy('images.user_id')
        ->where('status', '=', 'active')
        ->get();  

        $uLang = DB::table('ulanguages')
        ->join('users', 'ulanguages.user_id','=','users.id')   
        ->groupby('user_id')
        ->get();

        $booked = DB::table('interesteds')
        ->join('abouts', 'abouts.user_id','=','interesteds.p_id') 
        ->where('interesteds.user_id', '!=', Auth::user()->id)  
        ->groupby('interesteds.p_id')  
        ->get();

       $booked2 = DB::table('interesteds')->get(); 
        

        return view('clients.index', compact('interes','booked2','about2', 'languages', 'searchLang','uLang','users','booked','userInfo','history'));
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
        $key = $request->userID;   
        $user = Interested::updateOrCreate(
            [ 'user_id' => Auth::user()->id,
              'p_id' => $key,
              'name' => Auth::user()->name
            ]
        );
         
        $notification = array( 'success' => true, 'message' => 'Post created successfully!', 'alert-type' => 'success' );   
        return response()->json($notification); 
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
