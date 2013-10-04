<h1>Actualizar Usuario</h1>
{{ Form::open(array('url' => array('usuariosGuardar',$user->id))) }}
   {{Form::label('full_name', 'Nombre')}}
   {{Form::text('full_name', $user->full_name)}}<br>

   {{Form::label('email', 'Email')}}
   {{Form::text('email', $user->email)}}<br>

   {{Form::label('password', 'Password')}}
   {{Form::password('password','')}}<br>

   {{Form::submit('Guardar')}}
{{ Form::close() }}