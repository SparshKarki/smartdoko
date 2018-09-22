@extends('master.master')

@section('title')
 SmartDoko | Home page | Online Shopping Nepal
@endsection

@section('container')


<h1> This is admin Dashboard page</h1>
<hr/>

  <div class="container">
    <div class="header-top-left">

      <div class="menu-container">
        <ul class="header-top-nav header-top-nav__secondary">
          <li><a href="#"><i class="fa fa-user"></i> <span class="nav-label">Category</span></a></li>
          <li><a href="{{route('getcatpage')}}"><i class="fa fa-user"></i> <span class="nav-label">Add new category</span></a></li>
          <li><a href="#"><i class="fa fa-user"></i> <span class="nav-label">Products</span></a></li>
          <li><a href="{{route('getproductpage')}}"><i class="fa fa-user"></i> <span class="nav-label">Add new Products</span></a></li>

        </ul>
      </div>
    </div>


@endsection
