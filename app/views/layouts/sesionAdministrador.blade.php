@extends('layouts.master')

@section('title')
   Sesion Administrador
@stop

@section('content')
	@if(Session::has('administrador'))
		<h2>Bienvenido Administrador {{ Session::get('administrador') }}</h2>
		{{ HTML::link('', 'Ir al sitio Principal'); }}
		{{ HTML::link('', 'A&ntilde;adir una nueva categoria'); }}
		{{ HTML::link('', 'A&ntilde;adir un nuevo libro'); }}
		{{ HTML::link('', 'Cambiar contrase&ntilde;a'); }}
		{{ HTML::link('', 'Agregar nuevo usuario administrador'); }}
	@endif
@stop
