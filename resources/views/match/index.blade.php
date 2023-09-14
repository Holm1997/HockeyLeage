@extends('includes.main')
@section('title', 'Matches')
@section('content')
<h1>{{ $tournament->title }} {{ $tournament->teams_year }} г.р. - матчи</h1>
<ul class="nav nav-pills mb-3">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('tournaments.show', $tournament->id) }}">Турнирная таблица</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('matches.index', $tournament->id) }}">Матчи</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Статистика</a>
        </li>
    </ul>
@foreach($matches as $match)
<a href="{{ route('matches.show', $match['id']) }}">
<div class="card">
  <div class="card-body">
  {{$match->home_name}} - {{ $match->guest_name }}
  </div>
</div>
</a>
@endforeach     
@endsection