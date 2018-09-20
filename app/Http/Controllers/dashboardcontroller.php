<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use DB;

class dashboardcontroller extends Controller
{
  public function dashboard()
  {
    $user = DB::table('users')->where('id',Auth::id())->first();
    if($user->user_type=='Admin')
    {
      return view('admin_dashboard');
    }
    else
    {
      return view('customer_dashboard');
    }
  }
}
