<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth; //for authentication

class logincontroller extends Controller
{

  public function getloginpage(){
    return view('login');
  }
    public function login(Request $request){
      $credentials = $request-> only ('email' , 'password');
      if(Auth::attempt($credentials)){
        return redirect()-> route('dashboard');
      }
      else{
        return redirect()-> intended('login');
      }
    }
}
