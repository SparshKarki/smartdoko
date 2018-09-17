@extends('master.master')

@section('title')
 SmartDoko | Home page | Online Shopping Nepal
@endsection

@section('container')
<h1> This is login page</h1>


<div class="col-md-6 col-md-offset-4">
  <h3> Login Form</h3>
  <form action="{{ route ('login') }}" method="post">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class = "form-control" id = "email" placeholder = "Email" name="email" >
    </div>

      <div class="form-group">
        <label for="pass">Password</label>
        <input type="password" class = "form-control" id = "pass" placeholder = "password" name="password" >
      </div>



        {{ csrf_field()}}

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
