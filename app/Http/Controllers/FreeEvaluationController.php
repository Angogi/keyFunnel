<?php

namespace App\Http\Controllers;

use App\FreeEvaluation;
use Illuminate\Http\Request;

class FreeEvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $freeEvaluations = FreeEvaluation::all();
        return response()->json($freeEvaluations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evaluation-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        
        $form = new FreeEvaluation(); 
        $form->user_id = $request->user_id;
        $form->tipoDeNegocio = $request->tipoDeNegocio;
        $form->webSite = $request->webSite;
        $form->tAds = $request->tAds;
        $form->traditionalAds = implode(" , ",$request->traditionalAds);  
        $form->sAds = $request->sAds;  
        $form->socialMediaAds = implode(" , ",$request->socialMediaAds);    
        $form->adsAditional = $request->adsAditional;
        $form->comments = $request->comments;
        $form->terminosYcondiciones= implode(" , ",$request->terminosYcondiciones); 
        $form->save();

        

        
        // return redirect()->route('landing');
        return response()->json($form); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FreeEvaluation  $freeEvaluation
     * @return \Illuminate\Http\Response
     */
    public function show(FreeEvaluation $freeEvaluation)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FreeEvaluation  $freeEvaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(FreeEvaluation $freeEvaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FreeEvaluation  $freeEvaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FreeEvaluation $freeEvaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FreeEvaluation  $freeEvaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(FreeEvaluation $freeEvaluation)
    {
        //
    }
}
