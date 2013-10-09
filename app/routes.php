<?php

	/*
	|--------------------------------------------------------------------------
	| Application Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register all of the routes for an application.
	| It's a breeze. Simply tell Laravel the URIs it should respond to
	| and give it the Closure to execute when that URI is requested.
	|
	*/

	Route::get('/', function()
	{
		return View::make('hello');
	});

	Route::get('prueba', function() {
	   //return "Bienvenidos a Laravel";
	   
	   $user=new User;
	   
	   $user->email="prueba1@prueba";
	   $user->password="Cuenta prueba 1";
	   $user->full_name="prueba 1";
	   
	   $user->save();
	   
	   return "El usuario a sido agragado a la base de datos";
	});


	Route::get('usuarios', 'UserController@mostrarUsuarios'); //ejecuta el metodo de UserController

	Route::get('usuarios/nuevo','UserController@nuevoUsuario');

	Route::post('usuarios/crear','UserController@crearUsuario');

	Route::get('usuariosDelete/{id}','UserController@borrarUsuario');

	Route::get('usuariosUpdate/{id}','UserController@cargarUsuario');

	Route::post('usuariosGuardar/{id}','UserController@actualizarUsuario');

	Route::get('loginUser','UserController@login');

	Route::post('sesion_usuario','UserController@verificarUsuario');

	Route::get('inicio',function(){
		return View::make('peticiones.template');
	});

	Route::get('content', function() {
		return View::make('peticiones.content');
	});

	Route::get('login','UserController@loginAdministrador');
	Route::post('login','UserController@verificarAdministrador');
	Route::get('sesionUsuario','UserController@sesionAdministrador');
	Route::get('tiendaOnline','CategoriasController@mostrarCategorias');
	Route::get('agregarCategoria','CategoriasController@vistaAgragarCategoria');
    Route::post('agregarCategoria','CategoriasController@agregarCategoria');
    Route::get('categoriaLibro/{id}','CategoriasController@mostraLibrosCategoria');
    Route::get('VeragregarLibro','LibroController@agregarLibro');
    Route::post('VeragregarLibro','LibroController@almacenarLibro');
?>