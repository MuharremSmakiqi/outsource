<?php
namespace App\Http\Controllers;


use App\Mail\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
   
    function index()
    {
        return view ('pages.contact');
    }
 
    function sendMail(Request $request)
    {
        $email = $request->get('email');
        Mail::to('info@outsourcing.com')->send(new Contact($request));
        return redirect('/contact')->with('email_sent', '');
    }
}
