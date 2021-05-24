@extends('backend.master')
@section('content')
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="{{route('order.report')}}">Orders</a>
  <a href="{{route('spot.report')}}">Spot</a>
  <a href="{{route('planner.spot.report')}}">Planner Spot</a>
</div>

<hr>
</body>
<h3 style="text-align: center;color:white;background-color:purple;"><b>Orders Report </b></h3> 
<form action="{{route('order.report')}}" method="GET">
<div class="row">
<div class="form-group col-md-6">
<label for="from_date">Date From</label>
<input type="date" class="form-control" id="from" name="from_date">
</div>
<div class="form-group col-md-6">
<label for="to_date">Date To</label>
<input type="date" class="form-control" id="to" name="to_date">
</div>
</div>
<p style="text-align:center">
<button type="submit" class="btn btn-primary "><i class="fas fa-search"></i>search</button>

<button type="button" onclick="printDiv()"  class="btn btn-danger "><i class="fas fa-print"></i>Print</button>
</p>
</form> 
<div id="printArea">


<hr>
<p style="text-align:center">Date:{{date('Y-m-d')}}</p>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Mobile</th>
      <th scope="col">Customer Email</th>
      <th scope="col">Customer Address</th>
      <th scope="col">Order Date</th>
      <th scope="col">Order Status</th>
      <th scope="col">Total Products</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
  @if(count($order)>0)
  @foreach($order as $data)
    <tr>
    <td>{{$data->id}}</td>
      <td>{{$data->customer_id}}</td>
      <td>{{$data->cus_name}}</td>
      <td>{{$data->cus_mobile}}</td>
      <td>{{$data->cus_email}}</td>
      <td>{{$data->cus_address}}</td>
      <td>{{$data->order_date}}</td>
      <td><p  style="background-color:yellow">{{$data->order_status}}</p></td>
      <td>{{$data->total_products}}</td>
      <td>{{$data->totalprice}}</td>
 
   @endforeach
   @else
   <h3 style="color:red;text-align:center">No Data Found</h3>
   @endif
   </tr>
  </tbody>
</table>
</div>
<script type="text/javascript">
function printDiv(){
var printContents=document.getElementById("printArea").innerHTML;
var originalContents=document.body.innerHTML;
document.body.innerHTML=printContents;
    window.print();
}

</script>

@endsection