@extends('includes.main')
@section('title', $team->title )
@section('content')
    
    <p>{{ $team->id }} {{ $team->title }} {{ $team->team_year }}</p>

    <button type="submit" class="btn btn-primary">OK</button>

@endsection