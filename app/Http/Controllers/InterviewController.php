<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\InterviewMail; 
use Illuminate\Support\Facades\Mail;

class InterviewController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    function store(Request $request)
    {
        $emails = $request->input('email'); 
        foreach ($emails as $email) {
          
            Mail::to($email)->send(new InterviewMail($request));
        } 
        return redirect('/admin')->with('interview_email_sent', '');
    }
 

}
