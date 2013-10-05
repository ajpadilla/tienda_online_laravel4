@extends('layouts.master')

@section('title')
  Iniciar Sesion Administrador
@stop

@section('content')
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
@stop




