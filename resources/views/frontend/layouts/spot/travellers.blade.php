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
  <body>
    


<main>

 
   
    

        


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    


    <!-- START THE FEATURETTES -->

    

   <h1 style="text-align:center">Traveller List</h1>
   <div class="search-container" >
    <form action="{{route('traveller.search')}}" method="post"class="" >
    @csrf
      <input type="text" placeholder="Type Spot ID" name="search">
      <button type="submit" style="font-size:13px"class="btn btn-outline-info">Enter<i class="fa fa-search"></i></button>
    </form>
  </div>
    <hr>
   

    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Spot ID</th>
      <th scope="col">Spot Name</th>
      <th scope="col">Destination</th>
      <th scope="col">Traveller ID</th>
      <th scope="col">Traveller Name</th>
      <th scope="col">Traveller Number</th>
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

    

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="{{route('homepage')}}">Back to homepage</a></p>
    
  </footer>
</main>


<script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
 <!-- Bootstrap core JavaScript-->
   <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js"></script>
    <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


      
  </body>
</html>
