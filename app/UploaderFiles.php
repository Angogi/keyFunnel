<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class UploaderFiles extends Model
{
    protected $fillable =  ['file'];

    public function upFile( $request)
    {
        
         if($request->hasFile('_video'))
         {
            
            $file=$request->file('_video');
            
            $extension=$file->getClientOriginalExtension();
            $path = "video.";
            $file_name=$path.$extension;
            $file->storeAs("public/videos/" , $file_name);
            
            //  return "Image Uploaded";

         }

     }
}
