<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class registercontroller extends Controller
{
    public function create(){
      return view ('register');
    }
    public function store(){
      $this->validate(request(),[
        'email' => 'required | email | max:255 | min:4' ,
        'password'=> 'required | min:8',
        'password2'=> 'required| min:8',
        'first_name'=> 'required| min:3',
        'last_name'=> 'required| min:3',
        'contact_no'=> 'required',
        'gender'=> 'required'
      ]);
      $user = user::create(request(['email','password','first_name','last_name','contact_no','gender']));
      return view('login');


    }
}
