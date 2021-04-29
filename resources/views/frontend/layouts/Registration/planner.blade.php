

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>registration - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    body {
     background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed;
    background-size: cover;
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h2 { 
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    color: #000000;
    margin-top: 5%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}

    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
            <form class="form-horizontal" role="form">
                <h2>Planner Registration</h2>
                <div class="form-group">
                    <label for="planner_name" class="col-sm-3 control-label"> Name</label>
                    <div class="col-sm-9">
                        <input required type="text" id="planner_name" name="planner_name" class="form-control" autofocus>
                    </div>
                </div>
               
               
                <div class="form-group">
                    <label for="planner_email" class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-9">
                        <input required type="email" id="planner_email" name="planner_email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="planner_password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input required type="password" id="planner_password" name="planner_password" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="planner_number" class="col-sm-3 control-label">Phone number </label>
                    <div class="col-sm-9">
                        <input required type="number" id="planner_number" name="planner_number" class="form-control">
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="planner_image" class="col-sm-3 control-label">Upload a photo </label>
                    <div class="col-sm-9">
                        <input  type="file" id="planner_number" name="planner_image" class="form-control">
                        
                    </div>
                    </div>
                
                    <div class="form-group">
                <button type="submit" class="btn btn-success btn-block">Sign Up</button>
            </div> 
            <div class="form-group">
                <a  class="btn btn-primary btn-block" href="{{route('planner.login')}}">Login</a>
            </div> 
            <div class="form-group">
                <a  class="btn btn-danger btn-block" href="">Logout</a>
            </div> 
            
        </form>
        <script type="text/javascript">
	$(function(){
	$.validator.setDefaults({
		highlight: function(element){
			$(element)
			.closest('.form-group')
			.addClass('has-error')
		},
		unhighlight: function(element){
			$(element)
			.closest('.form-group')
			.removeClass('has-error')
		}
	});
	
	$.validate({
		rules:
		{	
		    password: "required",
			birthDate: "required",
			weight: {
			    required:true,
			    number:true
			},
			height:  {
			    required:true,
			    number:true
			},
			email: {
				required: true,
				email: true
			}
		},
			messages:{			
				email: {
				required: true,
				email: true
			}
		},
				password: {
					required: " Please enter password"
				},
				birthDate: {
					required: " Please enter birthdate"
				},
				email: {
					required: ' Please enter email',
					email: ' Please enter valid email'
				},
				weight: {
					required: " Please enter your weight",
					number: " Only numbers allowed"
				},
				height: {
					required: " Please enter your height",
					number: " Only numbers allowed"
				},
			}
			
	});
});	</script>
</body>
</html>
