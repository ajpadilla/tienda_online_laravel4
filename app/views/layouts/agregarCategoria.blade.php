@extends('layouts.master')

@section('title')
   Agregar Categotia 
@stop

@section('content')
	<div class="">
		@if (Session::has('agregado'))
		  <div class="alert  alert-success">
		        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		        <span>Categoria Agregada Con Exito</span>
		  </div>
	    @endif
	</div>

	<div class="">
		@if($errors->has())
			{{ $errors->first('nombre_categoria') }}
		@endif
	</div>

	{{ Form::open(array('url'=>'agregarCategoria','autocomplete' => 'off','role' =>'form')) }}
		<div class="form-group">
    		  {{Form::text('nombre_categoria','',array('class'=>'form-control','placeholder'=>'categoria'))}}<br>
  		</div>
  		{{Form::submit('Agregar',array('class'=>'btn btn-lg btn-primary btn-block'))}}
	{{Form::close()}}
@stop 