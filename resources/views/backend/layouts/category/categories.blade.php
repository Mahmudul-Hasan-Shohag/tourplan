@extends('backend.master')
@section('content')


<p style="text-align:center;"> 
<a class="btn btn-success"  href="{{route('category.form')}}">Add category</a>
</p>

@if (session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif

<div class="form-group col-md-12 ">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Category Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 @foreach($category as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->category_name}}</td>
      <td>{{$data->category_description}}</td>
      
      <td>
                <form action="" method="">
                  @csrf
                 
                  <button type="submit" class="btn btn-danger ">Delete</button>
                  <button type="submit" class="btn btn-warning ">Edit</button>
               </form>
            </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection