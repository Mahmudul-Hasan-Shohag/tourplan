
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cart</title>
  <!-- Roboto Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/mdb-pro.min.css">
  <!-- Material Design Bootstrap Ecommerce -->
  <link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/mdb.ecommerce.min.css">
  <!-- Your custom styles (optional) -->

</head>

<body class="skin-light">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand" href="{{route('frontend.products')}}">
          <i class="fas fa-arrow-left" alt=""></i>
        </a>
      </div>
    </nav>
    <!-- Navbar -->

    <div class="jumbotron color-grey-light mt-70">
      <div class="d-flex align-items-center h-100">
        <div class="container text-center py-5">
          <h3 class="mb-0">Shopping cart</h3>
        </div>
      </div>
    </div>

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Block Content-->
      <section class="mt-5 mb-4">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-lg-8">

            <!-- Card -->
            <div class="card wish-list mb-4">
              <div class="card-body">

                <h5 class="mb-4">Added {{count(Cart::content())}} items in your cart</h5>
@foreach($cart as $data)
                <div class="row mb-4">
                  <div class="col-md-5 col-lg-3 col-xl-3">
                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                      <img class="img-fluid w-100"
                        src="{{url('/uploads/product/'.$data->options->size)}}" alt="Sample">
                      <a href="#!">
                        <div class="mask waves-effect waves-light">
                          <img class="img-fluid w-100"
                            src="{{url('/uploads/product/'.$data->options->size)}}">
                          <div class="mask rgba-black-slight waves-effect waves-light"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-7 col-lg-9 col-xl-9">
                    <div>
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5>{{$data->name}}</h5>
                          <p class="mb-3 text-muted text-uppercase small">Product ID: {{$data->id}}</p>
                          <p class="mb-2 text-muted text-uppercase small">Quantity: {{$data->qty}}</p>
                          <p class="mb-3 text-muted text-uppercase small">Subtotal: {{$data->subtotal()}}</p>
                        </div>
                        <div>
                        <form action="{{route('cart.update',$data->rowId)}}" method="post"> 
                 @csrf   
                          <div class="def-number-input number-input safari_only mb-0 w-100">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                              class="minus" type="submit"></button>
                            <input class="quantity" min="0" name="qty" value="{{$data->qty}}" type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                              class="plus" type="submit"></button>
                          </div>
                          <small id="passwordHelpBlock" class="form-text text-muted text-center">
                            
                          </small>
                        </div>
                      </div>
                      </form>
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <a href="{{route('cart.remove',$data->rowId)}}" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                              class="fas fa-trash-alt mr-1"></i> Remove item </a>
                          
                        </div>
                        <p class="mb-0" style="color:crimson"><span><strong>Unit Price: {{$data->price}} BDT</strong></span></p>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase, adding
                  items to your cart does not mean booking them.</p>

              </div>
            </div>
            <!-- Card -->

           

            <!-- Card -->
            <div class="card mb-4">
              <div class="card-body">

                <h5 class="mb-4">We accept</h5>

                <img class="mr-2" width="90px"
                  src="{{url('/images/bkash.jpg')}}"
                  alt="bkash">
                <img class="mr-2" width="90px"
                  src="{{url('/images/nogod.jpg')}}"
                  alt="nogod">
                <img class="mr-2" width="60px"
                  src="{{url('/images/rocket.png')}}"
                  alt="rocket">
              </div>
            </div>
            <!-- Card -->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4">

            <!-- Card -->

            <div class="card mb-4">
              <div class="card-body">

                <h5 style="text-align:center"class="mb-3">Total Cost</h5>

                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    Products Amount:
                    <span>{{Cart::subtotal()}} BDT</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                    Shipping
                    <span>45</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                    <div>
                      <strong>Total Amount:</strong>
                      <strong>
                        <p class="mb-0"></p>
                      </strong>
                    </div>
                  @php
$total=(float) str_replace(',','',Cart::subtotal());
                  @endphp
                    <span><strong>{{$total+45}} BDT</strong></span>
                  </li>
                </ul>

               

  <form action="{{route('order.confirm')}}" method="post">
@csrf

<div class="form-group">
    <label for="cus_address">Enter Your Location</label>
    <input type="text" class="form-control" name="cus_address">
    
  </div>
  <input type="hidden" class="form-control"  name="customer_id" value="{{auth()->user()->id}}">  
  <input type="hidden" class="form-control"  name="cus_name" value="{{auth()->user()->name}}"> 
  <input type="hidden" class="form-control"  name="cus_mobile" value="{{auth()->user()->number}}">  
  <input type="hidden" class="form-control"  name="cus_email" value="{{auth()->user()->email}}">          
  <input type="hidden" class="form-control"  name="order_date" value="{{date('d/m/y')}}">
  <input type="hidden" class="form-control"  name="order_status" value="Pending">
  <input type="hidden" class="form-control"  name="total_products" value="{{Cart::count()}}">
  <input type="hidden" class="form-control"  name="subtotal" value="{{Cart::subtotal()}}">
  <input type="hidden" class="form-control"  name="totalprice" value="{{Cart::subtotal()}}">




                <button type="submit" href="{{route('order.confirm')}}" class="btn btn-warning btn-block waves-effect waves-light">
                  Order Confirm</a>
</form>
              </div>
            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-4">
              <div class="card-body">

                

                <div class="collapse" id="collapseExample">
                  <div class="mt-3">
                    <div class="md-form md-outline mb-0">
                      <input type="text" id="discount-code" class="form-control font-weight-light"
                        placeholder="Enter discount code">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Card -->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Block Content-->

    </div>
  </main>
  <!--Main layout-->

  <!-- Footer -->
  <footer class="page-footer font-small elegant-color">

    <div class="color-primary">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a class="fb-ic" href="https://www.facebook.com/sadia.shopno">
              <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="https://mdbootstrap.com/previews/ecommerce-demo/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://mdbootstrap.com/previews/ecommerce-demo/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://mdbootstrap.com/previews/ecommerce-demo/js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://mdbootstrap.com/previews/ecommerce-demo/js/mdb.min.js"></script>
    <!-- MDB Ecommerce JavaScript -->
    <script type="text/javascript" src="https://mdbootstrap.com/previews/ecommerce-demo/js/mdb.ecommerce.min.js"></script>
  <script>

  </script>
</body>

</html>