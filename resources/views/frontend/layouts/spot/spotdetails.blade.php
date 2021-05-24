<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Jumbotron example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/jumbotron/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    </head>
  <body>
    


<main>

 
   
    

        


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    


    <!-- START THE FEATURETTES -->

    

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
      @if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif
        <h1 class="featurette-heading" style="color:blue"><u>{{$spot->destination}} </u><span class="text-muted"></span></h2>
        <hr>
        <p><strong class="" style="color:black">Spot ID:  {{$spot->id}}</strong></p>
        <p><strong class="" style="color:black">Planner ID:  {{$spot->planner_id}}</strong></p>
        <p><strong class="" style="color:black">Planner Name:  {{$spot->planner_name}}</strong></p>
        <p><strong class="" style="color:black">Journey Date:  {{$spot->journey_date}}</strong></p>
        <p><strong class="" style="color:black">Spot Name:  {{$spot->spot_name}}</strong></p>

       <p> <strong class="" style="color:black">Total Cost:  {{$spot->total_cost}}</strong></p>
       <a class="btn btn-info" href="{{route('planner.travellers')}}">Show Travellers</a>
        <hr>
        
        <h5 class="" style="color:red"><u>About :</u></h5>
        <br>
        <p> {{$spot->description}}</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img width="450" height="450"src="{{url('/uploads/planner/'.$spot->image)}}" alt="">
        <hr>
        <form action="{{route('planner.travellers.join')}}" method="post">
        @csrf
<input type="hidden" name="spot_id" value="{{$spot->id}}">
<input type="hidden" name="spot_name" value="{{$spot->spot_name}}">
<input type="hidden" name="destination" value="{{$spot->destination}}">
<input type="hidden" name="traveller_id" value="{{auth()->user()->id}}">
<input type="hidden" name="name" value="{{auth()->user()->name}}">
<input type="hidden" name="mobile" value="{{auth()->user()->number}}">
<input type="hidden" name="email" value="{{auth()->user()->email}}">
        
<button type="submit" class="btn btn-success">Join</button>
</form>



     </div>
    </div>

    

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="{{route('homepage')}}">Back to homepage</a></p>
    
  </footer>
</main>


    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

      
  </body>
</html>
