<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://getbootstrap.com/assets/ico/favicon.png">

	<title>{{ $titulo }}</title>
	 <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
  	<link href="css/signin.css" rel="stylesheet" type="text/css"  >

</head>
<body>
	<div class="container">
		{{Form::open(array('url' => 'login','autocomplete' => 'off','class'=>'form-horizontal form-signin','role' =>'form'))}}

		    <h2 class="form-signin-heading">Please sign in</h2>

		    @if (Session::has('login_errors'))
		        <div class="alert alert-danger">
		        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		        	<span class="error">Usuario o contraseña incorrectos.</span>
		        </div>
		    @endif

		    <div class="form-group">
		    	<div class="col-md-10">
		     	  {{Form::text('full_name','',array('class'=>'form-control','placeholder'=>'username'))}}<br>
		    	</div>
		    </div>

		    <div class="form-group">
		    	<div class="col-md-10">
		    		{{Form::password('password',array('class'=>'form-control','placeholder'=>'password'))}} 
		    	</div>
			</div>

			<div class="form-group">
				<div class="col-md-10">
					 {{Form::submit('Login',array('class'=>'btn btn-lg btn-primary btn-block'))}}
				</div>
		    </div> 
		{{Form::close()}}	
	</div>
	

	<script src="bootstrap/dist/js/jquery-2.0.3.js"></script>
    <script src="bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>

