<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class RegisterController extends Controller
{
    function insertUser(Request $reg){
        $reg->validate([
            'username'=> 'required',
            'email'=>'required',
            'phone_no'=> 'required',
            'address'=>'required' ,
            'pincode'=>'required' ,
            'password'=>'required',
            'dob'=>'required'
        ]);
        $user=new Customer();
        $user->username=$reg->username;
        $user->email=$reg->email;
        $user->phone_no=$reg->phone_no;
        $user->address=$reg->address;
        $user->pincode=$reg->pincode;
        $user->password=$reg->password;
        $user->dob=$reg->dob;
        $user->save();
        return redirect('login');
    }

    function logingIn(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $data=Customer::where('email',$req->email)->get();
        if(count($data)==0){
            echo "Account does not exist";
        }
        else{
            if($data[0]->password==$req->password)
                return redirect('');
            else{
                return redirect('login');
            }
        }
    }

}
