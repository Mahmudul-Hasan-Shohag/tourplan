@extends('backend.master')
@section('content')
<h1 style="text-align:center">Planner Travellers Lists</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Spot ID</th>
      <th scope="col">Spot Name</th>
      <th scope="col">Destination</th>
      <th scope="col">Traveller ID</th>
      <th scope="col">Traveller Name</th>
      <th scope="col">Traveller Mobile</th>
      <th scope="col">Traveller Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach($travellers as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->spot_id}}</td>
      <td>{{$data->spot_name}}</td>
      <td>{{$data->destination}}</td>
      <td>{{$data->traveller_id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->mobile}}</td>
      <td>{{$data->email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection