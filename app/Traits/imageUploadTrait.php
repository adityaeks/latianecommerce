<?php

namespace App\Traits;
use Illuminate\Http\Request;
use File;

trait ImageUploadTrait{


    public function UploadImage(Request $request, $inputName, $path)
    {
        if($request->hasFile($inputName)){

            $image = $request->{$inputName};
            $text = $image->getClientOriginalName();
            $imageName = 'media_'.uniqid().'.'.$text;
            $image->move(public_path($path), $imageName);

            return $path.'/'.$imageName;

        }
    }
    public function UpdateImage(Request $request, $inputName, $path, $oldPath=null)
    {
        if($request->hasFile($inputName)){
            if(File::exists(public_path($oldPath))){
                File::delete(public_path($oldPath));
            }

            $image = $request->{$inputName};
            $text = $image->getClientOriginalName();
            $imageName = 'media_'.uniqid().'.'.$text;
            $image->move(public_path($path), $imageName);

            return $path.'/'.$imageName;

        }
    }
}
