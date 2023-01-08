<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba 2</title>
</head>
<body>
    <h1><?php echo $msj ?></h1>
    <h1><?= $msj ?></h1>
    <h1>{{$msj}} {{$num}}</h1>
    <a href="/prueba">Click</a>
    <br>
    <a href="{{route('hola')}}">Click con funcion</a>
</body>
</html>