<?php

namespace App\Http\Controllers;

use App\Interested;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; 

class InterestedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $count = DB::table('interesteds')
        ->select('name', DB::raw('count(*) as count'))
        ->groupBy('name')
        ->get();  
        //dd($count);
        $interes = DB::table('interesteds')
        ->where('status','=', 'pending')
        ->get(); 

         $pending = DB::table('interesteds')
        ->select('user_id', DB::raw('count(*) as count'))
        ->where('status','=', 'pending')
        ->groupby('user_id')
        ->get(); 

        $users = DB::table('users')
        ->where('role', '=', 'Client') 
        ->get(); 

         $contacted = DB::table('interesteds')
        ->select('user_id', DB::raw('count(*) as count'))
        ->where('status','=', 'contacted')
        ->groupby('user_id')
        ->get(); 

         $contactedInteres = DB::table('interesteds')
        ->where('status','=', 'contacted')
        ->groupby('p_id')
        ->get(); 

        

          return view('admin.clear_ClientList', compact('users','interes','pending','count','contacted','contactedInteres'));
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
        $rule = $request->input('rule');
        $id = $request->input('role');
        $status = 'contacted';
        //dd($rule, $id );
        if ($rule == 'update') {

            DB::update('update interesteds set status = ? where user_id = ?',[$status,$id]);
            return redirect('client-clear-list')->with('list-removed', ''); 

        } else if ($rule == 'delete'){

            $affectedRows = Interested::where('user_id','=', $id)->where( 'status', '=',  $status)->delete();  
            return redirect('client-clear-list')->with('history-deleted', ''); 

        } else {
            # code...
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Interested  $interested
     * @return \Illuminate\Http\Response
     */
    public function show(Interested $interested)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Interested  $interested
     * @return \Illuminate\Http\Response
     */
   public function edit(Request $request,$id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Interested  $interested
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interested $interested)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Interested  $interested
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interested $interested)
    {
       // 
    }
}
