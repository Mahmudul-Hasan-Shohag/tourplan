@extends('backend.master')
@section('content')
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Product ID</th>
      <th scope="col">Order ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($orderdetails as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->product_id}}</td>
      <td>{{$data->order_id}}</td>
      <td>{{$data->product_name}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->unit_price}}</td>
      <td><a href=""class="btn btn-danger">DELETE</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection