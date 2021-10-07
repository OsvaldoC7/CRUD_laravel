<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personas</title>
</head>
<body>

    <h1>Personas</h1>

    <a href="{{route('persona.create')}}">Agregar persona</a><br><br>

    <table border="1">

        <thead>
            <tr>
                <th>Usuario</th>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Codigo</th>
                <th>Telefono</th>
                <th>Correo</th>
            </tr>
        </thead>

        <tbody>

            @foreach($personas as $persona)
                <tr>
                    <td>{{$persona->user->name}}</td>
                    <td><a href="{{route('persona.show', $persona->id)}}">{{$persona->id}}</a></td>
                    <td>{{$persona->nombre}}</td>
                    <td>{{$persona->apellido_paterno}}</td>
                    <td>{{$persona->apellido_materno}}</td>
                    <td>{{$persona->codigo}}</td>
                    <td>{{$persona->telefono}}</td>
                    <td>{{$persona->correo}}</td>
                </tr>
            @endforeach

        </tbody>

    </table>

</body>
</html>