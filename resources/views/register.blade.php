@extends('master.master')

@section('title')
 SmartDoko | Home page | Online Shopping Nepal
@endsection

@section('container')
<h1> This is register page</h1>

<div class="container">
    <h3> Register Now </h3>
      <form action="{{route('userregister')}}" method="post">
        <div class="row">
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Email</span>
              <input type="text" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1">
            </div>
          </div>

          <div class="col-md-6">
          <select class="form-control" name="user_type">
            <option value="Admin">I'm Admin</option>
            <option value="Customer">I'm Customer</option>
          </select>
        </div>
      </div><br/>

      <div class="row">
        <div class="col-md-6">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Password</span>
            <input type="text" class="form-control" name="password" placeholder="password" aria-describedby="basic-addon1">
          </div>
        </div>

      <div class="col-md-6">
        <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Confirm Password</span>
        <input type="text" class="form-control" name="password2" placeholder="password" aria-describedby="basic-addon1">
      </div>
    </div>
  </div><br/>

  <div class="row">
    <div class="col-md-6">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">First Name</span>
        <input type="text" class="form-control" name="first_name" placeholder="First Name" aria-describedby="basic-addon1">
      </div>
    </div>
    <div class="col-md-6">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Last Name</span>
        <input type="text" class="form-control" name="last_name" placeholder="Last Name" aria-describedby="basic-addon1">
      </div>
    </div>
  </div><br/>



  <div class="row">
    <div class="col-md-6">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Contact Number</span>
        <input type="text" class="form-control" name="contact_no" placeholder="Contact Number" aria-describedby="basic-addon1">
      </div>
    </div>
    <div class="col-md-6">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Address</span>
        <input type="text" class="form-control" name="address" placeholder="Address" aria-describedby="basic-addon1">
      </div>
    </div>
  </div><br/>

        <div class="input-group input-group-sm">
          <span class="input-group-addon" id="basic-addon3">Gender</span>
          <input type="radio" name="gender" value="1">Male
          <input type="radio" name="gender" value="0">Female
        </div>


        {{ csrf_field()}}



            <br/>
            <button type="submit" name="submit" class="btn btn-primary" value="submit"> Submit </button>
          </div>

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
