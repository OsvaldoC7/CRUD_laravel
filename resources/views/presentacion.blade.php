<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presentacion</title>
</head>
<body>
    
    <h1>Pagina de presentacion para {{$nombre}}</h1>

    @if($nombre == 'OSVALDO')
        <h2>Hola Amo</h2>
    @else
        <h2>Hola</h2>
    @endif

    <p>Nombre completo: {{$nombre_completo}}</p>

</body>
</html>