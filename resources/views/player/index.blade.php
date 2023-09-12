@extends('includes.main')
@section('title', 'Players')
@section('content')
    @foreach($players as $player)
    <p><a href="{{ route('players.show', $player->id) }}">{{ $player->last_name }} {{ $player->first_name }} {{ $player->birthday }} {{ $player->position }}</a></p>
    @endforeach 
    <button type="submit" class="btn btn-primary">OK</button>

@endsection