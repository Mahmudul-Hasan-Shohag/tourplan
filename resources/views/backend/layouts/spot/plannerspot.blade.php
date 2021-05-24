@extends('backend.master')
@section('content')
<table class="table table-bordered">
  <thead>
    <tr class="table-info">
      <th scope="col">Spot ID</th>
      <th scope="col">Spot Name</th>
      <th scope="col">Planner ID</th>
      <th scope="col">Planner Name</th>
      <th scope="col">Destination</th>
      <th scope="col">cost</th>
      <th scope="col">Date</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
  @foreach($spot as $key=>$data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->spot_name}}</td>
      <td>{{$data->planner_id}}</td>
      <td>{{$data->planner_name}}</td>
      <td>{{$data->destination}}</td>
      <td>{{$data->total_cost}}</td>
      <td>{{$data->journey_date}}</td>
      <td>{{$data->description}}</td>
      <td> <img width="150px" src="{{url('/uploads/planner/'.$data->image)}}" alt="img"></td>
    </tr>
   @endforeach 
  </tbody>
</table>

@endsection