@extends('master.master')

@section('title')
 SmartDoko | Home page | Online Shopping Nepal
@endsection

@section('container')
<h1> This is register page</h1>


<div class="col-md-6 col-md-offset-4">
  <h3> Register Now </h3>
  <form action="{{route('userregister')}}" method="post">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class = "form-control" id = "email" placeholder = "Email" name="email" >
    </div>

      <div class="form-group">
        <label for="pass">Password</label>
        <input type="password" class = "form-control" id = "pass" placeholder = "password" name="password" >
      </div>

        <div class="form-group">
          <label for="cpass">Confirm Password</label>
          <input type="password" class = "form-control" id = "cpass" placeholder = "Confirm password" name="password2" >
        </div>

        <div class="form-group">
          <label for="cpass">First Name</label>
          <input type="text" class = "form-control" id = "first_name" placeholder = "First Name" name="first_name" >
        </div>

        <div class="form-group">
          <label for="cpass">last Name</label>
          <input type="text" class = "form-control" id = "last_name" placeholder = "Last Name" name="last_name" >
        </div>

        <div class="form-group">
          <label for="cpass">Contact Number</label>
          <input type="text" class = "form-control" id = "contact_no" placeholder = "Contact Number" name="contact_no" >
        </div>

        <div class="input-group input-group-sm">
          <span class="input-group-addon" id="basic-addon3">Gender</span>
          <input type="radio" name="gender" value="1">Male
          <input type="radio" name="gender" value="0">Female
        </div>


        {{ csrf_field()}}



            <br/>
            <button type="submit" name="submit" class="btn btn-primary" value="submit"> Submit </button>
          </div>

        @if(count($errors)>0)
        <div class="alert alert-danger">

            @foreach($errors->all() as $er)
            {{$er}}
            @endforeach
          </div>
          @endif

</div>
@endsection
