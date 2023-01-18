<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear Post</h1>
    <form action="{{route('post2.store')}}" method="POST">
        @csrf

        <label for="">Titulo</label>
        <input type="text" name="Title">

        <label for="">Slug</label>
        <input type="text" name="Slug">

        <label for="">Categoria</label>
        <select name="category_id">
            <option value=""></option>
            @foreach ($categories as $c)
                <option value="{{$c->id}}">{{$c->Title}}</option>
            @endforeach
        </select>

        <label for="">Posteado</label>
        <select name="posted">
            <option value="yes">Si</option>
            <option value="not">No</option>
        </select>

        <label for="">Contenido</label>
        <textarea name="Content"></textarea>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>