<?php 
	/**
	* 
	*/
	class LibroController extends BaseController
	{
		public function agregarLibro()
		{
			return View::make('layouts.agregarlibros');
		}

		public function almacenarLibro()
		{
			$libro=new Libro;

			$libro->isbn=Input::get('isbn');
			$libro->titulo=Input::get('titulo');
			$libro->descripcion=Input::get('descripcion');
			$libro->precio=Input::get('precio');
			$libro->autor=Input::get('autor');
			$libro->id_categoria=Input::get('categorias');
			$libro->imagen=Input::get('imagen');

			$campo=array('isbn'=>$libro->isbn,
						 'titulo'=>$libro->titulo,
						 'descripcion'=>$libro->descripcion,
						 'precio'=>$libro->precio,
						 'autor'=>$libro->autor,
						 'id_categoria'=>$libro->id_categoria,
						 'imagen'=>$libro->imagen);


	    	$reglas=array('isbn'=>'required|alpha_num|unique:libros,isbn',
						  'titulo'=>'required',
						  'descripcion'=>'required',
						  'precio'=>'required|numeric',
						  'autor'=>'required',
						  'id_categoria'=>'required',
						  'imagen'=>'required');

	    	$mensaje=array('required'=>'El campo :attribute esta vacio',
	    				   'alpha_num'=>'El campo :attribute debe contener solo letra y numeros',
	    				   'numeric'=>'El campo :attribute debe contener solo numeros',
	    				   'unique'=>'El :attribute ya existe');

	    	$validar=Validator::make($campo, $reglas,$mensaje);

	    	if ($validar->passes()) {
	    		$libro->save();
	    		 return Redirect::to('VeragregarLibro')->with('libroAgregado',true);
	    	} else {
	    		return Redirect::to('VeragregarLibro')->withErrors($validar);
	    	}
	    	
		}
	}
 ?>