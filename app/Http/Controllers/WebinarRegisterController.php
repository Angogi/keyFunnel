<?php

namespace App\Http\Controllers;

use App\WebinarRegister;
use Illuminate\Http\Request;

class WebinarRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
        $this->validate($request, array(
            'name' => 'required|max:100',
            'email' => 'required',
            'terminosYcondiciones' => 'required',
        ));

        $form = new WebinarRegister();  
        $form->email = $request->email;
        $form->name = $request->name;
       
        $form->terminosYcondiciones= implode(" , ",$request->terminosYcondiciones);    
        
        $form->save();

        return response()->json($form); 
        
        

       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WebinarRegister  $webinarRegister
     * @return \Illuminate\Http\Response
     */
    public function show(WebinarRegister $webinarRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WebinarRegister  $webinarRegister
     * @return \Illuminate\Http\Response
     */
    public function edit(WebinarRegister $webinarRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WebinarRegister  $webinarRegister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebinarRegister $webinarRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WebinarRegister  $webinarRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebinarRegister $webinarRegister)
    {
        //
    }
}
