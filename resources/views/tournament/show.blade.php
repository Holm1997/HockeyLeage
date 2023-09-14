@extends('includes.main')
@section('title', 'Tournaments')
@section('content')
    <h1>{{ $tournament->title }} {{ $tournament->teams_year }} г.р. - турнирная таблица</h1>
    <ul class="nav nav-pills mb-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('tournaments.show', $tournament->id) }}">Турнирная таблица</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('matches.index', $tournament->id) }}">Матчи</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Статистика</a>
        </li>
    </ul>
    
    <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Команда</th>
      <th scope="col">В</th>
      <th scope="col">П</th>
      <th scope="col">Н</th>
      <th scope="col">Очки</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  @foreach ($teams as $team)
    <tr>
      <th scope="row">{{ $team->title }} {{ $team->team_year }}</th>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
    </tr>
@endforeach
  </tbody>
</table>




<a href="{{ route('matches.create', $tournament->id) }}">Create a new match</a>
@endsection