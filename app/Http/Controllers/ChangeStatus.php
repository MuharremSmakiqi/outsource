<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use Carbon\Carbon;
use App\User;
use App\Notifications\AccountStatus;
use Notification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; 
use App\Notifications\NotifyInactiveUser;

class ChangeStatus extends Controller
{ 
     public function warningEmail(Request $request)
    { 
        $limit = Carbon::now()->subDay(26);   
        $overLimit = Carbon::now()->subDay(28);   
        $warning_user = User::where('last_login_at', '<', $limit) 
        ->where('last_login_at', '>', $overLimit) 
        ->join('abouts', 'users.id', '=', 'abouts.user_id') 
        ->select('users.email')
        // ->where('abouts.status', '=', 'active')
        ->where('users.role', '=', 'User')
        ->get(); 
      
        foreach ($warning_user as $user) { 
            $user->notify(new NotifyInactiveUser());
        }
    }


    public function inactiveEmail(Request $request)
    { 
        $limit = Carbon::now()->subDay(29); 
        $inactive_user = User::where('last_login_at', '<', $limit)  
        ->join('abouts', 'users.id', '=', 'abouts.user_id') 
        ->select('users.email')
        ->where('abouts.status', '=', 'active')
        ->where('users.role', '=', 'User')
        ->get(); 
 
        foreach ($inactive_user as $user) {
            $user->notify(new AccountStatus());
        }
    } 
     
    public function update()
    {
        $limit = Carbon::now()->subDay(29); 
        $status_update = DB::table('users')
        ->join('abouts', 'users.id', '=', 'abouts.user_id')  
        ->where('abouts.status', '=', 'active')
        ->where('users.role', '=', 'User')
        ->where('last_login_at', '<', $limit)   
        ->select('abouts.user_id') 
        ->get(); 
 
        $status = 'inactive';
        foreach ($status_update as $update) {
            // dd($update->user_id);
            $id = $update->user_id; 
            DB::update('update abouts set status = ? where user_id = ?',[$status,$id]);
        }
    }
    public function reactivate()
    { 
        $status_update = DB::table('users')
        ->join('abouts', 'users.id', '=', 'abouts.user_id')  
        ->where('abouts.status', '=', 'reactivate')
        ->where('users.role', '=', 'User')  
        ->select('abouts.user_id') 
        ->get(); 
 
        $status = 'active';
        foreach ($status_update as $update) {
            // dd($update->user_id);
            $id = $update->user_id; 
            DB::update('update abouts set status = ? where user_id = ?',[$status,$id]);
        }
    }
}
