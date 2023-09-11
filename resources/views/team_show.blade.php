@extends('includes.main')
@section('title', $team->title )
@section('content')
    
    <p>{{ $team->id }} {{ $team->title }} {{ $team->team_year }}</p>
    <p>Состав:</p>
    @foreach($players as $player)
    <p>{{ $player->last_name }} {{ $player->first_name }} {{ $player->birthday }} {{ $player->position }}</p>
    @endforeach

@endsection