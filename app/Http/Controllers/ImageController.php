<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    //
    function upload(Request $request){
        $path=$request->file('file')->store('public');
        $path_array= explode('/',$path);
        $img_path = $path_array[1];
        $img = new Image();
        $img->path=$img_path;
        if($img->save()){
            return redirect('list');
        }else{
           return "unsuccessful";
        }
        // return $img_path;
        // return "Upload function called";
    }

    function list(){
        $images = Image::all();
        return view('display',['imgData'=>$images]);
    }
}
