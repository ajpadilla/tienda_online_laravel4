<!DOCTYPE html>
<html lang="es">
<head>
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
	<section>
 		<div class="container">
	    	@yield('content')
	   </div>
	</section>

	<script src="bootstrap/dist/js/jquery-2.0.3.js"></script>
    <script src="bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>