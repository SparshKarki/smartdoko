@extends('master.master')

@section('title')
 Easy Job | Home page | jobs in nepal
@endsection

@section('container')
<h1> New Category Form</h1>


<form action="{{ route ('add_category') }}" method="post">
  <div class="form-group">
    <label for="name">Category Name</label>
    <input type="text" class = "form-control" id = "name" placeholder = "Category Name" name="name" >
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
