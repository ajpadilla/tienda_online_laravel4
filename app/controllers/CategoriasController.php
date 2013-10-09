<?php 
	
	class CategoriasController extends BaseController
	{
		public function mostrarCategorias()
		{
			$categorias=Categoria::all();
			return View::make('layouts.sesionUsuario')->with('categorias',$categorias);;
		}

		public function vistaAgragarCategoria()
		{
			return View::make('layouts.agregarCategoria');
		}

		public function agregarCategoria()
		{

			$categoria=new Categoria;

			$nombre_categoria=Input::get('nombre_categoria');

			$campo=array('nombre_categoria'=>$nombre_categoria);

			$reglas=array('nombre_categoria'=>'required|alpha_num|unique:categorias,nombre');

	    	$mensaje=array('required'=>'El campo :attribute esta vacio',
	    				   'alpha_num'=>'El campo :attribute debe contener solo letra y numeros',
	    				   'unique'=>'La categotia ya existe');

	    	$validar=Validator::make($campo, $reglas,$mensaje);

	    	if ($validar->passes()){
	    		$categoria->nombre=$nombre_categoria;
	    		$categoria->save();
	    		return Redirect::to('agregarCategoria')->with('agregado',true);
	    	} else {
	    		return Redirect::to('agregarCategoria')->withErrors($validar);
	    	}
	    	
		}

		public function mostraLibrosCategoria($id_categoria)
		{
			echo $id_categoria;
			//$categoria=Categoria::find($id_categoria);
		}



	}
 ?>