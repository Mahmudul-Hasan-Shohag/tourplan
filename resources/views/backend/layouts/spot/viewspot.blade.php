@extends('backend.master')
@section('content')
<p class="text-center"> <a class="btn btn-info" href="{{route('spot.form')}}"> Add Spot</a></p>
<table class="table table-striped">
  <thead>
    <tr class="table-info">
     
      <th scope="col">Spot Name</th>
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
    
      <td>{{$data->spot_name}}</td>
      <td>{{$data->destination}}</td>
      <td>{{$data->cost}}</td>
      <td>{{$data->date}}</td>
      <td>{{$data->description}}</td>
      <td> <img width="150px" src="{{url('/uploads/spot/'.$data->spot_image)}}" alt="img"></td>
    </tr>
   @endforeach 
  </tbody>
</table>

@endsection