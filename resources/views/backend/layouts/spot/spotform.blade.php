@extends('backend.master')
@section('content')
<h1  class=" col-md-6" style="text-align: center;color:white;background-color:salmon;"><b> Add Spot Details </b></h1>
<form style="" action="{{route('spot.create')}}" method="post" enctype="multipart/form-data">
@csrf
  <div class="form-group col-md-6">
    <label for="spot_name">Spot Name</label>
    <input type="text" class="form-control" id="spot_name" name="spot_name"aria-describedby="emailHelp" placeholder="">
    
  </div>
  <div class="form-group col-md-6">
    <label for="destination">Destination</label>
    <input type="text" class="form-control" id="destination" name="destination">
  </div>
  <div class="form-group col-md-6">
    <label for="duration">Duration</label>
    <input type="text" class="form-control" id="duration" name="duration">
  </div>
  
  <div class="form-group col-md-6">
    <label for="cost">Cost</label>
    <input type="text" class="form-control" id="cost" name="cost">
  </div>
  <div class="form-group col-md-6">
    <label for="date">Journey Date</label>
    <input type="date" class="form-control" id="date" name="date">
  </div>
  <div class="form-group col-md-6">
    <label for="description">Description</label>
    <input type="description" class="form-control" id="description" name="description">
  </div>
  <div class="form-group col-md-6">
    <label for="spot_image">Upload a photo</label>
    <input type="file" class="form-control" id="spot_image" name="spot_image">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection