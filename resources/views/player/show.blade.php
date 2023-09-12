@extends('includes.main')
@section('title', $player->last_name )
@section('content')
    
    <h1>{{ $player->last_name }} {{ $player->first_name }}</h1>
    <a href="{{ route('players.edit', $player->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('players.delete', $player->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection