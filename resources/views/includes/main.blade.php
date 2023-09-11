<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.scss','resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body style='background-color: #ececec;'>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Лига</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{ route('teams.index') }}">Команды</a>
        <a class="nav-link" href="{{ route('players.index') }}">Игроки</a>
      </div>
    </div>
  </div>
</nav>


<div class="container">
    @yield('content')
</div>
</body>
</html>