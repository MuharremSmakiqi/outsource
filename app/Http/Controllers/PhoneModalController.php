<?php

namespace App\Http\Controllers;

use App\Mail\PhoneCall;
use App\Mail\EmailCall;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PhoneModalController extends Controller
{
    public function index()
    {
        return view('pages.how-it-works');
    }
 
    public function sendMailForPhoneCall(Request $request)
    {
        $email = $request->get('emailId');
        $phone = $request->get('phoneID');
 
        if ($phone == 123) {
           Mail::to($email)->send(new PhoneCall($request));
           return redirect('/how-it-works')->with('success', 'Thank you for getting in touch! ');
        } else {
           Mail::to($email)->send(new EmailCall($request));
           return redirect('/how-it-works')->with('success', 'Thank you for getting in touch! ');
        } 
    }
}
