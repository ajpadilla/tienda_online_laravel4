<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://getbootstrap.com/assets/ico/favicon.png">
	<title>
		@section('title')
		@show
	 </title>
	 <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
  	<link href="css/signin.css" rel="stylesheet" type="text/css"  >
</head>
<body>
	<div class="container">
	    <nav class="navbar  navbar-inverse" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		     	    <span class="sr-only">Toggle navigation</span>
		      		<span class="icon-bar"></span>
		      		<span class="icon-bar"></span>
		      		<span class="icon-bar"></span>
	    		</button>
	   		   <a class="navbar-brand" href="tiendaOnline">Tienda Online</a> 
			</div>

			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li>{{ HTML::link('login', 'Iniciar Sesion') }}</li>
				</ul>
			</div>
		</nav>

	    @yield('content')
	</div>

	<script src="bootstrap/dist/js/jquery-2.0.3.js"></script>
    <script src="bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>