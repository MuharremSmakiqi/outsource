<?php

namespace App\Http\Controllers\Auth;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function authenticated($request, $user)
    {
        $user->update([
        'last_login_at' => Carbon::now()->toDateTimeString(),
        'last_login_ip' => $request->getClientIp()
         ]);

        if($user->role == 'Unverified' ) {
            return redirect()->intended('/i-want-to');
        }
        if($user->role == 'User') {
            return redirect()->intended('/user');
        }
        if($user->role == 'Unverified') {
            return redirect()->intended('/under-review');
        }
        if($user->role == 'Client') {
            return redirect()->intended('/client-adm');
        }
        if($user->role == 'Admin') {
            return redirect()->intended('/admin');
        }
 
        return redirect()->intended('/');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
