<?php 

	class UserController  extends BaseController
	{
	    public function mostrarUsuarios()
		{
			//return "Bienvenidos al controller para los usuarios";
			$users=User::all();
			return View::make('users.index')->with('users',$users); //ruta de la vista a cargar
		}

	    public function nuevoUsuario()
		{
			return View::make('users.create');
		}	

		public function crearUsuario()
		{
		   $user=new User;

		   $user->full_name=Input::get('full_name');
		   $user->email=Input::get('email');
		   $user->password=Input::get('password');
		   $user->save();

		   return Redirect::to('usuarios');

		  // return "El formulario ha sido llegando";
		}


		public function borrarUsuario($user_id)
		{
		   $user=User::find($user_id);

		   if (is_null($user)) 
		   {
		   	  return Redirect::to('usuarios');
		   }

		   $user->delete();
		   return Redirect::to('usuarios');
		}

		public function cargarUsuario($user_id)
		{
		    $user=User::find($user_id);

		   if (is_null($user)) 
		   {
		   	  return Redirect::to('usuarios');
		   }

		  return View::make('users.update')->with('user',$user);
		}


		public function actualizarUsuario($user_id)
		{
		   $user=User::find($user_id);

		   if (is_null($user)) 
		   {
		   	  return Redirect::to('usuarios');
		   }

           $user->full_name=Input::get('full_name');
		   $user->email=Input::get('email');
		   if (Input::has('password')){
		   	 $user->password=Input::get('password');
		   }
		   $user->save();

		   return Redirect::to('usuarios');
		}

		public function login()
		{
			return View::make('auth.login');
		}

		public function verificarUsuario()
		{
			$email=Input::get('email');
			//$resultado=DB::select('SELECT * FROM users WHERE email = ?', array($email));
			$user=DB::table('users')->where('email',$email)->first();
			if ($user!=NULL) {
				echo "Encontrado <br>";
				echo $user->full_name;
			} else {
				echo "No Encontrado";
				return View::make('auth.login');
			}
			
	    }

		public function loginAdministrador()
		{
			return View::make('layouts.administrador');
		}

	    public function sesionAdministrador()
		{
		   return  View::make('layouts.sesionAdministrador');
		}

	    public function verificarAdministrador()
	    {
	    	$userName=Input::get('full_name');
	    	$password=Input::get('password');
	    	$user=DB::table('users')->where('full_name','=',$userName)->where('password','=',$password)->first();
	    	if (isset($user)) {
				 Session::put('administrador', $user->full_name);
				 return Redirect::to('sesionUsuario');
			} else {
				return Redirect::to('login')->with('login_errors', true);
			}
	    }



	}  
 ?>