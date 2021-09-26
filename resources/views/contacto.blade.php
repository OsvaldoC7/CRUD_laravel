<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
</head>
<body>
    
    <h1>Pagina de contacto</h1>

    <ul>
        <li><a href="{{route('informacion')}}">Informacion</a></li>
        <li><a href="{{route('contacto')}}">Contacto</a></li>
    </ul>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('recibe_contacto')}}" method="POST">

        @csrf
        <label for="correo">Correo: </label><br>
        <input type="email" name="correo" id="correo" required>
        <br>
        <label for="telefono">Telefono: </label><br>
        <input type="text" name="telefono" id="telefono">
        <br>
        <label for="comentario">Comentario: </label><br>
        <textarea name="comentario" id="comentario" cols="30" rows="5" required></textarea>
        <br>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>