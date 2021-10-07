<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    
    <h1>Informacion de {{$persona->nombre}}</h1><hr>

    <a href="{{route('persona.index')}}">Listado de personas</a>

    <ul>
        <li>{{$persona->apellido_paterno . ' ' . $persona->apellido_materno}}</li>
        <li>{{$persona->codigo}}</li>
        <li>{{$persona->telefono}}</li>
        <li>{{$persona->correo}}</li>
    </ul>

    <p>Usuario Creador: {{$persona->user->name}} ({{$persona->user->email}})</p>

    <a href="{{route('persona.edit', $persona)}}">Editar</a><br><hr>

    <form action="{{route('persona.destroy', $persona)}}" method="POST">
        @method('DELETE')    
        @csrf
        <input type="submit" value="Eliminar">
    </form>

</body>
</html>