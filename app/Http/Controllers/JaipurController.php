<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JaipurController extends Controller
{
    // 
     public function list1(){
        $jai=jaipur::all();
        return view('jai',['jai'=>$jai]);
    }
}
