@extends('backend.master')
@section('content')
<h1 style="text-align:center">Payment View</h1>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Transaction Number</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Refference</th>
    </tr>
  </thead>
  <tbody>
  @foreach($payment as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->cus_id}}</td>
      <td>{{$data->cus_name}}</td>
      <td>{{$data->payment_method}}</td>
      <td>{{$data->trans_number}}</td>
      <td>{{$data->mobile_number}}</td>
      <td>{{$data->refference}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection