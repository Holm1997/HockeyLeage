@extends('includes.main')
@section('title', $team->title )
@section('content')
    
    <h1>{{ $team->title }} {{ $team->team_year }}</h1>
    <p>Состав:</p>
    <div class="card border-white mb-3 shadow bg-body-tertiary rounded">
    <ul class="list-group list-group-flush">
    @foreach($players as $player)
    <a href="{{ route('players.show', $player->id) }}">
    <li class="list-group-item">
        <div class="d-flex">
            <p class="col-3">{{ $player->last_name }} {{ $player->first_name }}</p> 
            <p class="col-6 text-center">{{ $player->birthday }}</p>
            <p class="col-auto text-left">{{ $player->position }}</p>
        </div>
    </li>
    </a>
       
    @endforeach
    </ul>
    </div>
@endsection