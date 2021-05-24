@extends('backend.master')
@section('content')
<h1 style="text-align:center">User Lists</h1>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Number</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
     
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->role}}</td>
      <td>{{$data->number}}</td>
      <td><img width="150px" src="{{url('/uploads/users/'.$data->image)}}" alt=""></td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $users->links() }}
@endsection