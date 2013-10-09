@extends('layouts.master')

@section('title')
   Agregar Libro Tienda Online
@stop


@section('content')
    <div class="">
		@if (Session::has('libroAgregado'))
		  <div class="alert  alert-success">
		        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		        <span>Libro Agregado Con Exito</span>
		  </div>
	    @endif
	</div>

	<div class="">
		@if($errors->has())
			{{ $errors->first('isbn') }}
			{{ $errors->first('titulo') }}
			{{ $errors->first('descripcion') }}
			{{ $errors->first('precio') }}
			{{ $errors->first('autor') }}
			{{ $errors->first('categorias') }}
			{{ $errors->first('imagen') }}
		@endif
	</div>
	{{Form::open(array('url' => 'VeragregarLibro','autocomplete' => 'off','class'=>'form-horizontal form-signin','role' =>'form'))}}
		<h2 class="form-signin-heading">Datos Del Libro</h2>

		 <div class="form-group">
		    <div class="col-md-10">
		       {{Form::text('isbn','',array('class'=>'form-control','placeholder'=>'isbn'))}}<br>
		    </div>
		 </div>

		 <div class="form-group">
		    <div class="col-md-10">
		    	{{Form::text('titulo','',array('class'=>'form-control','placeholder'=>'titulo'))}} 
		    </div>
		</div>

		 <div class="form-group">
		    <div class="col-md-10">
		       {{Form::text('descripcion','',array('class'=>'form-control','placeholder'=>'descripcion'))}}<br>
		    </div>
		 </div>

		  <div class="form-group">
		    <div class="col-md-10">
		       {{Form::text('precio','',array('class'=>'form-control','placeholder'=>'precio'))}}<br>
		    </div>
		 </div>

		  <div class="form-group">
		    <div class="col-md-10">
		       {{Form::text('autor','',array('class'=>'form-control','placeholder'=>'autor'))}}<br>
		    </div>
		 </div>


		 <div class="form-group">
		    <div class="col-md-10">
		    		{{ Form::select('categorias',array(1 => 'Novela Historica',
		    										   2 => 'Computacion',
		    										   3 => 'Internet',
		    										   4 => 'Comedia',
		    										   5 => 'Gastronomia')
		    						) }}
		    </div>
		 </div>


		 <div class="form-group">
		    <div class="col-md-10">
		       {{Form::text('imagen','',array('class'=>'form-control','placeholder'=>'imagen'))}}<br>
		    </div>
		 </div>


		<div class="form-group">
			<div class="col-md-10">
				 {{Form::submit('Agregar',array('class'=>'btn btn-lg btn-primary btn-block'))}}
			</div>
	    </div> 
	{{Form::close()}}
@stop
