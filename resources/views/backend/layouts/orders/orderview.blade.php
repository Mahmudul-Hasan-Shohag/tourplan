@extends('backend.master')
@section('content')
<h3>Order ID: {{$orderview->id}}</h3>
<h3>Order Date: {{$orderview->order_date}}</h3>
<p>Customer ID: {{$orderview->customer_id}}</p>
<p> Name: {{$orderview->cus_name}}</p>
<p> Mobile: {{$orderview->cus_mobile}}</p>
<p> Email: {{$orderview->cus_email}}</p>
<p>Address: {{$orderview->cus_address}}</p>
<p>Order Status: {{$orderview->order_status}}</p>
<p>Total Products: {{$orderview->total_products}}</p>
<p>Total Price: {{$orderview->total_price}}</p>
<a href="{{route('invoice',$orderview->id)}}" class="btn btn-primary">INVOICE</a>
@endsection