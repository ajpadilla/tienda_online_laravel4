@extends('layouts.layout')

@section('title')
  Carrito De Compras
@stop

@section('content')
	<h2>Bienvenido a la Librería Online</h2><br/>
	<h3>Categoria De Libros</h3>
	@if($categorias)
		<ul>
		    @foreach ($categorias as $categoria)
		    	<li>
		    		{{ HTML::link('categoriaLibro/'.$categoria->id,$categoria->nombre) }}
		    	</li>
		    @endforeach
	    </ul>
	@else
		No hay categorias
	@endif

@stop

