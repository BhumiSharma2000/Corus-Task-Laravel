<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photosave;
class photo extends Controller
{
//
    function create()
    {
        $photos=photosave::all();
        return view('upload',compact('photos'));
    }
    function createapi()
    {
        $photos=photosave::all();
        return response()->json($photos);
    }
    function store(Request $req)
    {

        $name=$req->file('photo')->getClientOriginalName();
      
        // dd[$req->file()];

        $req->file('photo')->storeAs('images/',$name);
        $photo= new photosave();
        $photo->description=$req->description;
        $photo->title=$req->title;
        $photo->image=$name;
        $photo->save();
        return redirect()->back();
    }
    function storeapi(Request $req)
    {
        
        $photo= new photosave();
        $photo->description=$req->description;
        $photo->title=$req->title;
        $photo->image=$req->name;
        $save=$photo->save();
        if($save)
            {
                return ["Result"=>"Data"];
            }
            else
            {
                return ["Result"=>"Operation Failed"];
            }
    }
 
}
