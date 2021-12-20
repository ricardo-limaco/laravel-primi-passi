@php
  $titolo = "My first page"
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>{{ $titolo }}</title>
</head>
<body>

  <h1>Hello World</h1>

  <ul>
    <li class="d-inline-block px-3">
      <a href="{{route('chiSiamo')}}" class="text-decoration-none">Chi siamo</a>
    </li>
    <li class="d-inline-block px-3">
      <a href="{{route('shop')}}" class="text-decoration-none">Shop</a>
    </li>
    <li class="d-inline-block px-3">
      <a href="{{route('contatti')}}" class="text-decoration-none">Contatti</a>
    </li>
    <li class="d-inline-block px-3">
      <a href="{{route('faq')}}" class="text-decoration-none">Faq</a>
    </li>
  </ul>


  <h2>{{ $nome }} - {{ $cognome }}</h2>
  
  @if(count($lista_studenti ?? '' > 0))

  <ul>
    @foreach($lista_studenti ?? '' as $elemento)

    <li>
      {{ $loop->index }}
      {{ $elemento }}
    </li>
    @endforeach
  </ul>

  @else
  <p>"Nessun dato disponibile"</p>
  @endif

</body>
</html>