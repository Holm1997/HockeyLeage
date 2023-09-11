@extends('includes.main')
@section('title', 'Teams')
@section('content')
    <a href="/teams/create">Добавить новую команду</a>
    @foreach($teams as $team)
    <a href="{{ route('teams.show', $team->id) }}">
    <div class="card border-white mb-3 shadow bg-body-tertiary rounded">
        <div class="card-body">
        {{ $team->title }} {{ $team->team_year }}
        
        </div>
    </div>
    </a>
    @endforeach 

@endsection