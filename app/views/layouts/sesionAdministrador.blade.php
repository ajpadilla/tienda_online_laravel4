@extends('layouts.master')

@section('title')
   Sesion Administrador
@stop


@section('content')
	@if(Session::has('administrador'))
		<h2>Bienvenido Administrador {{ Session::get('administrador') }}</h2>
	@endif
@stop
