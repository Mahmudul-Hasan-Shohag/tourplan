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
<h3 style="text-align: center;color:white;background-color:purple;"><b>Spots Report </b></h3> 
<form action="{{route('spot.report')}}" method="GET">
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
      <th scope="col">Spot ID</th>
      <th scope="col">Spot Name</th>
      <th scope="col">Destination</th>
      <th scope="col">Duration</th>
      <th scope="col">Cost</th>
      <th scope="col">Journey Date</th>
    </tr>
  </thead>
  <tbody>
  @if(count($spot)>0)
  @foreach($spot as $data)
    <tr>
    <td>{{$data->id}}</td>
      <td>{{$data->spot_name}}</td>
      <td>{{$data->destination}}</td>
      <td>{{$data->duration}}</td>
      <td>{{$data->cost}}</td>
      <td>{{$data->date}}</td>
 
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