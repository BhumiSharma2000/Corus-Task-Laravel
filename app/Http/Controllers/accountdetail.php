<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\viewdetail;

class accountdetail extends Controller
{
    //
    function show()
    {
        
       $a= viewdetail::all();
    //    dd($a);
        return view('view',['view'=>$a]);
    }
    function showapi()
    {
        
       $a= viewdetail::all();
       return response()->json($a);
    }
}
