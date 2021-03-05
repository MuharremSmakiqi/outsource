<?php
namespace App\Http\Controllers;
use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; 
use App\About; 
use App\Education;
use App\Work;
use App\ulanguages;
use App\Interested; 
use App\Mail\InterviewMail; 
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $interes = DB::table('interesteds')
        ->where('status','=', 'pending')
        // ->groupby('p_id')
        ->get(); 
      
        $pending = DB::table('interesteds')
        ->select('user_id', DB::raw('count(*) as count'))
        ->where('status','=', 'pending')
        ->groupby('user_id')
        ->get(); 
       // dd($pending);

        $users = DB::table('users')
        ->where('role', '=', 'Client') 
        ->get();  
        
        $usersRole = DB::table('users')
        ->join('abouts', 'users.id', '=', 'abouts.user_id')   
        ->select('users.*', 'abouts.*') 
        ->where('users.role', '=', 'User') 
        ->get(); 

        $deleted = DB::table('abouts')
        ->where('status', '=', 'inactive') 
        ->get(); 

        $working = DB::table('abouts')
        ->where('status', '=', 'GSI') 
        ->get(); 

        $myEdu = DB::table('education')   
        ->get();  

        $myWork = DB::table('works')   
        ->get();          
 
        return view('admin.tab.indexTab', compact('myWork','myEdu','users','interes','pending','usersRole','deleted','working'));
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
        $action = $request->input('action'); 
        $status = $request->input('status');
        $id   = $request->input('id');
        $emails = $request->input('email');

        if($action == 'send_mail') { 
             if(\is_null($emails)) {
               return redirect ('/admin')->with('interview_email_not_sent', '');  
             }else { 
            foreach ($emails as $email) {  
                Mail::to($email)->send(new InterviewMail($request));
            } 
            return redirect ('/admin')->with('interview_email_sent', '');
             } 
        }elseif($status ==  'active' OR $status ==  'inactive' OR $status ==  'GSI'){  
            DB::table('abouts')->where('user_id', $id)->update(array('status' => $status));  
            return redirect('/admin')->with('AdminUserUpdate',''); 
        }elseif(\is_null($status)) {  
          return redirect ('/admin')->with('status_change_failed', '');   
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id, Admin $admin)
    { 
        //
    }
    public function client_bar(){
        $usersRole = DB::table('users')
        ->select('role', DB::raw('count(*) as count'))
        ->groupBy('role')
       ->get();   
        return response()->json($usersRole);
    }
    public function interesBar(){  
        $clientInteres = DB::table('interesteds') 
        ->select('name', DB::raw("count(user_id) as count")) 
        ->orderBy('count','desc')
        ->take(5) ->groupBy('user_id')
        ->get();  
        return response()->json($clientInteres); 
    }
    public function programmingBar(){  
        $code = DB::table('ulanguages') 
        ->select('name', DB::raw("count(name) as cname")) 
        ->orderBy('cname','desc')
        ->take(3) 
        ->groupBy('name')
        ->get();   
        return response()->json($code); 
    }
    public function categoryBar(){  
        $category = DB::table('abouts') 
        ->select('servicesM', DB::raw('count(servicesM) as service'))
        ->orderBy('service','desc')
        // ->take(5)
        ->groupBy('servicesM')
        ->get();    
        return response()->json($category); 
    }
  
}
