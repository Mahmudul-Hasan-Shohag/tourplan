@extends('backend.master')
@section('content')
<h1 style="text-align:center">Traveller Lists</h1>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Select Spot ID
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  @foreach($spot as $data)
    <a class="dropdown-item" href="{{route('select.id',$data->id)}}">{{$data->id}}</a>
    @endforeach
  </div>
</div>

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
      <td>{{$data->traveller_name}}</td>
      <td>{{$data->traveller_mobile}}</td>
      <td>{{$data->traveller_email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$travellers->links()}}
@endsection