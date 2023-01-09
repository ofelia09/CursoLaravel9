<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
        },
      }
    }
  }
  </script>
</head>
<body>
    @include("templates.narbar")
    {{$name}}
    <!-- {{$age}} -->
    {{--$age--}}
    {!!$HTML!!}

    @if($name=="Ofelia")
        Es true
    @endif

    @foreach($array as $a)
    <div class= "box item">
        <p>{{$a}}</p>
    </div>
    @endforeach

    <ul>
        @foreach($array as $a)
            <li class="hola">{{$a}}</li>
        @endforeach
    </ul>
</body>
</html>