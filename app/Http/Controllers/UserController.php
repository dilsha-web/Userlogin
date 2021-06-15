<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userlogin;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     


    public function validation(Request $req){
        $req -> validate( [
            'user' => 'required | max:10',
            'password'=>'required | min:8'
        ]);
        
        $info = new Userlogin();
        $info -> user = $req -> user;
        $info -> password = Hash::make($req->password);
        $info -> save();
        return view ('profile');
    }
}
