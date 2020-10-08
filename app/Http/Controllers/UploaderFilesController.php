<?php

namespace App\Http\Controllers;

use App\UploaderFiles;
use Illuminate\Http\Request;

class UploaderFilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        alert('helloo!');
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
        // $data = $request->all();
                
        $uploaderFiles = new UploaderFiles();
        $uploaderFiles->upFile($request);
        
         return redirect()->route('dashboard');
        // return view('dashboard');



           
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UploaderFiles  $uploaderFiles
     * @return \Illuminate\Http\Response
     */
    public function show(UploaderFiles $uploaderFiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UploaderFiles  $uploaderFiles
     * @return \Illuminate\Http\Response
     */
    public function edit(UploaderFiles $uploaderFiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UploaderFiles  $uploaderFiles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UploaderFiles $uploaderFiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UploaderFiles  $uploaderFiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(UploaderFiles $uploaderFiles)
    {
        //
    }
}
