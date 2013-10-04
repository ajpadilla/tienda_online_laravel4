<h1>Users</h1>

@if($users)
	<ul>
	    @foreach ($users as $user)
	    	<li>
	    		{{ $user->full_name}} - {{ $user->email}}
	    		{{ HTML::link('usuariosDelete/'.$user->id, 'Borrar'); }}
	    		{{ HTML::link('usuariosUpdate/'.$user->id, 'Actualizar'); }}
	    	</li>
	    @endforeach
    </ul>
@else
	No hay ususario registrado
@endif

{{ HTML::link('usuarios/nuevo', 'Crear Usuario'); }}