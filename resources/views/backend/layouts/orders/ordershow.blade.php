@extends('backend.master')
@section('content')
<h1 style="text-align:center">Orders View</h1>
<a href="{{route('order.details')}}" class="btn btn-info">ORDER DETAILS</a>
<hr>
@if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif
<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Order ID</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Order Date</th>
      <th scope="col">Order Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($order as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->id}}</td>
      <td>{{$data->customer_id}}</td>
      <td>{{$data->cus_name}}</td>
      <td>{{$data->order_date}}</td>
      <td>{{$data->order_status}}</td>
      
      <td>
      <div class="btn-group">
      <a href="{{route('order.deliver',$data->id)}}" class="btn btn-success">Deliver</a>
      <a href="{{route('order.view',$data->id)}}" class="btn btn-info">view</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection