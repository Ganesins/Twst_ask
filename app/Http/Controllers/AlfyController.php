<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alfy;
use App\Models\jaipur;
use Illuminate\Support\Facades\DB;


class AlfyController extends Controller
{
    //
    public function index(){
        return view('index');

    }

    public function list(){
        $alf=alfy::all();
        return view('list',['alfy'=>$alf]);
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|alpha',
            'email'=>'required|email',
            'phone'=>'required|numeric',
        ]);
        $name=$request->input('name');
        $email=$request->input('email');
        $phone=$request->input('phone');

        $alf=new alfy;
        $alf->name=$name;
        $alf->email=$email;
        $alf->phonenumber=$phone;
        $alf->save();
        return redirect('/');
    }

    public function delete($id){
        $alf=alfy::find($id);
        $alf->delete();
        return redirect('list');

    }
    public function edit($id){
        $alf=alfy::find($id);
        return view('edit',['alf'=>$alf]);
    }
    public function update(Request $request,$id){
          $request->validate([
            'name'=>'required|alpha',
            'email'=>'required|email',
            'phone'=>'required|numeric',
        ]);
        $alf=alfy::find($id);
        $alf->name=$request->input('name');
        $alf->email=$request->input('email');
        $alf->phonenumber=$request->input('phone');
        $alf->save();
        return redirect('list');

    }
    public function login(){
        return view('reg');
    }
     
 public function jaiindex(){
        return view('jaiindex');
    }
       public function jai(){
        // $jai=jaipur::all();
        $jai=jaipur::take(1)->orderBy('id','DESC')->get();             

        return view('jai',['jai'=>$jai]);
    }

    public function create(Request $request){
        $customername=$request->input('customername');
        $date=$request->input('date');
        $name=$request->input('name');
        $address=$request->input('address');
        $state=$request->input('state');
        $mobile=$request->input('mobile');
        $email=$request->input('email');
        $gst=$request->input('gst');
        $pan=$request->input('pan');
        $acname=$request->input('acname');
        $acnumber=$request->input('acnumber');
        $ifsc=$request->input('ifsc');
        $invoiceno=$request->input('invoiceno');

        $jai=new jaipur;
        $jai->customername=$customername ;
        $jai->date=$date;
        $jai->name=$name;
        $jai->address=$address;
        $jai->state=$state;
        $jai->mobile=$mobile;
        $jai->email=$email;
        $jai->gst=$gst;
        $jai->pan=$pan;
        $jai->acname=$acname;
        $jai->acnumber=$acnumber;
        $jai->ifsc=$ifsc;
        $jai->invoice=$invoiceno;

        $jai->save();
        return redirect('jai');

    }

   



}
