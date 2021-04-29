@extends('backend.master')
@section('content')
<p class="text-center">
<a class="btn btn-outline-success" href="{{route('product.form')}}">Add Product</a>
<a class="btn btn-outline-info" href="{{route('category.view')}}">Category</a>
</p>
<hr>
<tr>
  <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Select category
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
   @foreach($category as $data)
    <a class="dropdown-item" href="{{route('product.categories',$data->id)}}">{{$data->category_name}}</a>
    @endforeach
  </div>
</div>
  </tr>
  <hr>
@if (session()->has('message'))
<div class="alert alert-info">
{{session()->get('message')}}
@endif

<table class="table table-bordered " >
  <thead >
    <tr>
      <th scope="col">SL</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Quantity</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Product Images</th>
    </tr>
  </thead>
  <tbody>

  @foreach($products as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->product_id}}</td>
      <td>{{$data->product_name}}</td>
      <td>{{$data->productCategory->category_name}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->price}}</td>
      <td> <img width="150px" src="{{url('/uploads/product/'.$data->product_image)}}" alt=""></td>
    
    </tr>
    
    @endforeach


  </tbody>
</table>
{{$products->links()}}
@endsection