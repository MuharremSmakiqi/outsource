<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact; 
use Illuminate\Support\Facades\Mail;

class MembersEmailController extends Controller
{
    function index()
    {
        return view ('pages.about');
    }
 
    function sendMailToMembers(Request $request)
    {
        $email = $request->get('emailId');

        Mail::to($email)->send(new Contact($request));
        return redirect('/about')->with('success','Thank you for getting in touch! ');
    }
}
