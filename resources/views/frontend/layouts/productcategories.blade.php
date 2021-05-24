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

  <header class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="{{route('homepage')}}" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block"style="color:orange"
    href="{{route('cart.view')}}" > <i class='fas fa-cart-plus' style='color:orange;font-size:20px'></i>cart[{{count(Cart::content())}}]</a>

    <div class="search-container" >
    <form action="{{route('product.search')}}" method="post"class="" >
    @csrf
      <input type="text" placeholder="Search" name="search">
      <button type="submit" style="font-size:13px"class="btn btn-outline-info">Search<i class="fa fa-search"></i></button>
    </form>
  </div>
    

    <div class="dropdown">
  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Show category
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
   @foreach($category as $data)
    <a class="dropdown-item" href="{{route('frontend.product.categories',$data->id)}}">{{$data->category_name}}</a>
    @endforeach
  </div>
</div>

<a class="py-2 d-none d-md-inline-block" href="{{route('frontend.products')}}">Products</a>


   
  </nav>
</header>

  <body>
    
  

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
      @if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif    

@if(isset($search))
      <p class="alert alert-success"> searching result: {{$search}}; found({{count($products)}}) items</p>
@endif

        <h1 style="color:crimson">Products for Travelling</h1>
        <h3 style="color:green">You can buy any tour related products from here. </h3>
        <p>
        <hr>
        

        
         
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach($products as $data)
        <div class="col">
          <div class="card shadow-sm">
          <img width="300px" height="250px"src="{{url('/uploads/product/'.$data->product_image)}}" >

          <div class="card-body">
              <h3 style="">{{$data->product_name}}</h3>
              <h5 style="background-color:Tomato">Stock:  {{$data->quantity}}</h5>
              <h5 class="text-danger">Price: {{$data->price}}BDT</h5>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 
                  
                  <a href="{{route('cart.add',$data->id)}}" class="btn btn-warning">Buy Now</a>
                </div>
               
              </div>
            </div>
          </div>
        </div>
        @endforeach


      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    
  </div>
</footer>


    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
 <!-- Bootstrap core JavaScript-->
   <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js"></script>
    <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
