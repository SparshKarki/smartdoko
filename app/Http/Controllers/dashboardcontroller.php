<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Product;
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

  //for adding new categories
  public function getcatpage(){
    return view('category_form');
  }
  public function add_category(Request $request){
    $this->validate ($request,[
      'name' => 'required|min:3|max:20',
    ]);

    $name = $request -> input ('name');

    $category = new Category;
    $category -> name = $name;
    $category -> save();
    return redirect () -> route('dashboard');
  }

//adding new Products
public function getproductpage(){
  return view('product_form');
}
public function add_product(Request $request){
  $category_profile = DB::table('categories')->where ('user_id',Auth::id())->first();
  $this->validate ($request,[
    'name' => 'required|min:3|max:20',
    'color' => 'required',
    'product_type' => 'required',
    'description' => 'required|min:10',
    'price' => 'required',
    'product_image' => 'required| mimes:JPG,jpg,png,PNG,JPEG,jpeg,gif,GIF,SVG,svg',
  ]);

  $name = $request -> input ('name');
  $color= $request -> input ('color');
  $product_type = $request -> input ('product_type');
  $description = $request -> input ('description');
  $price = $request -> input ('price');
  $product_image_name = $request -> file('product_image')->getClientOriginalName();//retrieves image name
  $profile_image_extension = $request -> file('profile_image')->getClientOriginalExtension();
  $product_fullname= $profile_image_name ;//full name concatenation
  $request -> file('product_image')-> move(public_path('/product_image'),$product_fullname);

  $product = new Product;
  $product -> name = $name;
  $product -> color = $color;
  $product -> product_type = $product_type;
  $product -> desciption = $description;
  $product -> price = $price;
  $product -> product_image = $product_fullname;
  $product -> cat_id = $category_profile->id;
  $product -> save();
  return redirect () -> route('dashboard');
}

}
