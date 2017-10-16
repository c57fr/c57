{{--Template Page Accueil--}}
    <!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
  <base href="https://laravel.c57.fr/"/>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <style>
    html, body {
      background-color: cornsilk;
      color: #636b6f;
      font-family: 'Raleway', sans-serif;
      font-weight: 400;
      height: 70vh;
      margin: 0;
    }

    .full-height {
      height: 70vh;
    }

    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .position-ref {
      position: relative;
    }

    .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
    }

    .content {
      text-align: center;
    }

    .title {
      font-size: 84px;
    }

    .links > a {
      color: #636b6f;
      padding: 0 25px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }

    a {
      transition: 5s;
      text-decoration: none;
    }

    a:hover {
      color: red;
      background-color: yellow;
      transition: .7s;
      cursor: pointer;
      -webkit-border-radius: 7px;
      -moz-border-radius: 7px;
      border-radius: 7px;
    }

    .pad10 {
      padding: 0 10px;
    }

    .links.ext a:hover {
      background-color: cyan;
    }

    .m-b-md {
      margin-bottom: 50px;
    }

    .content > p {
      font-family: arial;
      font-weight: 300;
      color: #777;
    }

    .c57back {
      margin: 20px;
      font-weight: 800;
      color: red;
      text-decoration: none;
    }

    .c57back a {
      text-decoration: none;
    }

    .lien {
      color: blue;
      font-size: .5em;
      font-style: italic;
    }

  </style>
</head>
<body>

<div class="c57back">
  <a href="javascript:history.back()">c57.fr</a>
</div>

<div class="flex-center position-ref full-height">

  @if (Route::has('login'))
    <div class="top-right links">
      @if (Auth::check())
        <a href="{{ url('/home') }}">Home</a>
      @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
      @endif
    </div>
  @endif

  <div class="content">

    <div class="title m-b-md links ext">
      Laravel 5.4

      <div class="lien">
        laravel.c57.fr<br/>
        <a href="{{url('salut/amigo')}}" class="pad10">Hello</a>
      </div>

    </div>

    <div class="links ext">
      <a href="https://laravel.com/docs" target="_blank">Documentation</a>
      <a href="https://laracasts.com" target="_blank">Laracasts</a>
      <a href="https://laravel-news.com" target="_blank">News</a>
      <a href="https://forge.laravel.com" target="_blank">Forge</a>
    </div>
    <hr/>
    <p class="links">Dépôt Git: <a href="https://github.com/c57fr/laravel"
                                   title="Ouverture du dépôt Git dans un autre onglet">https://github.com/c57fr/laravel</a>
    </p>
  </div>
</div>

@include('partials.analytics')

</body>
</html>
