<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body class="antialiased">
        <h1>Página Home</h1>
        @if(2>5)
        <p>a condição é true</p>
        @else
        <p>a condição é falsa</p>
        @endif

        <p>{{ $nome }}</p> 
        @for($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} - {{$i}}</p>
        @if($i==2)
        <p>O i é igual a 2</p>
        @endif
        @endfor


        @foreach ($nomes as $nome)
        <p>{{$loop->index}}</p>
        <p> {{$nome}} </p>
            
        @endforeach
        @php
$name = "Usando PHP nativo";
echo $name;
        @endphp

        {{-- Exemplo de comentário com Blade --}}
    </body>
</html>
