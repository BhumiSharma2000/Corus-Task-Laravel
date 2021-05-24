<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\account;
class addaccount extends Controller
{
    //
    function addData(Request $req)
    {
            $a=new account;
            $a->first_name=$req->fname;
            $a->last_name=$req->lname;
            $a->email=$req->email;
            $a->password=$req->password;
            $a->save();
             return redirect("/");
    }
    function addDataapi(Request $req)
    {
            $a=new account;
            $a->first_name=$req->first_name;
            $a->last_name=$req->last_name;
            $a->email=$req->email;
            $a->password=$req->password;
            $save=$a->save();
            if($save)
            {
                return ["Result"=>"Data"];
            }
            else
            {
                return ["Result"=>"Operation Failed"];
            }
    }
    function checkData(Request $req)
    {
            $email= account::where('email',$req->input('email'))->get();
            if($email[0]->password==$req->input('password'))
            {
                $req->session()->put('user',$email[0]->name);
                return redirect('upload');
            }
            else
            {
                echo "<h1>Wrong Details</h1><br/>";
                echo "<h2><a href='/'>Press Back</a></h2>";
            }
    }
}
