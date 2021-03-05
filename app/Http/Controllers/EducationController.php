<?php

namespace App\Http\Controllers;

use App\Education;
use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\DB; 

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('users.index');
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
        $type = $request->input('type'); 
        $statusUpdate = $request->input('status');
        $id = Auth::user()->id;

        if($type == 'status'){ 
            DB::update('update abouts set
            status = ? 
            where user_id = ?',
            [$statusUpdate, $id]);
            return redirect('/user')->with('reactivated', ''); 
       }else{ 
        
        $university = $request->input('university');
        $areaofstudy = $request->input('areaofstudy');
        $degree = $request->input('degree');
        $monthES = $request->input('monthES');
        $yearES = $request->input('yearES');
        $monthEE = $request->input('monthEE');
        $yearEE = $request->input('yearEE');
        $id = $request->input('id');
         
        DB::update('update education set
         university = ?,
         areaofstudy = ?,
         degree = ?,
         monthES = ?,
         yearES = ?,
         monthEE = ?,
         yearEE = ?
         where id = ?',
         [$university,$areaofstudy, $degree,$monthES, $yearES,$monthEE, $yearEE, $id]);
        return redirect('/user')->with('skills-updated', ''); 

       } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    { 
      // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        //
    }
}
