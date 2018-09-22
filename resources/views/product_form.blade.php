@extends('master.master')

@section('title')
 Easy Job | Home page | jobs in nepal
@endsection

@section('container')
<h1> New Product Form</h1>
<div class="col-md-6">

<form action="{{ route ('add_category') }}" method="post">
  <div class="form-group">

    <div class="row">
      <div class="col-md-6">
    <label for="name">Name</label>
    <input type="text" class = "form-control" id = "name" placeholder = "Name of the Product" name="name" >
  </div>

  <div class="col-md-6">
  <div class="form-group">
    <label for="name">Product type</label>
    <input type="text" class = "form-control" id = "product_type" placeholder = "eg:Topwear, Footwear ..." name="product_type" >
  </div>
</div>
</div>

<div class="row">
  <div class="col-md-6">
  <div class="form-group">
    <label for="name">Color</label>
    <input type="text" class = "form-control" id = "color" placeholder = "Product Color" name="color" >
  </div>
</div>

  <div class="col-md-6">
  <div class="form-group">
    <label for="name">Price</label>
    <input type="integer" class = "form-control" id = "price" placeholder = "Price" name="price" >
  </div>
</div>
</div>

<label for="description">Short product description</label>
  <textarea class="form-control mytextarea" name="description" placeholder="description"></textarea><br/>

  <h4>Upload Product Image</h4>
<input type="file" name="product_image">


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
