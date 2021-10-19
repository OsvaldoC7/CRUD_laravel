@extends('layouts.mi-layout')

@section('contenido')

    <h1>Personas</h1>

    <a href="{{route('persona.create')}}">Agregar persona</a><br><br>

    <table border="1">

        <thead>
            <tr>
                <th>Areas</th>
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
                    <td>
                        <ul>
                        @foreach ($persona->areas as $area)
                            <li>{{$area->nombre_area}}</li>
                        @endforeach
                        </ul>
                    </td>
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

@endsection