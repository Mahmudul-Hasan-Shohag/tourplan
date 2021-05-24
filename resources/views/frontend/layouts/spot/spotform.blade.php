<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Tour Plan</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="https://wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="https://wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/css/style.min.css" rel="stylesheet">
</head>

<form class= "col-md-8" style="margin-left:150px;margin-top:70px;" action="{{route('planner.spot.create')}}" method="post" enctype="multipart/form-data">
@csrf
<h1>Add Spot</h1>
  <div class="form-group">
    <label>Spot Name</label>
    <input type="text" class="form-control" name="spot_name">  
  </div>
  <div class="form-group">
    <label>Destination</label>
    <input type="text" class="form-control" name="destination">  
  </div>
  <div class="form-group">
    <label>Journey Date</label>
    <input type="date" class="form-control" name="journey_date">  
  </div>
  <div class="form-group">
    <label>Total Cost</label>
    <input type="number" class="form-control" name="total_cost">  
  </div>
  
  <div class="form-group">
    <label>Description</label>
    <textarea  class="form-control" name="description" placeholder="eg.Hotel Cost:2500,Food Cost:1500,Duration:st.Martin:2 days,Cox's Bazar:2 days"></textarea>
  </div>
  <div class="form-group">
    <label>Please upload an image of your spot</label>
    <input type="file" class="form-control" name="image">  
  </div>
  <input type="hidden" class="form-control" name="planner_id" value="{{auth()->user()->id}}">  
  <input type="hidden" class="form-control" name="planner_name" value="{{auth()->user()->name}}">  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



<!-- ============================================================== -->
<script src="https://wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="https://wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/js/app-style-switcher.js"></script>
    <script src="https://wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="https://wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="https://wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="https://wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="https://wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="https://wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="https://wrappixel.com/demos/admin-templates/ampleadmin/ample-admin-lite/js/pages/dashboards/dashboard1.js"></script>
   
   <!-- Bootstrap core JavaScript-->
   <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js"></script>
    <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
