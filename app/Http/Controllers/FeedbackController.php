<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Feedback;
use App\User;

class FeedbackController extends Controller
{
  public function index(){
        
  $feedback2 = DB::table('feedbacks as f')
    ->orderBy('f.created_at', 'desc')
    ->leftJoin('users as u', 'f.user_id', '=', 'u.id')  
    ->select('f.*','u.name') 
    ->where('f.overall', '>=', '3')
    ->take(10)
    ->get();

  $feedback3 = DB::table('feedbacks as f')
    ->orderBy('f.created_at', 'desc')
    ->leftJoin('users as u', 'f.user_id', '=', 'u.id')  
    ->select('f.*','u.name') 
    ->where('f.overall', '>=', '3')
    ->get();

  $feedbackCritical = DB::table('feedbacks as f')
    ->orderBy('f.created_at', 'desc')
    ->leftJoin('users as u', 'f.user_id', '=', 'u.id')  
    ->select('f.*','u.name', 'u.email') 
    ->where('f.overall', '<=', '2')
    ->orWhere('f.profile', '<=', '2')
    ->orWhere('f.skillsQ', '<=', '2')
    ->take(10)
    ->get();

  $feedbackCriticalModal = DB::table('feedbacks as f')
    ->orderBy('f.created_at', 'desc')
    ->leftJoin('users as u', 'f.user_id', '=', 'u.id')  
    ->select('f.*','u.name', 'u.email') 
    ->where('f.overall', '<=', '2') 
    ->orWhere('f.profile', '<=', '2')
    ->orWhere('f.skillsQ', '<=', '2')
    ->get();
 
   // dd($feedback); 
    return view('admin.feedback', compact('feedback2','feedback3','feedbackCritical','feedbackCriticalModal'));
  }

  public function overallBar(){  
    $overall = DB::table('feedbacks')  
    ->select('overall', DB::raw("count(overall) as count"))  
    ->groupBy('overall')
    ->get();  

    return response()->json($overall); 
  } 
  public function profileBar(){  
    $overall = DB::table('feedbacks')  
    ->select('profile', DB::raw("count(profile)  as count"))  
    ->groupBy('profile')
    ->get();  

    return response()->json($overall); 
  } 
  public function qualificationBar(){  
    $overall = DB::table('feedbacks')  
    ->select('skillsQ', DB::raw("count(skillsQ)  as count"))  
    ->groupBy('skillsQ')
    ->get();  

    return response()->json($overall); 
  } 
}