@section('content')
 {{ HTML::link('usuarios', 'volver'); }}
<h1>Crear Usuario</h1>
        {{ Form::open(array('url' => 'usuarios/crear')) }}
            {{Form::label('full_name', 'Nombre')}}
            {{Form::text('full_name', '')}}<br>
            {{Form::label('email', 'Email')}}
            {{Form::text('email', '')}}<br>
            {{Form::label('password', 'Password')}}
            {{Form::password('password', '')}}<br>
            {{Form::submit('Guardar')}}
        {{ Form::close() }}